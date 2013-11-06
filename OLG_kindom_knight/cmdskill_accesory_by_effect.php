<?php
/*
Template Name: Kingdom Knight - Accesory by effect
*/
?>

<?php get_header('kk'); ?>
<style type="text/css">#kk1_2:before{content:"● " !important;} #Mainnav_olg a{color:red !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'Kingdom_Knight_sidebar' ); ?><?php get_sidebar( 'Chitika' ); ?></div>
<div id="OLG_Main_content">

<div class="ContentSetting"> 
	<div class="SingleTitle">
		<h1>裝飾品一覽(順效果)</h1>
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
$acc_group[$x] = mysql_query("

SELECT 
acc.acc_name as name,
acc.acc_lv as lv,
acc.acc_hp as hp,
acc.acc_atk as atk,
acc.acc_def as def,
acc.acc_hit as hit,
acc.acc_skill as skill,
acc.acc_lead as lead,
acc.acc_effect as effect,
acc.acc_group as accgroup

FROM 
wp_valley.kk_lord_acc as acc

WHERE 
acc.acc_group = ".$x."

ORDER BY 
acc.acc_chance,acc.acc_effect;

");
}

$acc_group_title[0]="特殊"; 
$acc_group_title[1]="攻擊時有Ｏ％機率降低敵全軍精準ＯＯ，效果持續Ｏ回合"; 
$acc_group_title[2]="擊中目標時，有Ｏ％機率解除目標的增益狀態"; 
$acc_group_title[3]="攻擊時有Ｏ％機率降低目標防禦力Ｏ％，持續Ｏ回合"; 
$acc_group_title[4]="攻擊時有Ｏ％機率對敵前，中陣造成Ｏ％攻擊傷害"; 
$acc_group_title[5]="攻擊時有Ｏ％機率對敵前陣造成Ｏ％攻擊傷害"; 
$acc_group_title[6]="攻擊時有Ｏ％機率額外發動1次攻擊";
$acc_group_title[7]="攻擊時有Ｏ％機率對敵中，後陣造成Ｏ％防禦力的絕對傷害，Ｏ％機率暈眩目標Ｏ回合";
$acc_group_title[8]="擊中目標時有Ｏ％機率使目標無法恢復生命持續Ｏ回合";
$acc_group_title[9]="擊中目標時，有Ｏ％機率致毒Ｏ回合，每回合損失Ｏ生命";
$acc_group_title[10]="擊中目標時有Ｏ％機率沉默目標Ｏ回合，無法施展戰法";
$acc_group_title[11]="普通攻擊時有Ｏ％機率擊暈敵全軍Ｏ回合，無法行動";
$acc_group_title[12]="擊中目標時，有Ｏ％機率凍結該目標行動Ｏ回合";
$acc_group_title[13]="攻擊時有Ｏ％機率立即重置所有技能的冷卻時間";
$acc_group_title[14]="攻擊時Ｏ％機率恢復前，中陣等同主將生命上限Ｏ％的生命 ";
$acc_group_title[15]="攻擊時有Ｏ％機率解除前陣的不良狀態 ";
$acc_group_title[16]="攻擊時有Ｏ％機率解除前，中陣的不良狀態 ";
$acc_group_title[17]="攻擊時有Ｏ％機率解除全軍的不良狀態 ";
$acc_group_title[18]="攻擊時有Ｏ％機率降低目標攻擊力Ｏ％，持續Ｏ回合";

?>

	<div class="kkacc_description kk_description" id="top">
    	<div class="kk_description_title">目錄</div>
        
        <div class="kkacc_description_subtitle">－能力下降型</div>
        <ul>
        	<li><a href="#type1"><?php echo $acc_group_title[1];?></a></li>
   			<li><a href="#type2"><?php echo $acc_group_title[2];?></a></li>
        	<li><a href="#type3"><?php echo $acc_group_title[3];?></a></li>
            <li><a href="#type18"><?php echo $acc_group_title[18];?></a></li>
		</ul>
        
        <div class="kkacc_description_subtitle">－傷害型</div>
        <ul>
        	<li><a href="#type4"><?php echo $acc_group_title[4];?></a></li>
   			<li><a href="#type5"><?php echo $acc_group_title[5];?></a></li>
        	<li><a href="#type6"><?php echo $acc_group_title[6];?></a></li>
            <li><a href="#type7"><?php echo $acc_group_title[7];?></a></li>
		</ul>

        <div class="kkacc_description_subtitle">－異常狀態型</div>
        <ul>
        	<li><a href="#type8"><?php echo $acc_group_title[8];?></a></li>
   			<li><a href="#type9"><?php echo $acc_group_title[9];?></a></li>
        	<li><a href="#type10"><?php echo $acc_group_title[10];?></a></li>
            <li><a href="#type11"><?php echo $acc_group_title[11];?></a></li>
            <li><a href="#type12"><?php echo $acc_group_title[12];?></a></li>
		</ul>
        
        <div class="kkacc_description_subtitle">－重置冷卻時間</div>
        <ul>
        	<li><a href="#type13"><?php echo $acc_group_title[13];?></a></li>
		</ul> 
        
        <div class="kkacc_description_subtitle">－回復型</div>
        <ul>
        	<li><a href="#type14"><?php echo $acc_group_title[14];?></a></li>
   			<li><a href="#type15"><?php echo $acc_group_title[15];?></a></li>
        	<li><a href="#type16"><?php echo $acc_group_title[16];?></a></li>
            <li><a href="#type17"><?php echo $acc_group_title[17];?></a></li>
		</ul>

        <div class="kkacc_description_subtitle">－特殊型</div>
        <ul>
        	<li><a href="#type0"><?php echo $acc_group_title[0];?></a></li>
		</ul>               
    </div>

<?php

for ($y=1; $y<=18; $y++)
{
	echo "<div id='type".$y."' class='kksubtitle'>".$acc_group_title[$y]."<a href='#top' class='backtotop'>▲TOP</a></div>";
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
	
	while($row = mysql_fetch_array($acc_group[$y]))
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


/*=== For special eq ====================================================================*/
	echo "<div id='type0' class='kksubtitle'>".$acc_group_title[0]."<a href='#top' class='backtotop'>▲TOP</a></div>";
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
	
	while($row = mysql_fetch_array($acc_group[0]))
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