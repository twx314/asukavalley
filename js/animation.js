// JavaScript Document

var Cloud_1x = 0;
/*
window.setInterval(Cloud_1,1);

function Cloud_1()
{
	var Cloud_1xvar = Cloud_1x + "px";
	
	Cloud_1x+=5;
}
*/	

$(document).ready(function(){
	
	function Cloub_1_anime()
	{
		$("#Cloud_1").css({left:-2000});
		$("#Cloud_1").animate({left: '2000px'},40000,'linear', function (){Cloub_1_anime();});
	}
	
	function Cloub_2_anime()
	{
		$("#Cloud_2").css({left:-2000});
		$("#Cloud_2").animate({left: '2000px'},60000,'linear', function (){Cloub_2_anime();});
	}	
	
	function Cloub_3_anime()
	{
		$("#Cloud_3").css({left:-2000});
		$("#Cloud_3").animate({left: '2000px'},80000,'linear', function (){Cloub_3_anime();});
	}		
	
	Cloub_1_anime();
	Cloub_2_anime();
	Cloub_3_anime();
});