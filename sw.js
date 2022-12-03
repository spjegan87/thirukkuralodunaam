(function() {
  var nativeAddAll = Cache.prototype.addAll;
  var userAgent = navigator.userAgent.match(/(Firefox|Chrome)\/(\d+\.)/);

  // Has nice behavior of `var` which everyone hates
  if (userAgent) {
    var agent = userAgent[1];
    var version = parseInt(userAgent[2]);
  }

  if (
    nativeAddAll && (!userAgent ||
      (agent === 'Firefox' && version >= 46) ||
      (agent === 'Chrome'  && version >= 50)
    )
  ) {
    return;
  }

  Cache.prototype.addAll = function addAll(requests) {
    var cache = this;

    // Since DOMExceptions are not constructable:
    function NetworkError(message) {
      this.name = 'NetworkError';
      this.code = 19;
      this.message = message;
    }

    NetworkError.prototype = Object.create(Error.prototype);

    return Promise.resolve().then(function() {
      if (arguments.length < 1) throw new TypeError();

      // Simulate sequence<(Request or USVString)> binding:
      var sequence = [];

      requests = requests.map(function(request) {
        if (request instanceof Request) {
          return request;
        }
        else {
          return String(request); // may throw TypeError
        }
      });

      return Promise.all(
        requests.map(function(request) {
          if (typeof request === 'string') {
            request = new Request(request);
          }

          var scheme = new URL(request.url).protocol;

          if (scheme !== 'http:' && scheme !== 'http:') {
            throw new NetworkError("Invalid scheme");
          }

          return fetch(request.clone());
        })
      );
    }).then(function(responses) {
      // If some of the responses has not OK-eish status,
      // then whole operation should reject
      if (responses.some(function(response) {
        return !response.ok;
      })) {
        throw new NetworkError('Incorrect response status');
      }

      // TODO: check that requests don't overwrite one another
      // (don't think this is possible to polyfill due to opaque responses)
      return Promise.all(
        responses.map(function(response, i) {
          return cache.put(requests[i], response);
        })
      );
    }).then(function() {
      return undefined;
    });
  };

  Cache.prototype.add = function add(request) {
    return this.addAll([request]);
  };
});

/** Files to be cached in local **/

var cacheFilesLocal = [
			'/index.php',
			'/css/custom-style.css',
			'/css/admin-style.css',
			'/css/bootstrap.min.css',
			'/js/bootstrap.js'

			/** '/corporate2.0/lib/css/beforeLogin/main.css', **/
			/**'/corporate2.0/lib/css/beforeLogin/main_minified.css',**/
     ];

 /** Files to be cached in Live **/
var cacheFiles = [
			'/index.php',
			'/css/custom-style.css',
			'/css/admin-style.css',
			'/css/bootstrap.min.css',
			'/js/bootstrap.js'
			];

var staticCacheName = 'v1';

self.addEventListener('install', function(event) {
  //console.log('Attempting to install service worker and cache static assets');
  event.waitUntil(
    caches.open(staticCacheName)
    .then(function(cache) {
      return cache.addAll(cacheFiles)
		  .catch((error) =>  {
          console.error('Failed to cache', error);
        });
    })
  );
});

self.addEventListener('fetch', function(event) {
  //console.log('Fetch event for ', event.request.url);
  event.respondWith(
    caches.match(event.request).then(function(response) {
      if (response) {
        //console.log('Found ', event.request.url, ' in cache');
        return response;
      }
     // console.log('Network request for ', event.request.url);
      return fetch(event.request)
    }).catch(function(error) {
		  // offline page addition done here //
    })
  );
});