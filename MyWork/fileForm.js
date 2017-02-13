function disp1(){
	document.getElementsByClassName('back')[0].style.visibility="visible";
	// alert("hi");
	document.getElementsByClassName('form_top1')[0].style.visibility="visible";
	 document.getElementsByClassName('form_top1')[0].style.WebkitTransform = "scale(1,1)";
	 document.getElementsByClassName('form_top1')[0].style.transitionDuration="1s";
	 // document.btn.style.backgroundColor="green";
	
}


function disp2(){
	document.getElementsByClassName('back')[0].style.visibility="visible";
	// alert("hi");
	document.getElementsByClassName('form_top2')[0].style.visibility="visible";
	 document.getElementsByClassName('form_top2')[0].style.WebkitTransform = "scale(1,1)";
	 document.getElementsByClassName('form_top2')[0].style.transitionDuration="1s";
	 document.btn.style.backgroundColor="green";
	
}

function hide1()
{
		document.getElementsByClassName('back')[0].style.visibility="hidden";
	// // alert("hi");
	// document.getElementsByClassName('form_top')[0].style.visibility="hidden";
	document.getElementsByClassName('form_top1')[0].style.WebkitTransform = "scale(0,0)";
	document.getElementsByClassName('form_top1')[0].style.transitionDuration="1s";


}

function hide2()
{
		document.getElementsByClassName('back')[0].style.visibility="hidden";
	// // alert("hi");
	// document.getElementsByClassName('form_top')[0].style.visibility="hidden";
	document.getElementsByClassName('form_top2')[0].style.WebkitTransform = "scale(0,0)";
	document.getElementsByClassName('form_top2')[0].style.transitionDuration="1s";


}