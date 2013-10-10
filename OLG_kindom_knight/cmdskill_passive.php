<?php
/*
Template Name: Kingdom Knight - commander skill (passive)
*/
?>

<?php get_header('kk'); ?>
<style type="text/css">#kk2_2:before{content:"● " !important;} #Mainnav_olg a{color:red !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'Kingdom_Knight_sidebar' ); ?><?php get_sidebar( 'Chitika' ); ?></div>
<div id="OLG_Main_content">

<div class="ContentSetting"> 
	<div class="SingleTitle">
		<h1>指揮官技能(被動技能)</h1>
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

/*=== Defensive Skills ===========================================================*/ 
$Def_skill[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 23 ORDER BY skill_subid,skill_lv");
$Def_skill[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 26 ORDER BY skill_subid,skill_lv");
$Def_skill[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 32 ORDER BY skill_subid,skill_lv");
$Def_skill[4] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 33 ORDER BY skill_subid,skill_lv");

$Def_skill_name[1] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 23");
$Def_skill_name[2] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 26");
$Def_skill_name[3] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 32");
$Def_skill_name[4] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 33");

/*=== Offensive Skills ===========================================================*/
$Off_skill[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 16 ORDER BY skill_subid,skill_lv");
$Off_skill[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 17 ORDER BY skill_subid,skill_lv");
$Off_skill[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 18 ORDER BY skill_subid,skill_lv");
$Off_skill[4] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 19 ORDER BY skill_subid,skill_lv");
$Off_skill[5] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 20 ORDER BY skill_subid,skill_lv");
$Off_skill[6] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 21 ORDER BY skill_subid,skill_lv");
$Off_skill[7] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 22 ORDER BY skill_subid,skill_lv");
$Off_skill[8] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 24 ORDER BY skill_subid,skill_lv");
$Off_skill[9] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 25 ORDER BY skill_subid,skill_lv");
$Off_skill[10] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 27 ORDER BY skill_subid,skill_lv");
$Off_skill[11] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 28 ORDER BY skill_subid,skill_lv");
$Off_skill[12] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 29 ORDER BY skill_subid,skill_lv");
$Off_skill[13] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 30 ORDER BY skill_subid,skill_lv");
$Off_skill[14] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 31 ORDER BY skill_subid,skill_lv");

$Off_skill_name[1] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 16");
$Off_skill_name[2] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 17");
$Off_skill_name[3] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 18");
$Off_skill_name[4] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 19");
$Off_skill_name[5] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 20");
$Off_skill_name[6] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 21");
$Off_skill_name[7] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 22");
$Off_skill_name[8] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 24");
$Off_skill_name[9] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 25");
$Off_skill_name[10] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 27");
$Off_skill_name[11] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 28");
$Off_skill_name[12] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 29");
$Off_skill_name[13] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 30");
$Off_skill_name[14] = mysql_query("SELECT skill_name,skill_subid FROM wp_valley.kk_commander_skill WHERE skill_subid = 31");


?>
	<div class="kkskill_description">
    	被動技能有分為以下兩種, </br>
    	<ul>
        	<li><a href="#offensive">攻擊發動型</a> － 普通攻擊時發動的技能</br></li>
        	<li><a href="#defensive">被害發動型</a> － 被攻擊時發動的技能</br></li>
        </ul>
    </div>

<!-- 攻擊發動型 ---------------------------------------------------------------------------------------------------------------->
<h2 id="offensive" class="kkskill_subtitle">攻擊發動型</h2>
	
<?php
for ($x=1; $x<=14; $x++)
{
	$namerow = mysql_fetch_array($Off_skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_passive'>";
	echo "<caption><div class='cmdskillimage_passive' id='cmdskill_".$namerow['skill_subid']."'><h3>".$namerow['skill_name']."</h3></div></caption>";
	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($Off_skill[$x]))
  {
	  echo "<tr>";
	  echo "<td>".$row['skill_lv']."</td>";
	  echo "<td>".$row['skill_point']."</td>";
	  echo "<td>".$row['skill_detail']."</td>"; 
	  echo "</tr>";
  }
	echo "</table>";
}
?>

<!-- 被害發動型 ---------------------------------------------------------------------------------------------------------------->
<h2 id="defensive" class="kkskill_subtitle">被害發動型</h2>
	
<?php
for ($x=1; $x<=4; $x++)
{
	$namerow = mysql_fetch_array($Def_skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_passive'>";
	echo "<caption><div class='cmdskillimage_passive' id='cmdskill_".$namerow['skill_subid']."'><h3>".$namerow['skill_name']."</h3></div></caption>";
	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($Def_skill[$x]))
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