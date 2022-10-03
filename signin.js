function sig(event)
{
if(el2.value.length == 0)
	{
		elMsg1.innerHTML="! Enter your email or mobile phone number";
	event.preventDefault();
	} 
}
var el1=document.getElementById('sign');
var el2=document.getElementById('email');
var elMsg1=document.getElementById('msg1');

el1.addEventListener('submit',sig,false)