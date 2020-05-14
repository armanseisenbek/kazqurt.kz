// Модальное окно

// открыть по кнопке
$('.signupButton').click(function() {
  // $("*").fadeOut();
	$('.loginDiv').fadeIn();
	$('.signupDiv').fadeOut();
	// $('body').css('overflow', 'hidden');

	$('.container').css('filter', 'brightness(35%)');
	$('body').css('background-color', 'rgba(0, 0, 0, .8)');
});

$('.loginButton').click(function() {
  // $("*").fadeOut();
	$('.signupDiv').fadeIn();
	$('.loginDiv').fadeOut();

	$('body').css('overflow', 'hidden');
	$('.container').css('filter', 'brightness(35%)');
	$('body').css('background-color', 'rgba(0, 0, 0, .8)');
});

// закрыть по клику вне окна
$(document).mouseup(function (e) {
	var popup = $('.popup');
	if (e.target != popup[0] && popup.has(e.target).length === 0){
		$('.loginDiv').fadeOut();
		$('.signupDiv').fadeOut();
		$('body').css('overflow-y', 'scroll');
		$('body').css('background-color', 'white');
		$('.container').css('filter', 'brightness(100%)');
	}
});


$('.js-close-window').click(function() {
	$('.loginResult').fadeOut();
});
