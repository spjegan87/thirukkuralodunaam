$(window).load(function()
{
	/* Page Not found page display */
	/* Page Not found page display */

	$('.carousel-inner .item:first-child').addClass('active');
	$('.title li').each(function()
	{
		var a = $(this).children('a').attr('href');
		var getUrl = window.location.href;
		var b = getUrl.split('/').pop();
		if(b == a)
		{
			$(this).addClass('active').siblings().removeClass('active');
			$(this).parents('li').addClass('active');
		}
	});
});
$(document).ready(function()
{
	// Captach refresh 
	$(document).on('click','#conCaptchaRefresh, #captchaRefresh',function()
	{
		var capImg = $(this).prev().find('img');
		capImg.attr("src",capImg.attr("src")+Date.now());
	});
	/* Mobile menu collapse */
	$(document).on('click','.title li',function()
	{
		$('.video-container').scrollTop();
	});
	$(document).on('click','.navbar-toggle',function()
	{
		$('.navbar-collapse').removeClass('out');
	});
	$(document).on('click','.xs-menu-close',function()
	{
		$('.navbar-collapse').addClass('out').removeClass('in');
	});
	var offset = 200,
	scroll_top_duration = 700,
	$back_to_top = $('.cd-top');
	$(window).scroll(function()
	{
		($(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
	});
	$back_to_top.on('click', function(event)
	{
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
			}, scroll_top_duration
		);
	});
	/* Video scroll function */
		$(".video-scrollbar").niceScroll({cursorborder:"",cursorcolor:"#A00505",boxzoom:true});
	/* Video scroll function End */
	/* Find id */
	$('.video-panel-play .player').each(function()
	{
		var a = $(this).index();
		var setId = $(this).find('video');
		setId.attr('id',a);
	});
	/* Find id End */
	/* Thirukkural Function */
	$(document).on('click','.thirukkural li a',function()
	{
		$(this).parent().find('.explanation').slideToggle();
	});
	/* Thirukkural Function End */
	/* Find url and active class added*/
function trimurl()
{
	getUrl = window.location.href;
	trimUrl = getUrl.split('/').pop();
}
$(window).load(function()
{
	$('.menu-nav li').each(function()
	{
		var a = $(this).children('a').attr('href');
		var getUrl = window.location.pathname.split('/').pop();
 
		if(getUrl == a)
		{
			$(this).addClass('active').siblings().removeClass('active');
			$(this).parents('li').addClass('active');
		}
	});
});
/* Find url and active class added */
	$(".custom-memberlist").niceScroll({cursorborder:"",cursorcolor:"green",boxzoom:true});
	//$(".boxscroll2").niceScroll({touchbehavior:true,cursorcolor:"#7A3000",cursoropacitymax:0.7,cursorwidth:6,background:"#FF8945 ",autohidemode:false});
	
	/* Numbering function Start */
		$('.number').on('keydown', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
	/* Numbering function End */

	/* Password matching checking */
	$(document).on('blur','#cpassword',function()
	{
		var a = $("#password").val();
		var b =  $(this).val();
		if( b != a)
		{
			alert('Password & Confirm Password Mismatch');
			$('#password').select();
			$('#cpassword').val('');
		}
	});
	/* Password matching checking End*/
	/* Mobile menu collapse */
	$(document).on('click','.navbar-toggle',function()
	{
		$('.navbar-collapse').removeClass('out');
	});
	$(document).on('click','.xs-menu-close',function()
	{
		$('.navbar-collapse').addClass('out').removeClass('in');
	});
});
$(function()
{
		$('#news-container1').vTicker({
		speed: 500,
		pause: 4000,
		animation: 'fade',
		mousePause: false,
		showItems: 3
	});
});
// Thirukkural Page Auto Scroll Function Start Here //
var myVar = setTimeout(scroll, 100);
function scroll()
{

	$('html, body').animate({
		scrollTop: $('#top').offset()
	}, 'slow', function() { 
		$('#top').focus(); 
	});
}
// Thirukkural Page Auto Scroll Function Start Here //