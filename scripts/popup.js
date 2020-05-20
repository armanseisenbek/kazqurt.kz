// Модальное окно

// открыть по кнопке
$('.signupButton').click(function() {
  // $("*").fadeOut();
	$('.loginDiv').fadeIn();
	$('.signupDiv').fadeOut();
	// $('body').css('overflow', 'hidden');
	$('.container').css('filter', 'brightness(35%)');
	$('body').css('background-color', 'rgba(0, 0, 0, .8)');

	$('input').val('');
});

$('.loginButton').click(function() {
  // $("*").fadeOut();
	$('.signupDiv').fadeIn();
	$('.loginDiv').fadeOut();
	$('body').css('overflow', 'hidden');
	$('.container').css('filter', 'brightness(35%)');
	$('body').css('background-color', 'rgba(0, 0, 0, .8)');

	$('input').val('');
});

// закрыть по клику вне окна
$(document).mouseup(function (e) {
	var popup = $('.popup');
	if (e.target != popup[0] && popup.has(e.target).length === 0){
		$('.loginDiv').fadeOut();
		$('.signupDiv').fadeOut();
		$('.loginResult').fadeOut();
		$('body').css('overflow-y', 'scroll');
		$('body').css('background-color', 'white');
		$('.container').css('filter', 'brightness(100%)');
	}
});


function checkPassword(Element, setWarning) {
	var val = Element.value;
	var pattern = /^(?=.*[A-Z])(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%&*?])[A-Za-z0-9!@#$%&*?]{8,}$/;
	if (!val.match(pattern)) {
		document.getElementById(setWarning).innerHTML = "Invalid password format";
	}else{
		document.getElementById(setWarning).innerHTML = "";
	}
}

function checkConfirm() {
	var password = document.getElementsByClassName('signupPassword')[0].value;
	var confirm = document.getElementsByClassName('signupConfirm')[0].value;
	if (confirm != password) {
		document.getElementById('ConfirmWarning').innerHTML = "Passwords are different";
	}else{
		document.getElementById('ConfirmWarning').innerHTML = "";
	}
}

function resetWarnings() {
	document.getElementById('warning1').innerHTML = "";
	document.getElementById('warning2').innerHTML = "";
	document.getElementById('ConfirmWarning').innerHTML = "";
}
