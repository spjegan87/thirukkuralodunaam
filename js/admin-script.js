$(document).ready(function()
{
	/* Check box selection in mailer comments */
	$("#checkAl").click(function ()
	{
		$('input:checkbox').not(this).prop('checked', this.checked);
	});
	/* Check box selection in mailer comments End */
	/* Redirect Pages 
	$.ajax({
		statusCode:
		{
			200: function()
			{
				window.location.assign("https://www.w3schools.com")
			}
		}
	});*/
	/* Redirect Pages End */
	if($('.error-msg, .error-success').is(":visible"))
	{
		setInterval(function(){
			$(".error-msg").fadeOut(800);
			$(".error-success").fadeOut(800);
		}, 3000);
	}
	/* admin photogallery edit page check up 
	$('.gallery-edit .gallery').each(function()
	{
		var a = $(this).find('input.cus-browse').val();
		if(a == '')
		{
			$(this).parents('.clone').hide();
		}
	});*/
	/* Clone script */
	/* Get confirmation before submit */

	$(document).on('click','.upload',function()
	{
		var a = $("#file").val();
		if(a == "")
		{
			$('.file-validate').fadeIn().text('Upload the thirukkural CSV file');
			$('.file-validate').addClass('text-danger');
			setInterval(function()
			{
				$(".file-validate").fadeOut(800);
			}, 3000);
			return false;
		}
	});
	
	$(document).on('click','.nclose',function()
	{
		$(this).parents('.notify-container').fadeOut(800);
	});

	$(document).on('click','.forgot-pwd',function()
	{
		$(this).parents('form').slideUp();
		$(this).parents('form').next('form').slideDown();	
	});
	$(document).on('click','.backto-sign',function()
	{
		$(this).parents('form').slideUp();
		$(this).parents('form').prev('form').slideDown();	
	});
	$(document).on('click','.fn-confirmation',function()
	{
		var c = confirm("Are you want to submit entered details?");
		return c; 
	});
	/* Get confirmation before submit End */
	/* Display Time */
	var time = new Date();
	var distime =  time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
	$('#time').text('Time :'+distime);
	/* Display Time End */
	var cloneCount = 1;
	$(document).on('click','.clone-add',function()
	{
		var a = cloneCount++;
		var lengthcount = $('.clone').length;
		var textnum = $(this).parents('.clone').find('.textindex').text();
		if(lengthcount > 0)
		{
			$(this).parents('.clone').clone().insertAfter($(this).parents('.clone'));
			$(this).parents('.clone').next('.clone').find('a.clone-minus').fadeIn();
			$(this).parents('.clone').next('.clone').find('.cus-browse').attr({'name':'photo'+a});
			$(this).parents('.clone').next('.clone').find('.filechange').attr({'name':'photo'+a});
			$(this).parents('.clone').next('.clone').find('.gallertext').attr({'name':'gallerytext'+a});
			//Text Number increase
			//$(this).parents('.clone').next('.clone').find('.textindex').text('Service Image'+' '+a);
			$('.clone:last').find('.clone-minus').fadeIn();
			// After clone error msg hide
			$(this).parents('.clone').next('.clone').find('.file-validate').hide();
			// After clone empty value
			$(this).parents('.clone').next('.clone').find('.cus-browse').val('');
		}
		if(lengthcount == 5)
		{
			alert('Sorry only 5 images allowed to upload here!!!');
			$(this).parents('.clone').next('.clone').remove();
		}
	});
	$(document).on('click','.clone-minus',function()
	{
		var a = cloneCount--;
		$(this).parents('.clone').remove();
		$(this).parents('.clone').prev('.clone').hide();
	});
	/* Clone script End */
	/* Table sorting start */
	$('.no-data').hide();
	$(document).on('keyup','.searchbox',function()
	{
		var a = $(this).val().toLowerCase();
		var cntLngth = $(this).val().length;
		$('.myTable tr','.player p').filter(function()
		{
			$(this).toggle($(this).text().toLowerCase().indexOf(a) > -1);
		});
		if($('.myTable tr:visible', '.player p:visible').length == 0)
		{
			$('.no-data').show();
		}
		if(cntLngth == '0')
		{
			$('.no-data').hide();
		}
	});
	/* Table sorting end */
	/* Common Sorting Search box script start */
	$('.no-data').hide();
	$(document).on('keyup','.searchbox',function()
	{
		var a = $(this).val().toLowerCase();
		var searchContainer = $(this).attr('name');
		//alert(searchContainer);
		var cntLngth = $(this).val().length;
		$('.'+searchContainer).filter(function()
		{
			$(this).toggle($(this).text().toLowerCase().indexOf(a) > -1);
			var countL = $('.'+searchContainer+':visible').length;
			console.log(countL);
			if($('.'+searchContainer+':visible').length == 0)
			{
				$('.no-data').show();
			}
			else
			{
				$('.no-data').hide();
			}
		});
	});
	/* Common Sorting Search box script end */
	/* Image upload validation checking start */
	$(document).on('change','.upload-photo',function()
	{
		/* File type checking */
		var allowedFiles = [".jpg", ".png", ".jpeg","gif"];
		var fileUpload = $(this);
		var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
		if (!regex.test(fileUpload.val().toLowerCase()))
		{
			$(this).parents('.form-group').find('.file-validate').slideDown().addClass('error').text('Allowed image only.');
			$(this).val('');
			return false;
		}
		/* File type checking */
		/* File Size Checking */
		var setSize = 2000000;
		var getSize = this.files[0].size;
		if(getSize > setSize)
		{
			$(this).parents('.form-group').find('.file-validate').slideDown().addClass('error').text('File size too long please change.');
			$(this).val('');
		}
		else
		{
			$(this).parents('.form-group').find('.file-validate').slideDown().removeClass('error').text('Success');
		}
		/* File Size Checking End */
	});
	/* Image upload validation checking end */
	
	/* Image upload validation checking start */
	$(document).on('change','.videoupload-photo',function()
	{
		/* File type checking */
		var allowedFiles = [".mp4",".xlsx",".xls",".doc",".docx",".ppt",".pptx",".txt",".pdf"];
		var fileUpload = $(this);
		var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
		if (!regex.test(fileUpload.val().toLowerCase()))
		{
			$(this).parents('.form-group').find('.file-validate').slideDown().addClass('error').text('Allowed videos only.');
			$(this).val('');
			return false;
		}
		/* File type checking */
		/* File Size Checking */
		var setSize = 700000000;
		var getSize = this.files[0].size;
		if(getSize > setSize)
		{
			$(this).parents('.form-group').find('.file-validate').slideDown().addClass('error').text('File size too long please change.');
			$(this).val('');
		}
		else
		{
			$(this).parents('.form-group').find('.file-validate').slideDown().removeClass('error').text('Success');
		}
		/* File Size Checking End */
	});
	/* Image upload validation checking end */
	/* Scroll Effects */
	//$(".boxscroll1").niceScroll({touchbehavior:true,cursorcolor:"#1C807B",cursoropacitymax:0.7,cursorwidth:6,background:"#5E5854",autohidemode:false});
	/* Scroll Effects */
	/* Animation right hand */
	$(document).on('click','.fa-hand-o-right',function()
	{
		$(this).parents('.panel-hdr-lft').next('.panel-hdr-rgt').find('.search-panel span').stop().animate({width:'8%'}, 400, 'linear');
		$(this).parents('.panel-hdr-lft').next('.panel-hdr-rgt').find('.theme-setting').stop(true, true).animate({left:'2%'}, 400);
		$(this).fadeOut(200);
		$(this).next('.fa-hand-o-left').fadeIn(500);
	});
	/* Animation right hand */
	/* Animation left hand */
	$(document).on('click','.fa-hand-o-left',function()
	{
		$(this).parents('.panel-hdr-lft').next('.panel-hdr-rgt').find('.search-panel span').stop().animate({width:'60%'}, 400, 'linear');
		$(this).parents('.panel-hdr-lft').next('.panel-hdr-rgt').find('.theme-setting').stop().animate({left:'-78%'}, 900);
		$(this).fadeOut(200);
		$(this).prev('.fa-hand-o-right').fadeIn(500);
	});
	/* Animation left hand end */
	/* Animation input search box focus */
	$(document).on('click','.anim-search',function()
	{
		$(this).parents('.search-panel').prev('.theme-setting').stop().animate({left:'-78%'}, 900);
		$(this).parents('.search-panel span').stop().animate({width:'60%'}, 400, 'linear');
		$(this).parents('.panel-hdr-rgt').prev('.panel-hdr-lft').find('.fa-hand-o-left').fadeOut(200);
		$(this).parents('.panel-hdr-rgt').prev('.panel-hdr-lft').find('.fa-hand-o-right').fadeIn(200);
	});
	$(document).on('click','.fa-search',function()
	{
		$(this).parents('.search-panel').prev('.theme-setting').stop().animate({left:'-78%'}, 900);
		$(this).parents('.search-panel span').stop().animate({width:'60%'}, 400, 'linear');
		$(this).parents('.panel-hdr-rgt').prev('.panel-hdr-lft').find('.fa-hand-o-left').fadeOut(200);
		$(this).parents('.panel-hdr-rgt').prev('.panel-hdr-lft').find('.fa-hand-o-right').fadeIn(200);
	});
	/* Animation input search box focus End */
	/* login-panel */
	$(document).on('click','.login-panel a',function()
	{
		/* Admin menu slide */
		$('.menu-mobile-control').toggleClass('active');
		/* Admin menu slide */
		$(this).parents().find('.login-panel-show').slideToggle(400);
		if($('.login-panel-show').is(':visible'))
		{
			$('.login-panel').find('.fa-times').fadeToggle(400);
			$('.login-panel').find('.fa-bars').fadeToggle(400);
		}
	});
	/* login-panel */
	/* Menu Expand */
	$(document).on('click','.admin-menu li a',function()
	{
		$(this).toggleClass('active');
		$(this).next('.sub-menu').slideToggle(400);
	});
	$(document).on('click','.sub-menu li a',function()
	{
		$(this).removeClass('active');
	});
	/*$(document).on('click','.work-area',function()
	{
		$('.admin-menu li a').removeClass('active');
		$('.sub-menu').slideUp(400);
	});*/
	/* Menu Expand End */
	/* Theme color changes */
	$(document).on('click','.theme-setting a',function()
	{
		$(this).addClass('active').siblings().removeClass('active');
	});
	/* Theme color changes End */
	/* Accordion function */
	$(document).on('click','.caree-btn',function()
	{
		$(this).parents('.accor-cond-click').next().slideDown();
		$(this).parents('.accor-cond').nextAll().find('.accor-cond-show').slideUp();
		$(this).parents('.accor-cond').prevAll().find('.accor-cond-show').slideUp();
		var a = $(this).parents('.accor-cond-click').next('.accor-cond-show');
		if(a.is(':visible'))
		{
			//$(this).text('Show Less');
			$(this).parents('.accor-cond').prevAll('.accor-cond').find('.caree-btn').text('View More');
			$(this).parents('.accor-cond').nextAll('.accor-cond').find('.caree-btn').text('View More');
		}
	});
	/* Date format */
	$('#date').add('#date1').datepicker(
	{
		format: "dd/mm/yyyy"
	});
	/* Date format end */
	/* Radio button scripts */
	$(document).on('click','.radio-btn',function()
	{
		$(this).children('label i').addClass('wc-icon_2_roundcircledot');
		$(this).prevAll().children('label i').removeClass('wc-icon_2_roundcircledot');
		$(this).nextAll().children('label i').removeClass('wc-icon_2_roundcircledot');
		
	});
	/* Radio button scripts */
	/**** browse file upload start ***/
	$(document).on('click','.browse',function()
	{
		$(this).next('input').trigger('click');
	});
	$(document).on('change','.filechange',function()
	{
		var a= $(this).val();
		a=a.substring(a.lastIndexOf("\\") + 1, a.length);
		$(this).parents('.form-group').find('.cus-browse').val(a);
	});
	/**** browse file upload end ***/
	/* Common Slide Down Function */
	$(document).on('click','.slide-click',function()
	{
		$(this).parents().next('.slide-open').slideToggle(800, function() {
			$('html, body').delay('200').animate({
			scrollTop: $(this).offset().top - 0
			}, 800);
		});
	});
	// Ajax calling username checkup //
	
	/* Ajax for username checking */
	$(document).on('blur','.tno',function()
	{
		var tno=$(this).val();
		if(tno)
		{
			$.ajax(
			{
				type: 'post',
				url : '../../admin/sql_query/kuralnochecking.php',
				data:
				{
					tno:tno,
				},
				success: function (response)
				{
					$( '.name_status').html(response);
					if(response=="OK")
					{
						$('.name_status').html("<span class='text-success'>No kural no available.</span>")
					}
					else
					{
						$('.name_status').html("<span class='text-danger'>Already exist.</span>")
					}
				}
			});
		}
		else
		{
			$( '.name_status' ).html("");
			return false;
		}
	});
	/* Ajax for username checking end */
	
	/* Ajax for load thirukkural athikaaram */
	
	/* Ajax for username checking end */
	
});
$(window).load(function()
{
	$('.admin-menu li').each(function()
	{
		var htp = window.location.protocol;
		var host = window.location.hostname;
		var a = $(this).children('a').attr('href');
		var getUrl = window.location.href;
		var trimUrl = getUrl.split('/').pop();
		if(trimUrl == a)
		{
			$(this).addClass('active').siblings().removeClass('active');
		}
	});
});
// Common function
function trimurl()
{
	getUrl = window.location.href;
	trimUrl = getUrl.split('/').pop();
}

