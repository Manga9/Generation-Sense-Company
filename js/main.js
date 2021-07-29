// function to icon bar in navbar
function myFunction(x) {
    'use strict';
    x.classList.toggle('change');
}

/*
$('ul.nav').find('a').click(function(event){
    var $href = $(this).attr('href');
    var $anchor = $($href).offset();
    $('.cur').parent().removeClass('active');
    $(this).parent().addClass('active');
    $("html, body").animate({ scrollTop: $anchor.top });
});
*/
$('document').ready(function() {

    $('ul.nav').find('a').click(function(event){
        var $href = $(this).attr('href');
        var $anchor = $($href).offset();
        $('cur').parent().removeClass('active');
        $(this).parent().addClass('active');
		$("html, body").animate({ scrollTop: $anchor.top }, 1500);
		
	});

});

$('.mybtn').on('click', function(event) {
    event.preventDefault(); 
    var url = $(this).data('target');
    location.replace(url);
});




window.onscroll = function() {
    var myNav = document.getElementById('nav'),
        myHeight = window.pageYOffset;
        

    if (myHeight >= 560) {
        myNav.style.backgroundColor = '#34495E';
    } else {
        myNav.style.backgroundColor = 'transparent';
    }
};


$('.slider').slick({
infinite: true,
speed: 300,
slidesToShow: 1,
centerMode: true,
variableWidth: true,
prevArrow: '.service .prev',
nextArrow: '.service .next',
});



$('.rep').click(function() {

    $(this).next('.replaies').fadeToggle(300);
    $('.com-container').siblings('.replay').fadeToggle(300);
});

		