var ASCorDESC = "ASC";
var lastcol = "class";
var clickedagain = 0;
var filter_class = 0;
var filter_type = 0;
var filter_skill = 0;

/* When document ready, it call the "reload" function */
$(document).ready(function(){reload();});

/* Function for Cross highlighter */
function reload(){ 
	$(".DB_class").hover(function(){$(".DB_class").css("background-color","yellow");}, function(){$(".DB_class").css("background-color","transparent");});
	$(".DB_type").hover(function(){$(".DB_type").css("background-color","yellow");}, function(){$(".DB_type").css("background-color","transparent");});	
	$(".DB_prefix").hover(function(){$(".DB_prefix").css("background-color","yellow");}, function(){$(".DB_prefix").css("background-color","transparent");});	
	$(".DB_name").hover(function(){$(".DB_name").css("background-color","yellow");}, function(){$(".DB_name").css("background-color","transparent");});
	$(".DB_attack").hover(function(){$(".DB_attack").css("background-color","yellow");}, function(){$(".DB_attack").css("background-color","transparent");});
	$(".DB_defense").hover(function(){$(".DB_defense").css("background-color","yellow");}, function(){$(".DB_defense").css("background-color","transparent");});
	$(".DB_skill").hover(function(){$(".DB_skill").css("background-color","yellow");}, function(){$(".DB_skill").css("background-color","transparent");});
	$(".DB_SA_Self").hover(function(){$(".DB_SA_Self").css("background-color","yellow");}, function(){$(".DB_SA_Self").css("background-color","transparent");});
	$(".DB_SA_Group").hover(function(){$(".DB_SA_Group").css("background-color","yellow");}, function(){$(".DB_SA_Group").css("background-color","transparent");});
}


/* Function for refresh a database */
function headerclicked(str,NOASC)
{
	get_filter_data ();
	
	if(lastcol==str)
		{
			if(NOASC != 1)
			{
				if(ASCorDESC == "DESC")
					{
						ASCorDESC = "ASC";
						document.getElementById(str+"_arrow").innerHTML="▲";
					}
				else if(ASCorDESC == "ASC")
					{
						ASCorDESC = "DESC";
						document.getElementById(str+"_arrow").innerHTML="▼";
					}
			}
		}
	else {
		ASCorDESC = "ASC";
			document.getElementById(lastcol+"_arrow").innerHTML="";
			document.getElementById(str+"_arrow").innerHTML="▲";
		}
	
if (window.XMLHttpRequest) {xmlhttp=new XMLHttpRequest();}
else {xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		document.getElementById("database_body").innerHTML=xmlhttp.responseText; 
		lastcol=str;
		reload();	//reload Jquery code
    }
  }
  
xmlhttp.open("GET","http://www.asukazukan.com/AMoe/wp-content/themes/Moekishi/Pages/database_loaddata.php?"
+"sort="+str
+"&ASC="+ASCorDESC
+"&class="+filter_class
+"&type="+filter_type
+"&skill="+filter_skill
,true);
xmlhttp.send();

}

function get_filter_data ()
{
	filter_class = $("#class_fl").val();
	filter_type = $("#type_fl").val();
	filter_skill = $("#skill_fl").val();
}

function show_update(post_num)
{	
	$("div#"+post_num).slideToggle("slow");
	change_arrow(post_num);
}
function change_arrow(post_num)
{
	if ($("span#"+post_num).text()=="▼"){$("span#"+post_num).text("▲");}
	else {$("span#"+post_num).text("▼");}
}