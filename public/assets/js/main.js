


$(document).ready(function(){



	//Fade in body content
	$(function() {
		$('#bodyContent').removeClass('fade-out');

		// Turn off loader
		$('.loader').hide();
	});


});




//Check password and confirm password
function check()
{
	var pass1 = document.getElementById('pass');
	var pass2 = document.getElementById('confirmpass');
	if(pass1.value != pass2.value)
	{
		alert("Password Not Match");
		return false;
	}
}
function checkPass()
{
	var pass1 = document.getElementById('pass');
	var pass2 = document.getElementById('confirmpass');
	var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
	if(pass2.value){
		if(pass1.value == pass2.value){
			pass2.style.backgroundColor = goodColor;
			message.style.color = goodColor;

		}else{
			pass2.style.backgroundColor = badColor;
			message.style.color = badColor;

		}
	}
}
