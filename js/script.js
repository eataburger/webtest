function ValidateEmail(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if (!document.getElementById('terms').checked){
alert("You must accept the terms and conditions");
document.form1.text1.focus();
return false;
}
else if (inputText.value.length == 0) {
alert("Email address is required");
document.form1.text1.focus();
return false;
}
else if (inputText.endsWith(".co")) {
alert("We are not accepting subscriptions from Columbia emails");
document.form1.text1.focus();
return false;
}
else if (!inputText.value.match(mailformat)) {
alert("Please provide a valid email address");
document.form1.text1.focus();
return false;
}
else {
alert("Valid email address");
document.form1.text1.focus();
document.form1.submit();
return true;

}
}