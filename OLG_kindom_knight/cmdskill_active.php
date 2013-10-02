<?php
/*
Template Name: Kingdom Knight - commander skill (active)
*/
?>

<?php get_header('kk'); ?>
<style type="text/css">#kk2_3:before{content:"● " !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'Kingdom_Knight_sidebar' ); ?></div>
<div id="OLG_Main_content">

<div class="ContentSetting"> 
	<div class="SingleTitle">
		<h1>指揮官技能(主動技能)</h1>
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

/*=== 步兵技 (Type 1)===========================================================*/ 
$Type1_skill[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 45 ORDER BY skill_subid,skill_lv");
$Type1_skill[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 46 ORDER BY skill_subid,skill_lv");
$Type1_skill[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 47 ORDER BY skill_subid,skill_lv");
$Type1_skill[4] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 48 ORDER BY skill_subid,skill_lv");
$Type1_skill[5] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 49 ORDER BY skill_subid,skill_lv");
$Type1_skill[6] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 50 ORDER BY skill_subid,skill_lv");
$Type1_skill[7] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 51 ORDER BY skill_subid,skill_lv");
$Type1_skill[8] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 55 ORDER BY skill_subid,skill_lv");
$Type1_skill[9] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 56 ORDER BY skill_subid,skill_lv");
$Type1_skill[10] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 57 ORDER BY skill_subid,skill_lv");
$Type1_skill[11] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 58 ORDER BY skill_subid,skill_lv");
$Type1_skill[12] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 63 ORDER BY skill_subid,skill_lv");

$Type1_skill_name[1] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 45");
$Type1_skill_name[2] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 46");
$Type1_skill_name[3] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 47");
$Type1_skill_name[4] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 48");
$Type1_skill_name[5] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 49");
$Type1_skill_name[6] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 50");
$Type1_skill_name[7] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 51");
$Type1_skill_name[8] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 55");
$Type1_skill_name[9] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 56");
$Type1_skill_name[10] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 57");
$Type1_skill_name[11] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 58");
$Type1_skill_name[12] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 63");

/*=== 騎士技 (Type 2)===========================================================*/
$Type2_skill[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 52 ORDER BY skill_subid,skill_lv");
$Type2_skill[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 53 ORDER BY skill_subid,skill_lv");
$Type2_skill[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 54 ORDER BY skill_subid,skill_lv");
$Type2_skill[4] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 61 ORDER BY skill_subid,skill_lv");

$Type2_skill_name[1] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 52");
$Type2_skill_name[2] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 53");
$Type2_skill_name[3] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 54");
$Type2_skill_name[4] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 61");

/*=== 飛行技 (Type 3)===========================================================*/
$Type3_skill[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 36 ORDER BY skill_subid,skill_lv");
$Type3_skill[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 37 ORDER BY skill_subid,skill_lv");
$Type3_skill[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 40 ORDER BY skill_subid,skill_lv");
$Type3_skill[4] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 41 ORDER BY skill_subid,skill_lv");

$Type3_skill_name[1] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 36");
$Type3_skill_name[2] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 37");
$Type3_skill_name[3] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 40");
$Type3_skill_name[4] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 41");

/*=== 飛騎技 (Type 4)===========================================================*/
$Type4_skill[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 38 ORDER BY skill_subid,skill_lv");
$Type4_skill[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 39 ORDER BY skill_subid,skill_lv");
$Type4_skill[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 42 ORDER BY skill_subid,skill_lv");
$Type4_skill[4] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 43 ORDER BY skill_subid,skill_lv");
$Type4_skill[5] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 44 ORDER BY skill_subid,skill_lv");
$Type4_skill[6] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 60 ORDER BY skill_subid,skill_lv");

$Type4_skill_name[1] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 38");
$Type4_skill_name[2] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 39");
$Type4_skill_name[3] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 42");
$Type4_skill_name[4] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 43");
$Type4_skill_name[5] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 44");
$Type4_skill_name[6] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 60");

/*=== 力士技 (Type 5)===========================================================*/
$Type5_skill[1] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 34 ORDER BY skill_subid,skill_lv");
$Type5_skill[2] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 35 ORDER BY skill_subid,skill_lv");
$Type5_skill[3] = mysql_query("SELECT skill_name,skill_lv,skill_subid,skill_point,skill_detail FROM wp_valley.kk_commander_skill WHERE skill_subid = 59 ORDER BY skill_subid,skill_lv");

$Type5_skill_name[1] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 34");
$Type5_skill_name[2] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 35");
$Type5_skill_name[3] = mysql_query("SELECT skill_name,skill_subid,skill_launch,skill_delay FROM wp_valley.kk_commander_skill WHERE skill_subid = 59");

?>
	<div class="kkskill_description">
    	主動技能跟被動技能不同,會因為指揮官的種類而限制,以下是不同種類可以裝備的技能, </br>
        <ul>
        	<li><a href="#type1">步戰型技能</a></br></li>
        	<li><a href="#type2">騎士型技能</a></br></li>
        	<li><a href="#type3">飛行型技能</a></br></li>
        	<li><a href="#type4">飛騎型技能</a></br></li>
        	<li><a href="#type5">力士型技能</a></br></li>
        </ul>
    </div>

<!-- 步戰型技能 ---------------------------------------------------------------------------------------------------------------->    
<h2 id="type1" class="kkskill_subtitle">步戰型技能</h2>
	
<?php
for ($x=1; $x<=12; $x++)
{
	$namerow = mysql_fetch_array($Type1_skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_active'>";
	echo "<caption>";
	echo "<div class='cmdskillimage_active' id='cmdskill_".$namerow['skill_subid']."'></div>";	
	echo "<div class='kknameblock'>";
	echo "<h3>".$namerow['skill_name']."</h3>";
	echo "<span>戰法發動: 第 ".$namerow['skill_launch']." 回合， 施展週期:每 ".$namerow['skill_delay']." 回合</span>";
	echo "</div>";
	echo "</caption>";

	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($Type1_skill[$x]))
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
<!-- 騎士型技能 ---------------------------------------------------------------------------------------------------------------->    
<h2 id="type2" class="kkskill_subtitle">騎士型技能</h2>
	
<?php
for ($x=1; $x<=4; $x++)
{
	$namerow = mysql_fetch_array($Type2_skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_active'>";
	echo "<caption>";
	echo "<div class='cmdskillimage_active' id='cmdskill_".$namerow['skill_subid']."'></div>";	
	echo "<div class='kknameblock'>";
	echo "<h3>".$namerow['skill_name']."</h3>";
	echo "<span>戰法發動: 第 ".$namerow['skill_launch']." 回合， 施展週期:每 ".$namerow['skill_delay']." 回合</span>";
	echo "</div>";
	echo "</caption>";
	
	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($Type2_skill[$x]))
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
<!-- 飛行型技能 ---------------------------------------------------------------------------------------------------------------->    
<h2 id="type3" class="kkskill_subtitle">飛行型技能</h2>
	
<?php
for ($x=1; $x<=4; $x++)
{
	$namerow = mysql_fetch_array($Type3_skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_active'>";
	echo "<caption>";
	echo "<div class='cmdskillimage_active' id='cmdskill_".$namerow['skill_subid']."'></div>";	
	echo "<div class='kknameblock'>";
	echo "<h3>".$namerow['skill_name']."</h3>";
	echo "<span>戰法發動: 第 ".$namerow['skill_launch']." 回合， 施展週期:每 ".$namerow['skill_delay']." 回合</span>";
	echo "</div>";
	echo "</caption>";
	
	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($Type3_skill[$x]))
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
<!-- 飛騎型技能 ---------------------------------------------------------------------------------------------------------------->    
<h2 id="type4" class="kkskill_subtitle">飛騎型技能</h2>
	
<?php
for ($x=1; $x<=6; $x++)
{
	$namerow = mysql_fetch_array($Type4_skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_active'>";
	echo "<caption>";
	echo "<div class='cmdskillimage_active' id='cmdskill_".$namerow['skill_subid']."'></div>";	
	echo "<div class='kknameblock'>";
	echo "<h3>".$namerow['skill_name']."</h3>";
	echo "<span>戰法發動: 第 ".$namerow['skill_launch']." 回合， 施展週期:每 ".$namerow['skill_delay']." 回合</span>";
	echo "</div>";
	echo "</caption>";
	
	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($Type4_skill[$x]))
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
<!-- 力士型技能 ---------------------------------------------------------------------------------------------------------------->    
<h2 id="type5" class="kkskill_subtitle">力士型技能</h2>
	
<?php
for ($x=1; $x<=3; $x++)
{
	$namerow = mysql_fetch_array($Type5_skill_name[$x]);
	
	echo "<table class='kktable' id='kktable_active'>";
	echo "<caption>";
	echo "<div class='cmdskillimage_active' id='cmdskill_".$namerow['skill_subid']."'></div>";	
	echo "<div class='kknameblock'>";
	echo "<h3>".$namerow['skill_name']."</h3>";
	echo "<span>戰法發動: 第 ".$namerow['skill_launch']." 回合， 施展週期:每 ".$namerow['skill_delay']." 回合</span>";
	echo "</div>";
	echo "</caption>";
	
	echo "<tr>";
	echo "<th id='col_1'>等級</th>";
	echo "<th id='col_2'>指揮</th>";
	echo "<th id='col_3'>效果</th>";
	echo "</tr>";
		
while($row = mysql_fetch_array($Type5_skill[$x]))
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