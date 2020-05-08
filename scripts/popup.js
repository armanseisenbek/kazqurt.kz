// Модальное окно

// открыть по кнопке
$('.js-reg-button-campaign').click(function() {
	$('.js-reg-overlay-campaign').fadeIn();
	$('.js-log-overlay-campaign').fadeOut();
	$('body').css('overflow', 'hidden');
	$('.container').css('filter', 'brightness(35%)');
	$('body').css('background-color', 'rgba(0, 0, 0, .8)');
});

// открыть
$('.js-log-button-campaign').click(function() {
	$('.js-log-overlay-campaign').fadeIn();
	$('.js-reg-overlay-campaign').fadeOut();
	$('body').css('overflow', 'hidden');
	$('.container').css('filter', 'brightness(35%)');
	$('body').css('background-color', 'rgba(0, 0, 0, .8)');
});

// закрыть по клику вне окна
$(document).mouseup(function (e) {
	var popup = $('.js-popup-campaign');
	if (e.target!=popup[0]&&popup.has(e.target).length === 0){
		$('.js-reg-overlay-campaign').fadeOut();
		$('.js-log-overlay-campaign').fadeOut();
		$('body').css('overflow', 'scroll');
		$('body').css('background-color', 'white');
		$('.container').css('filter', 'brightness(100%)');
	}
});


$('.js-close-window').click(function() {
	$('.loginResult').fadeOut();
});
