<?php
/*
Template Name: Kingdom Knight - Adventure
*/
?>

<?php get_header('kk'); ?>
<style type="text/css">#kk2_4:before{content:"● " !important;} #Mainnav_olg a{color:red !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'Kingdom_Knight_sidebar' ); ?><?php get_sidebar( 'Chitika' ); ?></div>
<div id="OLG_Main_content">

<div class="ContentSetting"> 
	<div class="SingleTitle">
		<h1>冒險一覽</h1>
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

$list = mysql_query("

SELECT 
Maintable.adventure_id as id,
Maintable.adventure_name as adventure

FROM 
wp_valley.kk_adventure as Maintable

WHERE 
Maintable.Lasthit_skill IS NOT NULL

ORDER BY 
adventure_name;

");

$result = mysql_query("

SELECT 
Maintable.adventure_id as id,
Maintable.adventure_name as adventure,
Maintable.hardness as hardness,
Maintable.teammate as teammate,
Maintable.image_id as image_id,

LV1_1.skill_name as LV1_skill1,
LV1_2.skill_name as LV1_skill2,
LV1_3.skill_name as LV1_skill3,
LV1_4.skill_name as LV1_skill4,

LV1_1.skill_lv as LV1_skill1_lv,
LV1_2.skill_lv as LV1_skill2_lv,
LV1_3.skill_lv as LV1_skill3_lv,
LV1_4.skill_lv as LV1_skill4_lv,

LV1_1.skill_subid as LV1_skill1_subid,
LV1_2.skill_subid as LV1_skill2_subid,
LV1_3.skill_subid as LV1_skill3_subid,
LV1_4.skill_subid as LV1_skill4_subid,

Maintable.LV1_skill1_amount as LV1_skill1_amount,
Maintable.LV1_skill2_amount as LV1_skill2_amount,
Maintable.LV1_skill3_amount as LV1_skill3_amount,
Maintable.LV1_skill4_amount as LV1_skill4_amount,

LV2_1.skill_name as LV2_skill1,
LV2_2.skill_name as LV2_skill2,
LV2_3.skill_name as LV2_skill3,
LV2_4.skill_name as LV2_skill4,
LV2_5.skill_name as LV2_skill5,

LV2_1.skill_lv as LV2_skill1_lv,
LV2_2.skill_lv as LV2_skill2_lv,
LV2_3.skill_lv as LV2_skill3_lv,
LV2_4.skill_lv as LV2_skill4_lv,
LV2_5.skill_lv as LV2_skill5_lv,

LV2_1.skill_subid as LV2_skill1_subid,
LV2_2.skill_subid as LV2_skill2_subid,
LV2_3.skill_subid as LV2_skill3_subid,
LV2_4.skill_subid as LV2_skill4_subid,
LV2_5.skill_subid as LV2_skill5_subid,

Maintable.LV2_skill1_amount as LV2_skill1_amount,
Maintable.LV2_skill2_amount as LV2_skill2_amount,
Maintable.LV2_skill3_amount as LV2_skill3_amount,
Maintable.LV2_skill4_amount as LV2_skill4_amount,
Maintable.LV2_skill5_amount as LV2_skill5_amount,

LV3_1.skill_name as LV3_skill1,
LV3_2.skill_name as LV3_skill2,
LV3_3.skill_name as LV3_skill3,
LV3_4.skill_name as LV3_skill4,
LV3_5.skill_name as LV3_skill5,
LV3_6.skill_name as LV3_skill6,

LV3_1.skill_lv as LV3_skill1_lv,
LV3_2.skill_lv as LV3_skill2_lv,
LV3_3.skill_lv as LV3_skill3_lv,
LV3_4.skill_lv as LV3_skill4_lv,
LV3_5.skill_lv as LV3_skill5_lv,
LV3_6.skill_lv as LV3_skill6_lv,

LV3_1.skill_subid as LV3_skill1_subid,
LV3_2.skill_subid as LV3_skill2_subid,
LV3_3.skill_subid as LV3_skill3_subid,
LV3_4.skill_subid as LV3_skill4_subid,
LV3_5.skill_subid as LV3_skill5_subid,
LV3_6.skill_subid as LV3_skill6_subid,

Maintable.LV3_skill1_amount as LV3_skill1_amount,
Maintable.LV3_skill2_amount as LV3_skill2_amount,
Maintable.LV3_skill3_amount as LV3_skill3_amount,
Maintable.LV3_skill4_amount as LV3_skill4_amount,
Maintable.LV3_skill5_amount as LV3_skill5_amount,
Maintable.LV3_skill6_amount as LV3_skill6_amount,

Lastlv.skill_name as Lastlv_skill,
Lastlv.skill_lv as Lastlv_skill_lv,
Lastlv.skill_subid as Lastlv_skill_subid

FROM 
wp_valley.kk_adventure as Maintable

LEFT JOIN wp_valley.kk_commander_skill LV1_1 ON Maintable.LV1_Skill1 = LV1_1.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV1_2 ON Maintable.LV1_Skill2 = LV1_2.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV1_3 ON Maintable.LV1_Skill3 = LV1_3.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV1_4 ON Maintable.LV1_Skill4 = LV1_4.skill_id

LEFT JOIN wp_valley.kk_commander_skill LV2_1 ON Maintable.LV2_Skill1 = LV2_1.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV2_2 ON Maintable.LV2_Skill2 = LV2_2.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV2_3 ON Maintable.LV2_Skill3 = LV2_3.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV2_4 ON Maintable.LV2_Skill4 = LV2_4.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV2_5 ON Maintable.LV2_Skill5 = LV2_5.skill_id

LEFT JOIN wp_valley.kk_commander_skill LV3_1 ON Maintable.LV3_Skill1 = LV3_1.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV3_2 ON Maintable.LV3_Skill2 = LV3_2.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV3_3 ON Maintable.LV3_Skill3 = LV3_3.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV3_4 ON Maintable.LV3_Skill4 = LV3_4.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV3_5 ON Maintable.LV3_Skill5 = LV3_5.skill_id
LEFT JOIN wp_valley.kk_commander_skill LV3_6 ON Maintable.LV3_Skill6 = LV3_6.skill_id

LEFT JOIN wp_valley.kk_commander_skill Lastlv ON Maintable.Lasthit_Skill = Lastlv.skill_id

WHERE 
Maintable.Lasthit_skill IS NOT NULL

ORDER BY 
adventure_name;

");
?>

	<div class="kkadv_description kk_description">
    	<div class="kk_description_title">目錄</div>
        <ul>
		<?php        
			while($row = mysql_fetch_array($list))        	
			{
				echo "<li><a href='#kkadv_".$row['id']."'>".$row['adventure']."</a></br></li>";	
			}
		?>        
		</ul>
    </div>

<?php

while($row = mysql_fetch_array($result))
{
	echo "<section class='kkadventure' id='kkadv_".$row['id']."'>";
	echo "<header>";
	echo "<div class='adventure_image' id='adventure_".$row['image_id']."'></div>";	
	echo "<div class='kknameblock_adv'>";
	echo "<h2>".$row['adventure']."</h2>";
	echo "<p>冒險難度: <span class='bold'>".$row['hardness']."</span> 星</p>";
	echo "<p>冒險人數: <span class='bold'>".$row['teammate']."</span> 人</p>";
	echo "</div>";
	echo "</header>";
	
	echo "<p class='adventure_floor_title'>第一層</p>";
	echo "<div class='adventure_floor'><div class='adventure_1stfloor_wrapper'>";

		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV1_skill1'].$row['LV1_skill1_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV1_skill1_subid']."'></div>";
		echo "<p>".$row['LV1_skill1_amount']."</p>";
		echo "</div>";
	
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV1_skill2'].$row['LV1_skill2_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV1_skill2_subid']."'></div>";
		echo "<p>".$row['LV1_skill2_amount']."</p>";
		echo "</div>";
	
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV1_skill3'].$row['LV1_skill3_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV1_skill3_subid']."'></div>";
		echo "<p>".$row['LV1_skill3_amount']."</p>";
		echo "</div>";
		
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV1_skill4'].$row['LV1_skill4_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV1_skill4_subid']."'></div>";
		echo "<p>".$row['LV1_skill4_amount']."</p>";
		echo "</div>";
		
	echo "</div></div>";

	echo "<p class='adventure_floor_title'>第二層</p>";
	echo "<div class='adventure_floor'><div class='adventure_2ndfloor_wrapper'>";

		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV2_skill1'].$row['LV2_skill1_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV2_skill1_subid']."'></div>";
		echo "<p>".$row['LV2_skill1_amount']."</p>";
		echo "</div>";
	
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV2_skill2'].$row['LV2_skill2_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV2_skill2_subid']."'></div>";
		echo "<p>".$row['LV2_skill2_amount']."</p>";
		echo "</div>";
	
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV2_skill3'].$row['LV2_skill3_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV2_skill3_subid']."'></div>";
		echo "<p>".$row['LV2_skill3_amount']."</p>";
		echo "</div>";
		
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV2_skill4'].$row['LV2_skill4_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV2_skill4_subid']."'></div>";
		echo "<p>".$row['LV2_skill4_amount']."</p>";
		echo "</div>";
		
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV2_skill5'].$row['LV2_skill5_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV2_skill5_subid']."'></div>";
		echo "<p>".$row['LV2_skill5_amount']."</p>";
		echo "</div>";
				
	echo "</div></div>";
	
	echo "<p class='adventure_floor_title'>第三層</p>";
	echo "<div class='adventure_floor'><div class='adventure_3rdfloor_wrapper'>";

		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV3_skill1'].$row['LV3_skill1_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV3_skill1_subid']."'></div>";
		echo "<p>".$row['LV3_skill1_amount']."</p>";
		echo "</div>";
	
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV3_skill2'].$row['LV3_skill2_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV3_skill2_subid']."'></div>";
		echo "<p>".$row['LV3_skill2_amount']."</p>";
		echo "</div>";
	
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV3_skill3'].$row['LV3_skill3_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV3_skill3_subid']."'></div>";
		echo "<p>".$row['LV3_skill3_amount']."</p>";
		echo "</div>";
		
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV3_skill4'].$row['LV3_skill4_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV3_skill4_subid']."'></div>";
		echo "<p>".$row['LV3_skill4_amount']."</p>";
		echo "</div>";

		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV3_skill5'].$row['LV3_skill5_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV3_skill5_subid']."'></div>";
		echo "<p>".$row['LV3_skill5_amount']."</p>";
		echo "</div>";
		
		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['LV3_skill6'].$row['LV3_skill6_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['LV3_skill6_subid']."'></div>";
		echo "<p>".$row['LV3_skill6_amount']."</p>";
		echo "</div>";
				
	echo "</div></div>";

	echo "<p class='adventure_floor_title'>最後一擊</p>";
	echo "<div class='adventure_floor'><div class='adventure_lastfloor_wrapper'>";

		echo "<div class='adventure_skill_box'>";
		echo "<p>".$row['Lastlv_skill'].$row['Lastlv_skill_lv']."</p>";
		echo "<div class='adventure_skill_image' id='adventure_skill_".$row['Lastlv_skill_subid']."'></div>";
		echo "<p>1</p>";
		echo "</div>";
		
	echo "</div></div>";
	
	echo "</section>";
}

	


	
mysql_close($con);
?>
    
</div> <!-- ContentSetting END -->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->
<?php get_footer(); ?>