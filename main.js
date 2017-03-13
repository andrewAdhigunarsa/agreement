
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("groomName","req","Please provide your name");
frmvalidator.addValidation("groomEmail","req","Please provide your email");
frmvalidator.addValidation("groomEmail","groomEmail",
"Please enter a valid email address");



// this code is to make sure user thick the agreement check box
function disableSubmit() {
  document.getElementById("submit").disabled = true;
}

function activateButton(element) {

  if(element.checked) {
    document.getElementById("submit").disabled = false;
  }
  else  {
    document.getElementById("submit").disabled = true;
  }

}
