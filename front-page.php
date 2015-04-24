<?php get_header( 'home' ); ?>

    <style>
        <?php include 'front-page.css'; ?>
    </style>

        <!--**********************************************************************************************-->
        <!--********************************************TITLE-LINE-BELOW**********************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div id="deskHomeLeft" class="col-xs-4 col-sm-5 col-md-5 col-lg-5 text-center">
                <div class="SecondHeadSideLines">
                    <div class="SecondHeadSideline">
                    </div>
                </div>
            </div>
            <div id="deskHomeCent" class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-center">
                <div class="SecondHeadSide">
                    HOME
                </div>
            </div>
            <div id="deskHomeRight" class="col-xs-4 col-sm-5 col-md-5 col-lg-5 text-center">
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
        <!--**********************************************************************************************-->
        <!--********************************************DATE-BOX-BELOW************************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div class="visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <?php
                $args = array('numberposts' => 1);
                $lastPosts=get_posts($args);
                $lastPostID=$lastPosts[0]->ID;
                $lastPostThumbID=get_post_thumbnail_id($lastPostID);
                $lastPostThumbURL = wp_get_attachment_url($lastPostThumbID);
                //$lastPostThumbURLLocal = explode('/',$lastPostThumbURL,4);
                ?>
                <?php// echo $lastPostThumbURLLocal[3] ?>

                <div class="DateBox" style="background-image: url(<?php echo $lastPostThumbURL ?>)">

                    <div id="centeredDateBox">
                        <div id="row0Date" class="row-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            </div>
                        </div>
                        <div id="row1Date" class="row-fluid">
                            <div id="col1Date" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <div id="Headline">
                                    <a href="<?php echo get_permalink( $lastPostID ); ?>"><?php echo get_the_title( $lastPostID ); ?></a>
                                </div>
                            </div>
                        </div>
                        <div id="row2Date" class="row-fluid">
                            <div id="col2Date" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <div class="DatelineCont">
                                    <div class="boxDateline">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="row23Date" class="row-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            </div>
                        </div>
                        <div id="row3Date" class="row-fluid">
                            <div id="col3Date" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <div id="Date">
                                    <?php echo get_the_date( ('F  Y') , $lastPostID ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row34Date, row-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            </div>
                        </div>
                        <div id="row4Date" class="row-fluid">
                            <div id="col4Date" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <div id="Comment">
                                    <?php echo get_post($lastPostID)->post_excerpt ; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row34Date, row-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            </div>
                        </div>
                        <div id="row5Date" class="row-fluid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--**********************************************************************************************-->
        <!--********************************************DATE-BOX-ABOVE************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--*************************************SPACE-BETWEEN-DATE-BOX-THUMB*****************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div class=" visible-lg visible-md space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
        </div>
        <!--**********************************************************************************************-->
        <!--*************************************SPACE-BETWEEN-DATE-BOX-THUMB*****************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************FEATURES-THUMBNAILS-BELOW***********************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <!--*******************************************************************************************-->
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <div id="colGD" class="col-xs-10 col-sm-6 col-md-4 col-lg-4 text-center">
                <?php
                // Get the ID of a given category
                $category_id1 = get_cat_ID( 'design' );
                // Get the URL of this category
                $category_link1 = get_category_link( $category_id1 );
                ?>
                <?php
                $args1 = array('numberposts' => 1, 'category' => $category_id1);
                $lastPosts1 = get_posts($args1);
                $lastPostID1 = $lastPosts1[0]->ID;
                $lastPostThumbID1 = get_post_thumbnail_id($lastPostID1);
                $lastPostThumbURL1 = wp_get_attachment_url($lastPostThumbID1);
                $lastPostThumbURLLocal1 = explode('/',$lastPostThumbURL1,4);
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link1 ); ?>" title="Design" class="featureLink">
                    <div id="graphicBorder" class="featureBorders">
                    </div>
                    <div id="graphDes" class="fetPicture" style="background-image: url(<?php echo $lastPostThumbURL1 ?>)">
                    </div>
                    <div id="featuredBoxGraph" class="boxes">
                        <div id="wGD" class="wFeatured">
                            <span class="featuredLetter">G</span>raphic <span class="featuredLetter">D</span>esign
                        </div>
                    </div>
                </a>
            </div>
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <!--*******************************************************************************************-->
            <div class=" visible-xm hidden-sm hidden-md hidden-lg space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
            <!--*******************************************************************************************-->
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <div id="colIL" class="col-xs-10 col-sm-6 col-md-4 col-lg-4 text-center">
                <?php
                // Get the ID of a given category
                $category_id2 = get_cat_ID( 'illustration' );
                // Get the URL of this category
                $category_link2 = get_category_link( $category_id2 );
                ?>
                <?php
                $args2 = array('numberposts' => 1, 'category' => $category_id2);
                $lastPosts2 = get_posts($args2);
                $lastPostID2 = $lastPosts2[0]->ID;
                $lastPostThumbID2 = get_post_thumbnail_id($lastPostID2);
                $lastPostThumbURL2 = wp_get_attachment_url($lastPostThumbID2);
                $lastPostThumbURLLocal2 = explode('/',$lastPostThumbURL2,4);
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link2 ); ?>" title="Illustration" class="featureLink">
                    <div id="illusBorder" class="featureBorders">
                    </div>
                    <div id="illus" class="fetPicture" style="background-image: url(<?php echo $lastPostThumbURL2 ?>)">
                    </div>
                    <div id="featuredBoxIllus" class="boxes">
                        <div id="wIL" class="wFeatured">
                            <span class="featuredLetter">I</span>llustration
                        </div>
                    </div>
                </a>
            </div>
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <!--****************************************SPACE-XM*******************************************-->
            <div class=" visible-xm hidden-sm hidden-md hidden-lg space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
            <!--*******************************************************************************************-->
            <!--****************************************SPACE-SM*******************************************-->
            <div class=" hidden-xm visible-sm hidden-md hidden-lg space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
            <!--*******************************************************************************************-->
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <div id="colPH" class="col-xs-10 col-sm-12 col-md-4 col-lg-4 text-center">
                <?php
                // Get the ID of a given category
                $category_id3 = get_cat_ID( 'photos' );
                // Get the URL of this category
                $category_link3 = get_category_link( $category_id3);
                ?>

                <?php
                $args3 = array('numberposts' => 1, 'category' => $category_id3);
                $lastPosts3 = get_posts($args3);
                $lastPostID3 = $lastPosts3[0]->ID;
                $lastPostThumbID3 = get_post_thumbnail_id($lastPostID3);
                $lastPostThumbURL3 = wp_get_attachment_url($lastPostThumbID3);
                $lastPostThumbURLLocal3 = explode('/',$lastPostThumbURL3,4);
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link3 ); ?>" title="Photography" class="featureLink">
                    <div id="photographyBorder" class="featureBorders">
                    </div>
                    <div id="photo" class="fetPicture" style="background-image: url(<?php echo $lastPostThumbURL3 ?>)">
                    </div>
                    <div id="featuredBoxPhotography" class="boxes">
                        <div id="wPH" class="wFeatured">
                            <span class="featuredLetter">P</span>hotography
                        </div>
                    </div>
                </a>
            </div>
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <!--****************************************SPACE-XM*******************************************-->
            <div class=" visible-xm hidden-sm hidden-md hidden-lg space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
            <!--*******************************************************************************************-->
            <!--****************************************SPACE-SM*******************************************-->
            <div class=" hidden-xm visible-sm hidden-md hidden-lg space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
            <!--*******************************************************************************************-->
            <!--****************************************SPACE-LG*******************************************-->
            <div class=" hidden-xm hidden-sm visible-md visible-lg space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
            <!--*******************************************************************************************-->
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <div id="colFA" class=" col-xs-10 col-sm-6 col-md-8 col-lg-8 text-center">
                <?php
                // Get the ID of a given category
                $category_id4 = get_cat_ID( 'videos' );
                // Get the URL of this category
                $category_link4 = get_category_link( $category_id4 );
                ?>
                <?php
                $args4 = array('numberposts' => 1, 'category' => $category_id4);
                $lastPosts4 = get_posts($args4);
                $lastPostID4 = $lastPosts4[0]->ID;
                $lastPostThumbID4 = get_post_thumbnail_id($lastPostID4);
                $lastPostThumbURL4 = wp_get_attachment_url($lastPostThumbID4);
                $lastPostThumbURLLocal4 = explode('/',$lastPostThumbURL4,4);
                ?>
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link4 ); ?>" title="Video" class="featureLink">
                    <div id="featuredBoxFilmAn" class="boxes">
                        <div id="wFA" class="wFeatured">
                            <span class="featuredLetter">F</span>ilm &amp; <span class="featuredLetter">A</span>nimation
                        </div>
                    </div>
                    <div id="filmAnBorder" class="featureBorders">
                    </div>
                    <div id="filan" class="fetPicture" style="background-image: url(<?php echo $lastPostThumbURL4 ?>)">
                        <!--FA-->
                    </div>
                </a>
            </div>
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <!--*******************************************************************************************-->
            <div class=" visible-xm hidden-sm hidden-md hidden-lg space20px col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space20px--></div>
            <!--*******************************************************************************************-->
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <div id="colAB" class="col-xs-10 col-sm-6 col-md-4 col-lg-4 text-center">
                <a class="featureLink" href="#">
                    <div id="featuredBoxAbout" class="boxes">
                        <div id="wAB" class="wFeatured">
                            <span class="featuredLetter">A</span>bout
                        </div>
                    </div>
                    <div id="aboutBorder" class="featureBorders">
                    </div>
                    <div id="about" class="fetPicture">
                    </div>
                </a>
            </div>
            <div class="visible-xm hidden-sm hidden-md hidden-lg col-xs-1">
            </div>
            <!--*******************************************************************************************-->
        </div>
        <!--**********************************************************************************************-->
        <!--**********************************FEATURES-THUMBNAILS-ABOVE***********************************-->
        <!--**********************************************************************************************-->

<?php get_footer(); ?>