
/*=== Function for OLG News =============================================================================*/
function show_update(post_num)
{	
	$("div#"+post_num).slideToggle("fast");
	change_arrow(post_num);
}
function change_arrow(post_num)
{
	if ($("span#"+post_num).text()=="▼"){$("span#"+post_num).text("▲");}
	else {$("span#"+post_num).text("▼");}
}