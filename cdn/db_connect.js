function hide(){
	document.getElementById("opacit").style.opacity = "0";
}
window.setTimeout(hide, 1000)

function hidealert(){
	document.getElementById("opacitalert").style.opacity = "0";
}

function alert(){
	document.getElementById("opacitalert").style.opacity = "1";
	window.setTimeout(hidealert, 1200)
}