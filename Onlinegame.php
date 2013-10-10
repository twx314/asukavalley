<?php
/*
Template Name: Online game List Page
*/
?>

<?php get_header(); ?>
<style type="text/css">#Mainnav_olg a{color:red !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'intro_olg' ); ?></div>
<div id="Right_column"><?php get_sidebar( 'search' ); ?><?php get_sidebar( 'Chitika' ); ?></div>
<div id="Main_content">

<div class="ContentSetting"> 
	<h1 class="ContentTitle">上線遊戲心得</h1>
    <div id="OLGList">
		<a href="http://www.asukavalley.com/kingdom-knight/"><img src="/OLG_Image/Kingdom_Knight/Kindom_Knight.jpg" title="王國騎士團" /></a>
	</div>

</div> <!-- Online game END -->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->

<?php get_footer(); ?>