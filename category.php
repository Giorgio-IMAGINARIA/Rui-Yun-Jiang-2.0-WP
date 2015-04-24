<?php get_header( 'general' ); ?>
    <style>
        <?php include 'category.css'; ?>
    </style>
        <!--**********************************************************************************************-->
        <!--********************************************TITLE-LINE-BELOW**********************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div id="deskHomeLeft" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="SecondHeadSideLines">
                    <div class="SecondHeadSideline">
                    </div>
                </div>
            </div>
            <div id="deskHomeCent" class="col-xs-6 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="SecondHeadSide">
                    <?php
                    $category = $wp_query->get_queried_object();
                    $categoryName = $category->name;
                    ?>
                    <p><?php echo $categoryName; ?></p>
                </div>
            </div>
            <div id="deskHomeRight" class="col-xs-3 col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="SecondHeadSideLines">
                    <div class="SecondHeadSideline">
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************************************************************************-->
        <!--********************************************TITLE-LINE-ABOVE**********************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div id="belowTitle" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        <?php
        // the query to set the posts per page to 7
        $args = array('posts_per_page' => 7, 'cat' => $cat, 'paged' => $paged );
        $cpt_query = new WP_Query($args);
        ?>
        <?php $loopCont=1;?>
        <?php if ( $cpt_query->have_posts() ) : while ( $cpt_query->have_posts() ) : $cpt_query->the_post(); ?>

            <div class="desktops"><!--****************************************DESKTOPS***************************************************************************-->
                <div class="row-fluid">
                    <?php if($paged==1){/*EXTERNAL IF*********************************************************************************************************************/
                        if ($loopCont==1){
                            $postID = get_the_ID();
                            $postPermalink = get_permalink($postID);
                            $thumbID = get_post_thumbnail_id($postID);
                            $thumbURL = wp_get_attachment_url($thumbID);
                            $thumbURLLocal = explode('/',$thumbURL,4);?>
                            <div class="col-md-12 col-lg-12 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="DateBox" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div id="centeredDateBox">
                                    </div>
                                    <div id="dateContent">
                                        <div id="row0Date" class="row-fluid">
                                            <div class="col-md-12 col-lg-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row1Date" class="row-fluid">
                                            <div id="col1Date" class="col-md-12 col-lg-12 text-center">
                                                <div id="Headline">
                                                    <?php handleTitles($postID);?>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="row2Date" class="row-fluid">
                                            <div id="col2Date" class="col-md-12 col-lg-12 text-center">
                                                <div class="DatelineCont">
                                                    <div class="boxDateline">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="row23Date" class="row-fluid">
                                            <div class="col-md-12 col-lg-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row3Date" class="row-fluid">
                                            <div id="col3Date" class="col-md-12 col-lg-12 text-center">
                                                <div id="Date"><?php echo get_the_date( ('F  Y') , $postID );?></div>
                                            </div>
                                        </div>
                                        <div class="row34Date, row-fluid">
                                            <div class="col-md-12 col-lg-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row4Date" class="row-fluid">
                                            <div id="col4Date" class="col-md-12 col-lg-12 text-center">
                                                <div id="Comment"><?php echo get_the_excerpt($postID) ?></div>
                                            </div>
                                        </div>
                                        <div class="row34Date, row-fluid">
                                            <div class="col-md-12 col-lg-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row5Date" class="row-fluid">
                                            <div class="col-md-12 col-lg-12 text-center">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="space20px col-md-12 col-lg-12 text-center"><!--space20px--></div>
                        <?php }
                        elseif (($loopCont==2)||($loopCont==5)) {
                            $postID = get_the_ID();
                            $postPermalink = get_permalink($postID);
                            $thumbID = get_post_thumbnail_id($postID);
                            $thumbURL = wp_get_attachment_url($thumbID);
                            $thumbURLLocal = explode('/',$thumbURL,4);?>
                            <div id="colP1" class="col-md-4 col-lg-4 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID );?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        elseif (($loopCont==3)||($loopCont==6)) {
                            $postID = get_the_ID();
                            $postPermalink = get_permalink($postID);
                            $thumbID = get_post_thumbnail_id($postID);
                            $thumbURL = wp_get_attachment_url($thumbID);
                            $thumbURLLocal = explode('/',$thumbURL,4);?>
                            <div id="colP2" class="col-md-4 col-lg-4 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID); ?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID );?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        elseif (($loopCont==4)||($loopCont==7)) {
                            $postID = get_the_ID();
                            $postPermalink = get_permalink($postID);
                            $thumbID = get_post_thumbnail_id($postID);
                            $thumbURL = wp_get_attachment_url($thumbID);
                            $thumbURLLocal = explode('/',$thumbURL,4);?>
                            <div id="colP3" class="col-md-4 col-lg-4 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID );?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        if ($loopCont==4) {
                            echo'<div class="space20px col-md-12 col-lg-12 text-center"><!--space20px--></div>';
                        }
                    }/*EXTERNAL IF*****************************************************************************************************************************/
                    else {/*EXTERNAL IF************************************************************************************************************************/
                        if (($loopCont==1)||($loopCont==4)) {
                            $postID = get_the_ID();
                            $postPermalink = get_permalink($postID);
                            $thumbID = get_post_thumbnail_id($postID);
                            $thumbURL = wp_get_attachment_url($thumbID);
                            $thumbURLLocal = explode('/',$thumbURL,4);?>
                            <div id="colP1" class="col-md-4 col-lg-4 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID );?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        elseif (($loopCont==2)||($loopCont==5)) {
                            $postID = get_the_ID();
                            $postPermalink = get_permalink($postID);
                            $thumbID = get_post_thumbnail_id($postID);
                            $thumbURL = wp_get_attachment_url($thumbID);
                            $thumbURLLocal = explode('/',$thumbURL,4);?>
                            <div id="colP2" class="col-md-4 col-lg-4 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID );?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        elseif (($loopCont==3)||($loopCont==6)) {
                            $postID = get_the_ID();
                            $postPermalink = get_permalink($postID);
                            $thumbID = get_post_thumbnail_id($postID);
                            $thumbURL = wp_get_attachment_url($thumbID);
                            $thumbURLLocal = explode('/',$thumbURL,4);?>
                            <div id="colP3" class="col-md-4 col-lg-4 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID );?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        ?>
                        <?php if ($loopCont==3) {
                            echo'<div class="space20px col-md-12 col-lg-12 text-center"><!--space20px--></div>';
                        }
                    };?>
                </div>
            </div><!--****************************************DESKTOPS******************************************************************************************-->
                  <!--***************************************************************************************************************************************************-->
                  <!--****************************************************BETWEEN DESKTOPS AND TABLETS+MOBILES***********************************************************-->
                  <!--***************************************************************************************************************************************************-->
            <div class="tablets"><!--****************************TABLETS******************************************************************************-->
                <div class="row-fluid">
                    <?php if($paged==1){/*EXTERNAL IF*********************************************************************************************************************/
                        ?>
                        <?php  if ($loopCont==1){?>
                            <div class="col-sm-12 text-center">
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="DateBox" style="background-image: url(<?php echo $thumbURLLocal[3] ?>)">
                                    </div>
                                    <div id="centeredDateBox">
                                    </div>
                                    <div id="dateContent">
                                        <div id="row0Date" class="row-fluid">
                                            <div class="col-sm-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row1Date" class="row-fluid">
                                            <div id="col1Date" class="col-sm-12 text-center">
                                                <div id="Headline">
                                                    <?php handleTitles($postID);?>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="row2Date" class="row-fluid">
                                            <div id="col2Date" class="col-sm-12 text-center">
                                                <div class="DatelineCont">
                                                    <div class="boxDateline">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="row23Date" class="row-fluid">
                                            <div class="col-sm-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row3Date" class="row-fluid">
                                            <div id="col3Date" class="col-sm-12 text-center">
                                                <div id="Date"><?php echo get_the_date( ('F  Y') , $postID );?></div>
                                            </div>
                                        </div>
                                        <div class="row34Date, row-fluid">
                                            <div class="col-sm-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row4Date" class="row-fluid">
                                            <div id="col4Date" class="col-sm-12 text-center">
                                                <div id="Comment"><?php echo get_the_excerpt($postID) ?></div>
                                            </div>
                                        </div>
                                        <div class="row34Date, row-fluid">
                                            <div class="col-sm-12 text-center">
                                            </div>
                                        </div>
                                        <div id="row5Date" class="row-fluid">
                                            <div class="col-sm-12 text-center">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=" space20px col-sm-12 text-center"><!--space20px--></div>
                        <?php }
                        else if ($loopCont% 2 == 0){?>
                            <div id="colPL" class="col-sm-6 text-center">
                                <?php
                                $postID = get_the_ID();
                                $postPermalink = get_permalink($postID);
                                $thumbID = get_post_thumbnail_id($postID);
                                $thumbURL = wp_get_attachment_url($thumbID);
                                $thumbURLLocal = explode('/',$thumbURL,4);?>
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        elseif (($loopCont% 2 != 0)&&($loopCont != 1)){?>
                            <div id="colPR" class="col-sm-6 text-center">
                                <?php
                                $postID = get_the_ID();
                                $postPermalink = get_permalink($postID);
                                $thumbID = get_post_thumbnail_id($postID);
                                $thumbURL = wp_get_attachment_url($thumbID);
                                $thumbURLLocal = explode('/',$thumbURL,4);?>
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                        <!--****************************************SPACE-SM*******************************************-->
                        <?php if (($loopCont% 2 != 0) && ($loopCont < 7)&& ($loopCont != 1))  {
                            echo ' <div class="space20px col-sm-12 text-center"><!--space20px--></div>';
                        } ?>
                    <?php }
                    else {/*EXTERNAL IF************************************************************************************************************************/
                        ?>
                        <?php  if ($loopCont% 2 != 0){?>
                            <div id="colPL" class="col-sm-6 text-center">
                                <?php
                                $postID = get_the_ID();
                                $postPermalink = get_permalink($postID);
                                $thumbID = get_post_thumbnail_id($postID);
                                $thumbURL = wp_get_attachment_url($thumbID);
                                $thumbURLLocal = explode('/',$thumbURL,4);?>
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }
                        elseif (($loopCont% 2 == 0)&&($loopCont != 1)){?>
                            <div id="colPR" class="col-sm-6 text-center">
                                <?php
                                $postID = get_the_ID();
                                $postPermalink = get_permalink($postID);
                                $thumbID = get_post_thumbnail_id($postID);
                                $thumbURL = wp_get_attachment_url($thumbID);
                                $thumbURLLocal = explode('/',$thumbURL,4);?>
                                <a class="featureLink" href="<?php echo $postPermalink; ?>">
                                    <div class="featureBorders">
                                    </div>
                                    <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                                    </div>
                                    <div class="boxes">
                                        <div class="wFeatured">
                                            <div class="firstTitle featuredTitle">
                                                <?php handleTitles($postID);?>
                                            </div>
                                            <div class="largeScrVersion secondTitle featuredTitle">
                                                <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                        <!--****************************************SPACE-SM*******************************************-->
                        <?php if (($loopCont% 2 == 0)&&($loopCont < 6))  {
                            echo ' <div class="space20px col-sm-12 text-center"><!--space20px--></div>';    }
                        ?>
                    <?php
                    }/*EXTERNAL IF************************************************************************************************************************/
                    ?>
                </div>
            </div><!--***************************************************TABLETS******************************************************************************-->
            <div class="mobiles"><!--****************************MOBILES******************************************************************************-->
                <div class="row-fluid">
                    <div class="col-xs-1">
                    </div>
                    <div id="colP1" class="col-xs-10 text-center">
                        <?php
                        $postID = get_the_ID();
                        $postPermalink = get_permalink($postID);
                        $thumbID = get_post_thumbnail_id($postID);
                        $thumbURL = wp_get_attachment_url($thumbID);
                        $thumbURLLocal = explode('/',$thumbURL,4);?>
                        <a class="featureLink" href="<?php echo $postPermalink; ?>">
                            <div class="featureBorders">
                            </div>
                            <div class="fetPicture" style="background-image: url(<?php echo $thumbURL ?>)">
                            </div>
                            <div class="boxes">
                                <div class="wFeatured">
                                    <div class="firstTitle featuredTitle">
                                        <?php handleTitles($postID);?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-1">
                    </div>
                    <!--*************************************SPACE-XM**********************************************-->
                    <?php if ($loopCont < 7){
                        echo '<div class="space20px col-xs-12 text-center"><!--space20px--></div>';    }
                    ?>
                </div>
            </div><!--***************************************************TABLETS+MOBILES******************************************************************************-->
            <?php
            $loopCont=$loopCont+1;
        endwhile;
            ?>
        <?php else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif;
        wp_reset_query();
        ?>
        <!--**********************************************************************************************-->
        <!--*****************************SPACE-BETWEEN-THUMBNAILS-PAGES-LINE******************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div id="betweenThumbnailsPages" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--******************************SPACE-BETWEEN-THUMBNAILS-PAGES-LINE*****************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--*******************************************PAGES-BELOW****************************************-->
        <!--**********************************************************************************************-->
        <!-- <h1>Total number of pages: <?php echo $cpt_query->max_num_pages; ?></h1>
    <h1>Total number of posts for this category: <?php echo $category->count; ?></h1>
    <h1>Number of posts for this page: <?php echo $cpt_query->post_count; ?></h1>
    <h1>Page number: <?php echo $paged; ?></h1>-->
        <div class="row-fluid">
            <div id="pages" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div id="pagesContainer">
                    <div><?php
                        if (($category->count)<=7){
                            $totalNumPages=1;
                        }
                        else{
                            $postOtherPages=($category->count)-7;
                            $totalNumPages=1+ceil($postOtherPages/6);
                        }
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, $paged ),
                            'prev_next' => True,
                            'prev_text' => '<<',
                            'next_text' => '>>',
                            'end_size'=> 3,
                            'mid_size'=> 3,
                            'total' => $totalNumPages
                        ) );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************************************************************************-->
        <!--*******************************************PAGES-ABOVE****************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--******************************************RED-LINE-BELOW**************************************-->
        <!--**********************************************************************************************-->
        <div class="mobVersion row-fluid">
            <div id="redLineSpace" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

            </div>
        </div>
        <?php if  ($totalNumPages != 1){?>
            <div class="largeScrVersion row-fluid">
                <div id="redLine" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div id="redLineContainer">
                        <div id="line">

                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        <!--**********************************************************************************************-->
        <!--******************************************RED-LINE-ABOVE**************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--********************************************BACK-BELOW****************************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">

            <div id="back" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="backSide">
                    <div>

                    </div>
                </div>
                <div id="backCenter">
                    <a href="<?php echo get_permalink( 2 ); ?>">BACK TO ALL</a><span>&nbsp;|&nbsp;</span><a href="#top">BACK TO TOP</a>
                </div>
                <div class="backSide">
                    <div>

                    </div>
                </div>
            </div>

        </div>
    <!--**********************************************************************************************-->
    <!--******************************************* BACK-ABOVE****************************************-->
    <!--**********************************************************************************************-->
<?php get_footer(); ?>