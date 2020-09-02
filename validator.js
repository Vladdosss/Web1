function validate(form){

	var fail = false;
	var X = form.X.value;
	var Y = form.Y.value;
	var R = form.R.value;

	if (!((X>-5) & (X<5))) {
		fail = "Некорректно задано значение X.\nВозможные варианты: (-5 ... 5).";

	} 
	if (X==null || X=="") {
		fail = "Значение X должно быть введено.";

	}

	var Y_value = "";
	for (i = 0; i < document.getElementsByName('Y').length; i++) {
		if (document.getElementsByName('Y')[i].checked) {

			Y_value = document.getElementsByName('Y')[i].value;        
		}        
	}
	if (Y_value == "") {
		fail = "Значение Y должно быть выбрано.";
	}
	var R_value = "";
	for (i = 0; i < document.getElementsByName('R').length; i++) {
		if (document.getElementsByName('R')[i].checked) {

			R_value = document.getElementsByName('R')[i].value;        
		}        
	}
	if (R_value === "") {
		fail = "Значение R должно быть выбрано.";
	} 

	if (fail){

		var element = document.getElementById('message');
		element.innerHTML=fail;
		
		return false;
	}
	else {
		return true;
	}

}

if(typeof window.history.pushState == 'function') {
	window.history.pushState({}, "Hide", "https://se.ifmo.ru/~s285612/index.php");
}	
