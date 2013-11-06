<?php
/*
Template Name: Kingdom Knight - commander skill (ability)
*/
?>

<?php get_header('kk'); ?>
<style type="text/css">#kk2_1:before{content:"● " !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'Kingdom_Knight_sidebar' ); ?></div>
<div id="OLG_Main_content">

<div class="ContentSetting"> 
	<div class="SingleTitle">
		<h1>指揮官技能(屬性強化)</h1>
		<div>
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_preferred_1"></a>
		<a class="addthis_button_preferred_2"></a>
		<a class="addthis_button_preferred_3"></a>
		<a class="addthis_button_preferred_4"></a>
		<a class="addthis_button_compact"></a>
		<a class="addthis_counter addthis_bubble_style"></a>
		</div>
		<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52335eea1a3881fd"></script>
		<!-- AddThis Button END -->    
		</div> <!-- sharebuttons END -->  
    </div>      
<?php 
	
include('dbconnection.php'); 

mysql_select_db("wp_valley", $con);

$result[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 1 ORDER BY skill_subid,skill_lv");
$result[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 2 ORDER BY skill_subid,skill_lv");
$result[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 3 ORDER BY skill_subid,skill_lv");
$result[4] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 4 ORDER BY skill_subid,skill_lv");
$result[5] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 5 ORDER BY skill_subid,skill_lv");
$result[6] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 6 ORDER BY skill_subid,skill_lv");
$result[7] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 7 ORDER BY skill_subid,skill_lv");
$result[8] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 8 ORDER BY skill_subid,skill_lv");
$result[9] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 9 ORDER BY skill_subid,skill_lv");
$result[10] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 10 ORDER BY skill_subid,skill_lv");
$result[11] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 11 ORDER BY skill_subid,skill_lv");
$result[12] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 12 ORDER BY skill_subid,skill_lv");
$result[13] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 13 ORDER BY skill_subid,skill_lv");
$result[14] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 14 ORDER BY skill_subid,skill_lv");
$result[15] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 15 ORDER BY skill_subid,skill_lv");
$result[16] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 62 ORDER BY skill_subid,skill_lv");
$result[17] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 64 ORDER BY skill_subid,skill_lv");
$result[18] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 65 ORDER BY skill_subid,skill_lv");
$result[19] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 66 ORDER BY skill_subid,skill_lv");
$result[20] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 67 ORDER BY skill_subid,skill_lv");
$result[21] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 68 ORDER BY skill_subid,skill_lv");
$result[22] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 69 ORDER BY skill_subid,skill_lv");
$result[23] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 70 ORDER BY skill_subid,skill_lv");
$result[24] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 71 ORDER BY skill_subid,skill_lv");
$result[25] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 72 ORDER BY skill_subid,skill_lv");
$result[26] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 73 ORDER BY skill_subid,skill_lv");
$result[27] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 74 ORDER BY skill_subid,skill_lv");
$result[28] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 75 ORDER BY skill_subid,skill_lv");
$result[29] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 76 ORDER BY skill_subid,skill_lv");
$result[30] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 77 ORDER BY skill_subid,skill_lv");

$skill_name[1] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 1");
$skill_name[2] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 2");
$skill_name[3] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 3");
$skill_name[4] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 4");
$skill_name[5] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 5");
$skill_name[6] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 6");
$skill_name[7] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 7");
$skill_name[8] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 8");
$skill_name[9] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 9");
$skill_name[10] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 10");
$skill_name[11] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 11");
$skill_name[12] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 12");
$skill_name[13] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 13");
$skill_name[14] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 14");
$skill_name[15] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 15");
$skill_name[16] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 62");
$skill_name[17] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 64");
$skill_name[18] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 65");
$skill_name[19] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 66");
$skill_name[20] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 67");
$skill_name[21] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 68");
$skill_name[22] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 69");
$skill_name[23] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 70");
$skill_name[24] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 71");
$skill_name[25] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 72");
$skill_name[26] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 73");
$skill_name[27] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 74");
$skill_name[28] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 75");
$skill_name[29] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 76");
$skill_name[30] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 77");

for ($x=1; $x<=30; $x++)
{
	$namerow = mysql_fetch_array($skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_ability'>";
	echo "<caption><div class='cmdskillimage_ability' id='cmdskill_".$namerow['skill_subid']."'><h3>".$namerow['skill_name']."</h3></div></caption>";
	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($result[$x]))
  {
	  echo "<tr>";
	  echo "<td>".$row['skill_lv']."</td>";
	  echo "<td>".$row['skill_point']."</td>";
	  echo "<td>".$row['skill_detail']."</td>"; 
	  echo "</tr>";
  }
	echo "</table>";
}

	
mysql_close($con);
?>
    
</div> <!-- ContentSetting END -->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->
<?php get_footer(); ?>