<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/header-general.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/footer.css" type="text/css" media="screen" />
    <?php include 'PHP-functions.php'; ?>
    <?php wp_head(); ?>
</head>
<body>
<div id="mainCont">
    <div class="my-fluid-container">
        <!--**********************************************************************************************-->
        <!--*****************************************TOP-LOGO-BELOW***************************************-->
        <!--**********************************************************************************************-->
        <div class="visible-sm visible-md visible-lg row-fluid">
            <div id="logoTop" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div name="top" class="boxLogoTop">
                    <!--LogoTop-->
                </div>
            </div>
        </div>
        <!--**********************************************************************************************-->
        <!--********************************************TOP-LOGO-ABOVE************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <div class="mobiles row-fluid">
            <div id="aboveTopMenu" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--********************************************TOP-MENU-BELOW************************************-->
        <!--**********************************************************************************************-->
        <div class="largeScrVersion row-fluid">
            <div class="row1TopMenu col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <span class="ruiYunMob">RUIYUN</span><span>&#65279;</span><span> JIANG</span>
            </div>
        </div>
        <div class="mobiles row-fluid">
            <div class="row1TopMenu col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="<?php bloginfo('siteurl'); ?>"><span class="ruiYunMob">RUIYUN</span><span>&#65279;</span><span> JIANG</span></a>
            </div>
        </div>
        <!--**********************************************************************************************-->
        <!--********************************************TOP-MENU-ABOVE************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div id="betweenTopMenuList" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--************************************************LIST-BELOW************************************-->
        <!--**********************************************************************************************-->
        <div class="mobiles row-fluid">
            <div id="row2TopMenu" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="<?php echo get_permalink( 2 ); ?>">PORTFOLIO</a><span> - </span><a href="<?php echo get_permalink( 233 ); ?>">PROFILE</a><span> - </span><a href="<?php echo get_permalink( 229 ); ?>">CONTACT</a>
            </div>
        </div>
        <div class="largeScrVersion row-fluid">
            <div id="rowList" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="<?php bloginfo('siteurl'); ?>"><span class="firstLetterList">H</span><span class="otherLettersList">OME</span></a>
                <span class="bulletList"> &#8226; </span>
                <?php
                // Get the ID of a given category
                $category_id1 = get_cat_ID( 'design' );
                // Get the URL of this category
                $category_link1 = get_category_link( $category_id1 );
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link1 ); ?>" title="Design"><span class="firstLetterList">D</span><span class="otherLettersList">ESIGN</span></a>
                <span class="bulletList"> &#8226; </span>
                <?php
                // Get the ID of a given category
                $category_id2 = get_cat_ID( 'illustration' );
                // Get the URL of this category
                $category_link2 = get_category_link( $category_id2 );
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link2 ); ?>" title="Illustration"><span class="firstLetterList">I</span><span class="otherLettersList">LLUSTRATION</span></a>
                <span class="bulletList"> &#8226; </span>
                <?php
                // Get the ID of a given category
                $category_id3 = get_cat_ID( 'photos' );
                // Get the URL of this category
                $category_link3 = get_category_link( $category_id3);
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link3 ); ?>" title="Photography"><span class="firstLetterList">P</span><span class="otherLettersList">HOTOS</span></a>
                <span class="bulletList"> &#8226; </span>
                <?php
                // Get the ID of a given category
                $category_id4 = get_cat_ID( 'videos' );
                // Get the URL of this category
                $category_link4 = get_category_link( $category_id4 );
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link4 ); ?>" title="Video"><span class="firstLetterList">V</span><span class="otherLettersList">IDEOS</span></a>
                <span class="bulletList"> &#8226; </span>
                <a href="<?php echo get_permalink( 233 ); ?>"><span class="firstLetterList">P</span><span class="otherLettersList">ROFILE</span></a>
                <span class="bulletList"> &#8226; </span>
                <a href="<?php echo get_permalink( 229 ); ?>"><span class="firstLetterList">C</span><span class="otherLettersList">ONTACT</span></a>
            </div>
        </div>
        <!--**********************************************************************************************-->
        <!--************************************************LIST-ABOVE************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div id="betweenListTitle" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->