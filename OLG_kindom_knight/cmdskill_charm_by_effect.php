<?php
/*
Template Name: Kingdom Knight - Charm by effect
*/
?>

<?php get_header('kk'); ?>
<style type="text/css">#kk1_1:before{content:"● " !important;} #Mainnav_olg a{color:red !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'Kingdom_Knight_sidebar' ); ?><?php get_sidebar( 'Chitika' ); ?></div>
<div id="OLG_Main_content">

<div class="ContentSetting"> 
	<div class="SingleTitle">
		<h1>護身符一覽(順效果)</h1>
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

for ($x=0; $x<=18; $x++)
{
$charm_group[$x] = mysql_query("

SELECT 
charm.charm_name as name,
charm.charm_lv as lv,
charm.charm_hp as hp,
charm.charm_atk as atk,
charm.charm_def as def,
charm.charm_hit as hit,
charm.charm_skill as skill,
charm.charm_lead as lead,
charm.charm_effect as effect,
charm.charm_group as charmgroup

FROM 
wp_valley.kk_lord_charm as charm

WHERE 
charm.charm_group = ".$x."

ORDER BY 
charm.charm_chance,charm.charm_effect;

");
}

$charm_group_title[0]="特殊"; 
$charm_group_title[1]="被攻擊時有％機率提升攻擊力％，持續回合 "; 
$charm_group_title[2]="被攻擊時有％機率提升防禦力％，持續回合 "; 
$charm_group_title[3]="被攻擊時有％機率發動吸收等同生命上限％傷害量的護盾，持續回合"; 
$charm_group_title[4]="被攻擊時有％機率發動無敵，持續回合，無視傷害 "; 

$charm_group_title[5]="被攻擊時有％機率降低攻擊者精準，持續回合 "; 
$charm_group_title[6]="被攻擊時有％機率降低攻擊者％攻擊力，持續回合";

$charm_group_title[7]="被攻擊時有％機率造成敵全軍等同％防禦的傷害，％機率降低％防禦回合 ";
$charm_group_title[8]="被攻擊時有％機率造成敵前,中陣等同％防禦的傷害，％機率降低％防禦回合 ";
$charm_group_title[9]="被攻擊時有％機率對敵後陣造成等同％攻擊力及％防禦力的絕對傷害 ";
$charm_group_title[10]="被攻擊時有％機率對敵中後陣造成等同％攻擊力及％防禦力的絕對傷害 ";
$charm_group_title[11]="被攻擊時有％機率反擊攻擊者，造成％攻擊傷害";
$charm_group_title[12]="被攻擊時有％機率造成攻擊敵全軍％攻擊傷害，並有％機率暈眩回合 ";

$charm_group_title[13]="被攻擊時有％機率暈眩敵全軍回合，降低防禦力％";
$charm_group_title[14]="被攻擊時有％機率束縛攻擊者回合，無法行動";
$charm_group_title[15]="被攻擊時有％機率發動，縮短技能冷卻時間回合";
$charm_group_title[16]="被攻擊時有％機率恢復等同％防禦力的生命值 ";

?>

	<div class="kkacc_description kk_description" id="top">
    	<div class="kk_description_title">目錄</div>

        <div class="kkacc_description_subtitle">－能力強化型</div>
        <ul>
        	<li><a href="#type1"><?php echo $charm_group_title[1];?></a></li>
   			<li><a href="#type2"><?php echo $charm_group_title[2];?></a></li>
        	<li><a href="#type3"><?php echo $charm_group_title[3];?></a></li>
            <li><a href="#type4"><?php echo $charm_group_title[4];?></a></li>
		</ul>
                
        <div class="kkacc_description_subtitle">－能力下降型</div>
        <ul>
        	<li><a href="#type5"><?php echo $charm_group_title[5];?></a></li>
   			<li><a href="#type6"><?php echo $charm_group_title[6];?></a></li>
		</ul>
        
        <div class="kkacc_description_subtitle">－傷害型</div>
        <ul>
        	<li><a href="#type7"><?php echo $charm_group_title[7];?></a></li>
   			<li><a href="#type8"><?php echo $charm_group_title[8];?></a></li>
        	<li><a href="#type9"><?php echo $charm_group_title[9];?></a></li>
            <li><a href="#type10"><?php echo $charm_group_title[10];?></a></li>
        	<li><a href="#type11"><?php echo $charm_group_title[11];?></a></li>
            <li><a href="#type12"><?php echo $charm_group_title[12];?></a></li>            
		</ul>

        <div class="kkacc_description_subtitle">－異常狀態型</div>
        <ul>
        	<li><a href="#type13"><?php echo $charm_group_title[13];?></a></li>
   			<li><a href="#type14"><?php echo $charm_group_title[14];?></a></li>
		</ul>
        
        <div class="kkacc_description_subtitle">－重置冷卻時間</div>
        <ul>
        	<li><a href="#type15"><?php echo $charm_group_title[15];?></a></li>
		</ul> 
        
        <div class="kkacc_description_subtitle">－回復型</div>
        <ul>
        	<li><a href="#type16"><?php echo $charm_group_title[16];?></a></li>
		</ul>

        <div class="kkacc_description_subtitle">－特殊型</div>
        <ul>
        	<li><a href="#type0"><?php echo $charm_group_title[0];?></a></li>
		</ul>               
    </div>

<?php

for ($y=1; $y<=16; $y++)
{
	echo "<div id='type".$y."' class='kksubtitle'>".$charm_group_title[$y]."<a href='#top' class='backtotop'>▲TOP</a></div>";
	echo "<table class='kktable' id='acc_table'>";
	echo "<tr>";
	echo "<th class='kkacc_name'>裝飾品</th>";
	echo "<th class='kkacc_status'>品質</th>";
	echo "<th class='kkacc_status'>生命</th>";
	echo "<th class='kkacc_status'>攻擊</th>";
	echo "<th class='kkacc_status'>防禦</th>";
	echo "<th class='kkacc_status'>精準</th>";
	echo "<th class='kkacc_status'>技法</th>";
	echo "<th class='kkacc_status'>統率</th>";
	echo "<th class='kkacc_effect'>效果</th>";
	echo "</tr>";
	
	while($row = mysql_fetch_array($charm_group[$y]))
	{
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['lv']."</td>";
		echo "<td>".$row['hp']."</td>";
		echo "<td>".$row['atk']."</td>";
		echo "<td>".$row['def']."</td>";
		echo "<td>".$row['hit']."</td>";
		echo "<td>".$row['skill']."</td>";
		echo "<td>".$row['lead']."</td>";
		echo "<td>".$row['effect']."</td>";	
		echo "</tr>";
	}
	echo "</table>";
}

/*=== For special eq =========================================================================*/
	echo "<div id='type0' class='kksubtitle'>".$charm_group_title[0]."<a href='#top' class='backtotop'>▲TOP</a></div>";
	echo "<table class='kktable' id='acc_table'>";
	echo "<tr>";
	echo "<th class='kkacc_name'>裝飾品</th>";
	echo "<th class='kkacc_status'>品質</th>";
	echo "<th class='kkacc_status'>生命</th>";
	echo "<th class='kkacc_status'>攻擊</th>";
	echo "<th class='kkacc_status'>防禦</th>";
	echo "<th class='kkacc_status'>精準</th>";
	echo "<th class='kkacc_status'>技法</th>";
	echo "<th class='kkacc_status'>統率</th>";
	echo "<th class='kkacc_effect'>效果</th>";
	echo "</tr>";
	
	while($row = mysql_fetch_array($charm_group[0]))
	{
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['lv']."</td>";
		echo "<td>".$row['hp']."</td>";
		echo "<td>".$row['atk']."</td>";
		echo "<td>".$row['def']."</td>";
		echo "<td>".$row['hit']."</td>";
		echo "<td>".$row['skill']."</td>";
		echo "<td>".$row['lead']."</td>";
		echo "<td>".$row['effect']."</td>";	
		echo "</tr>";
	}
	echo "</table>";


mysql_close($con);
?>
    
</div> <!-- ContentSetting END -->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->
<?php get_footer(); ?>