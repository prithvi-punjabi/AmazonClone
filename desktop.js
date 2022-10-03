function con(event)
{
if(el2.value.length == 0)
	{
		elMsg1.innerHTML="! Enter your name";
	event.preventDefault();
	}
if(el3.value.length == 0)
	{
		elMsg2.innerHTML="! Enter your mobile number";
	event.preventDefault();
	} 
if(el4.value.length == 0)
	{
		el5.parentNode.removeChild(el5);
		elMsg3.innerHTML="! Enter your password";
	event.preventDefault();
	}
else
{
	location.replace("http://localhost/php/project/signin/sigin.html");
}
}
var el1=document.getElementById('Reg');
var el2=document.getElementById('yname');
var el3=document.getElementById('ph_no');
var el4=document.getElementById('email');
var el5=document.getElementById('img1');
var elMsg1=document.getElementById('msg1');
var elMsg2=document.getElementById('msg2');
var elMsg3=document.getElementById('msg3');

el1.addEventListener('submit',con,false);