function abupdated()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=aboutuspage.php';
	}, 5000);
}
function hpupdated()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=homepagebanner.php';
	}, 5000);
}
function updateuwordspage()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allduwords.php';
	}, 2000);
}
function vupdated()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allvideos.php';
	}, 2000);
}
function serviceupdate()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allservices.php';
	}, 2000);
}
function newsupdate()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allnews.php';
	}, 2000);
}
function kuralupdate()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allkural.php';
	}, 500);
}
function bookupdate()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allbooks.php';
	}, 500);
}

function nupdate()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allnotification.php';
	}, 500);
}
function kupdate()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allkeywords.php';
	}, 500);
}
function ytvideoupdate()
{
	window.setTimeout(function()
	{
		trimurl();
		window.location.href ='index.php?page=allytvideo.php';
	}, 500);
}

/* Load thirukkural data's */
// array of possible countries in the same order as they appear in the country selection list 
var countryLists = new Array()
countryLists["empty"] = ["தேர்வு செய்ய திருக்குறள் அதிகாரம் "];
//countryLists["அறத்துப்பால்"] = [['Test 1','Jegan'],['Test 2','Priya']];
countryLists["அறத்துப்பால்"] = [["1","கடவுள் வாழ்த்து"],["2","வான்சிறப்பு"],["3","நீத்தார் பெருமை"],["4","அறன் வலியுறுத்தல்"],["5","இல்வாழ்க்கை"],["6","வாழ்க்கைத் துணைநலம்"],["7","மக்கட்பேறு / புதல்வரைப் பெறுதல்"],["8","அன்புடைமை"],["9","விருந்தோம்பல்"],["10","இனியவைகூறல்"],["11","செய்ந்நன்றி அறிதல்"],["12","நடுவு நிலைமை"],["13","அடக்கமுடைமை"],["14"," ஒழுக்கமுடைமை"],["15","பிறனில் விழையாமை"],["16","பொறையுடைமை"],["17","அழுக்காறாமை"],["18","வெஃகாமை"],["19","புறங்கூறாமை"],["20","பயனில சொல்லாமை"],["21","தீவினையச்சம்"],["22","ஒப்புரவறிதல்"],["23","ஈகை"],["24","புகழ்"],["25","அருளுடைமை"],["26","புலான்மறுத்தல்"],["27","தவம்"],["28","கூடாவொழுக்கம்"],["29","கள்ளாமை"],["30","வாய்மை"],["31","வெகுளாமை"],["32","இன்னாசெய்யாமை"],["33","கொல்லாமை"],["34","நிலையாமை"],["35","துறவு"],["36","மெய்யுணர்தல்",],["37","அவாவறுத்தல்"],["38","ஊழ்"]];
countryLists["பொருட்பால்"] = [["39","இறைமாட்சி"],["40","கல்வி"],["41","கல்லாமை"],["42","கேள்வி"],["43","அறிவுடைமை"],["44","குற்றங்கடிதல்"],["45","பெரியாரைத் துணைக்கோடல்"],["46","சிற்றினஞ்சேராமை"],["47","தெரிந்துசெயல்வகை"],["48","வலியறிதல்"],["49","காலமறிதல்"],["50","இடனறிதல்"],["51","தெரிந்துதெளிதல்"],["52","தெரிந்துவினையாடல்"],["53","சுற்றந்தழால்"],["54","பொச்சாவாமை"],["55","செங்கோன்மை"],["56","கொடுங்கோன்மை"],["57","வெருவந்தசெய்யாமை"],["58","கண்ணோட்டம்"],["59","ஒற்றாடல்"],["60","ஊக்கமுடைமை"],["61","மடியின்மை"],["62","ஆள்வினையுடைமை"],["63","இடுக்கணழியாமை"],["64","அமைச்சு"],["65","சொல்வன்மை"],["66","வினைத்தூய்மை"],["67","வினைத்திட்பம்"],["68","வினைசெயல்வகை"],["69","தூது"],["70","மன்னரைச் சேர்ந்தொழுதல்"],["71","குறிப்பறிதல்"],["72","அவையறிதல்"],["73","அவையஞ்சாமை"],["74","நாடு "],["75","அரண்"],["76","பொருள்செயல்வகை"],["77","படைமாட்சி"],["78","படைச்செருக்கு"],["79","நட்பு "],["80","நட்பாராய்தல்"],["81","பழைமை"],["82","தீ நட்பு"],["83","கூடாநட்பு"],["84","பேதைமை"],["85","புல்லறிவாண்மை"],["86","இகல்"],["87","பகைமாட்சி"],["88","பகைத்திறந்தெரிதல்"],["89","உட்பகை"],["90","பெரியாரைப் பிழையாமை"],["91","பெண்வழிச்சேறல்"],["92","வரைவின்மகளிர்"],["93","கள்ளுண்ணாமை"],["94","சூது"],["95","மருந்து"],["96","குடிமை"],["97","மானம்"],["98","பெருமை"],["99","சான்றாண்மை"],["100","பண்புடைமை"],["101","நன்றியில்செல்வம்"],["102","நாணுடைமை"],["103","குடிசெயல்வகை"],["104","உழவு"],["105","நல்குரவு"],["106","இரவு"],["107","இரவச்சம்"],["108","கயமை"]];
countryLists["காமத்துப்பால்"] =[["109","தகையணங்குறுத்தல்"],["110","குறிப்பறிதல்"],["111","புணர்ச்சிமகிழ்தல்"],["112","நலம்புனைந்துரைத்தல்"],["113","காதற்சிறப்புரைத்தல்"],["114","நாணுத்துறவுரைத்தல்"],["115","அலரறிவுறுத்தல்"],["116","பிரிவாற்றாமை"],["117","படர்மெலிந்திரங்கல்"],["118","கண்விதுப்பழிதல்"],["119","பசப்புறுபருவரல்"],["120","தனிப்படர்மிகுதி"],["121","நினைந்தவர்புலம்பல்"],["122","கனவுநிலையுரைத்தல்"],["123","பொழுதுகண்டிரங்கல்"],["124","உறுப்புநலனழிதல்"],["125","நெஞ்சொடுகிளத்தல்"],["126","நிறையழிதல்"],["127","அவர்வயின்விதும்பல்"],["128","குறிப்பறிவுறுத்தல்"],["129","புணர்ச்சிவிதும்பல்"],["130","நெஞ்சொடுபுலத்தல்"],["131","புலவி"],["132","புலவி நுணுக்கம்"],["133","ஊடலுவகை"]];
/* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */
function countryChange(selectObj) {
    // get the index of the selected option 
    var idx = selectObj.selectedIndex;
    // get the value of the selected option 
    var which = selectObj.options[idx].value;
    // use the selected option value to retrieve the list of items from the countryLists array 
    cList = countryLists[which];
    // get the country select element via its known id 
    var cSelect = document.getElementById("kuralathikaram");
    // remove the current options from the country select 
    var len = cSelect.options.length;
    while (cSelect.options.length > 0) {
        cSelect.remove(0);
    }
    var newOption;
    // create new options 
    for (var i = 0; i < cList.length; i++) {
        newOption = document.createElement("option");
        newOption.value = cList[i][0]; // assumes option string and value are the same 
        newOption.text = cList[i][1];
        // add the new option 
        try {
            cSelect.add(newOption); // this will fail in DOM browsers but is needed for IE 
        } catch (e) {
            cSelect.appendChild(newOption);
        }
    }
}
/* Load thirukkural data's */
