$(document).ready(function(){
    $('.uppercase').keyup(function(){
        $(this).val($(this).val().toUpperCase());
    });
});

//Keypress, accept only numbers
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function inputLimiter(e) {
    var AllowableCharacters = '';
    AllowableCharacters='1234567890 ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

    var k = document.all?parseInt(e.keyCode): parseInt(e.which);
    if (k!=13 && k!=8 && k!=0){
        if ((e.ctrlKey==false) && (e.altKey==false)) {
        return (AllowableCharacters.indexOf(String.fromCharCode(k))!=-1);
        } else {
        return true;
        }
    } else {
        return true;
    }
}

function inputLimiter(e,allow) {
    var AllowableCharacters = '';
    if (allow == 'KeyboardChars'){AllowableCharacters='!@#$%^&*()+1234567890-=QWERTYUIOPqwertyuiopASDFGHJKL:asdfghjkl;ZXCVBNM?zxcvbnm,./[]<>` ';}
    if (allow == 'Letters'){AllowableCharacters=' ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';}
    if (allow == 'Numbers'){AllowableCharacters='1234567890';}
    if (allow == 'NameCharacters'){AllowableCharacters=' ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz,;-.\'';}
    if (allow == 'NameCharactersAndNumbers'){AllowableCharacters='1234567890 ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-\'';}
    if (allow == 'LettersAndNumbers'){AllowableCharacters='1234567890 ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';}

    var k = document.all?parseInt(e.keyCode): parseInt(e.which);
    if (k!=13 && k!=8 && k!=0){
        if ((e.ctrlKey==false) && (e.altKey==false)) {
        return (AllowableCharacters.indexOf(String.fromCharCode(k))!=-1);
        } else {
        return true;
        }
    } else {
        return true;
    }
}

function isDecimal(evt){

	var value = $('.txtDecimals').val();

	var charCode = (evt.which) ? evt.which : evt.keyCode
	if(charCode == 46 && value.indexOf(".") != -1)
		return false;

	if(charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)){
		return false;
	}
	return true;

}
