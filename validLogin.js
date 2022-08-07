function mailCheck (id)
{
	var email = document.getElementById(id).value;
	var arr = email.split("@");
	if (arr.length != 2)
	{
		document.getElementById(id).style.borderColor = "red";
		document.getElementById(id).style.color = "red";
		document.getElementById("mailCheck").innerHTML = "Error: invalid email";
		return;
	}
	if (arr[0].length < 1)
	{
		document.getElementById(id).style.borderColor = "red";
		document.getElementById(id).style.color = "red";
		document.getElementById("mailCheck").innerHTML = "Error: invalid email";
		return;
	}
	document.getElementById(id).style.borderColor = "green";
	document.getElementById(id).style.color = "green";
	document.getElementById("mailCheck").innerHTML = "";
}
function passCheck(id)
{
	var userName = document.getElementById(id).value;
	if (userName.length < 8)
	{
		document.getElementById(id).style.borderColor = "red";
		document.getElementById("passCheck").innerHTML = "Error: Password must be at least 8 characters";
		return;
	}
	else if (userName.length > 7)
	{
		document.getElementById(id).style.borderColor = "green";
		document.getElementById("passCheck").innerHTML = "";
	}
	
}
function check(emailId,passId)
{
	mailCheck(emailId);
	passCheck(passId);

}