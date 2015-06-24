$(document).ready(function(){

	$('#post_out').click(ValidateForm);


});



function isAlphaOrParen(str) {
  return /^[a-zA-Z()]+$/.test(str);
}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

 // Validate Form  
function ValidateForm() {
	// alert('hello');
	var name,email,approved;
	var my_form = document.forms[0];
	name = my_form.elements["fullname"].value;
	email = my_form.elements["mail"].value;
	if ( isAlphaOrParen(name) ) {
	//	alert	('true name');
		if ( IsEmail(email) ) {
			return true;
		}
		else {
			window.alert('-- Please Check Your Form Details --');
			console.log('-- Please Check Your Form Details --');
			return false; 
		}	
	}
	
}