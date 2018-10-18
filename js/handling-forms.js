//JavaScript Document

window.onload=init;


function init() {
//this code runs when the page loads
document.getElementById("btnSubmit").onclick=validate;

}


function validate() {
//run this when the submit button is clicked and the form submits
//alert("hi");

var username=document.getElementById("fullname").value;
var email=document.getElementById("email").value;
var usertype=document.getElementById("usertype").value;

if (username.length>0) {
var spacer=";";
var outputText=username + spacer + email + spacer + usertype + spacer;
alert(outputText);
alert("Thank you!");
return true;
}
else {
alert ("Please enter full name");
return false;
}


}

