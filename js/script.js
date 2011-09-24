/* Author: 

*/

function initPage(){
	var canvas = document.getElementsByTagName('html')[0];
	var block = document.getElementById('bg-box');
	var blockWidth = canvas.offsetWidth;
	var blockHeight = canvas.offsetHeight;
	var img = document.getElementById('bg');
	for(var i = 0; i < 1000; i++){
		var _width = i * 16.5;
		var _height = i * 18;
		if(_width >= blockWidth && _height >= blockHeight){block.style.fontSize = i+'em'; break;}
	}
}

if (window.addEventListener)
	window.addEventListener("resize", initPage, false);
else if (window.attachEvent)
	window.attachEvent("onresize", initPage);
if (window.addEventListener)
	window.addEventListener("load", initPage, false);
else if (window.attachEvent)
	window.attachEvent("onload", initPage);























