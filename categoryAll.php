<?php
/*
Template Name: Category All
*/
?>

<?php get_header( 'general' ); ?>
    <style>
        <?php include 'categoryAll.css'; ?>
    </style>
    <!--))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))TABLET+DESKTOP-VERSION-BELOW)))))))))))))))))))-->
    <div class="largeScrVersion">
        <!--**********************************************************************************************-->
        <!--********************************************TITLE-LINE-BELOW**********************************-->
        <!--**********************************************************************************************-->
        <div  class="row-fluid">
            <div class="deskHomeLeft col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="SecondHeadSideLines">
                    <div class="SecondHeadSideline">
                    </div>
                </div>
            </div>
            <div class="deskHomeCent col-sm-4 col-md-4 col-lg-4 text-center">
                <div class="SecondHeadSide">
                    <p>DESIGN</p>
                </div>
            </div>
            <div class="deskHomeRight col-sm-4 col-md-4 col-lg-4 text-center">
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
            <div class="belowTitleNM col-sm-12 col-md-12 col-lg-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************MORE-BELOW**************************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div class="more col-sm-12 col-md-12 col-lg-12 text-right">
                <?php
                // Get the ID of a given category
                $category_id1 = get_cat_ID( 'design' );
                // Get the URL of this category
                $category_link1 = get_category_link( $category_id1 );
                ?>
                <a href="<?php echo esc_url( $category_link1 ); ?>" title="Design">MORE >></a>
            </div>
        </div>
        <!--**********************************************************************************************-->
        <!--**********************************************MORE-ABOVE**************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <div class="belowMore col-sm-12 col-md-12 col-lg-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************FEATURES-THUMBNAILS-BELOW***********************************-->
        <!--**********************************************************************************************-->
        <div class="row-fluid">
            <!--*******************************************************************************************-->
            <?php $args_des = array(
                'numberposts' => 3,
                'category' => $category_id1,
                'orderby' => 'post_date',
                'post_type' => 'post');
            $recent_posts_des = wp_get_recent_posts( $args_des);
            ?>
            <div id="colP1" class="col-sm-6 col-md-4 col-lg-4 text-center">




                <?php
                $postID = $recent_posts_des[0]["ID"];
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
            <!--*******************************************************************************************-->
            <div id="colP2" class="col-sm-6 col-md-4 col-lg-4 text-center">
                <?php
                $postID = $recent_posts_des[1]["ID"];
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
                            <div class="secondTitle featuredTitle">
                                <?php echo get_the_date( ('F  Y') , $postID ); ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--****************************************SPACE-SM*******************************************-->
            <div class="after2 hidden-xm visible-sm hidden-md hidden-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space after 2 (52)--></div>
            <!--*******************************************************************************************-->
            <div id="colP3" class="hidden-sm col-sm-6 col-md-4 col-lg-4 text-center"><?php
                $postID = $recent_posts_des[2]["ID"];
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
                            <div class="secondTitle featuredTitle">
                                <?php echo get_the_date( ('F  Y') , $postID ); ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!--****************************************SPACE-LG*******************************************-->
            <div class="after3 hidden-xm hidden-sm visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space after 3--></div>
            <!--*******************************************************************************************-->
            <!--**********************************************************************************************-->
            <!--********************************************TITLE-LINE-BELOW**********************************-->
            <!--**********************************************************************************************-->
            <div  class="row-fluid">
                <div class="deskHomeLeft col-sm-4 col-md-4 col-lg-4 text-center">
                    <div class="SecondHeadSideLines">
                        <div class="SecondHeadSideline">
                        </div>
                    </div>
                </div>
                <div class="deskHomeCent col-sm-4 col-md-4 col-lg-4 text-center">
                    <div class="SecondHeadSide">
                        <p>ILLUSTRATION</p>
                    </div>
                </div>
                <div class="deskHomeRight col-sm-4 col-md-4 col-lg-4 text-center">
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
                <div class="belowTitleNM col-sm-12 col-md-12 col-lg-12 text-center"></div>
            </div>
            <!--**********************************************************************************************-->
            <!--***************************************************SPACE**************************************-->
            <!--**********************************************************************************************-->
            <!--**********************************************************************************************-->
            <!--**********************************************MORE-BELOW**************************************-->
            <!--**********************************************************************************************-->
            <div class="row-fluid">
                <div class="more col-sm-12 col-md-12 col-lg-12 text-right">
                    <?php
                    // Get the ID of a given category
                    $category_id2 = get_cat_ID( 'illustration' );
                    // Get the URL of this category
                    $category_link2 = get_category_link( $category_id2 );
                    ?>
                    <a href="<?php echo esc_url( $category_link2 ); ?>">MORE >></a>
                </div>
            </div>
            <!--**********************************************************************************************-->
            <!--**********************************************MORE-ABOVE**************************************-->
            <!--**********************************************************************************************-->
            <!--**********************************************************************************************-->
            <!--***************************************************SPACE**************************************-->
            <!--**********************************************************************************************-->
            <div class="row-fluid">
                <div class="belowMore col-sm-12 col-md-12 col-lg-12 text-center"></div>
            </div>
            <!--**********************************************************************************************-->
            <!--***************************************************SPACE**************************************-->
            <!--**********************************************************************************************-->
            <!--**********************************************************************************************-->
            <!--**********************************FEATURES-THUMBNAILS-BELOW***********************************-->
            <!--**********************************************************************************************-->
            <div class="row-fluid">
                <!--*******************************************************************************************-->
                <?php $args_des = array(
                    'numberposts' => 3,
                    'category' => $category_id2,
                    'orderby' => 'post_date',
                    'post_type' => 'post');
                $recent_posts_des = wp_get_recent_posts( $args_des);
                ?>
                <div id="colP1" class="col-sm-6 col-md-4 col-lg-4 text-center">




                    <?php
                    $postID = $recent_posts_des[0]["ID"];
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
                <!--*******************************************************************************************-->
                <div id="colP2" class="col-sm-6 col-md-4 col-lg-4 text-center">
                    <?php
                    $postID = $recent_posts_des[1]["ID"];
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
                                <div class="secondTitle featuredTitle">
                                    <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--****************************************SPACE-SM*******************************************-->
                <div class="after2 hidden-xm visible-sm hidden-md hidden-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space after 2 (52)--></div>
                <!--*******************************************************************************************-->
                <div id="colP3" class="hidden-sm col-sm-6 col-md-4 col-lg-4 text-center"><?php
                    $postID = $recent_posts_des[2]["ID"];
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
                                <div class="secondTitle featuredTitle">
                                    <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--****************************************SPACE-LG*******************************************-->
                <div class="after3 hidden-xm hidden-sm visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space after 3--></div>
                <!--*******************************************************************************************-->
                <!--**********************************************************************************************-->
                <!--********************************************TITLE-LINE-BELOW**********************************-->
                <!--**********************************************************************************************-->
                <div  class="row-fluid">
                    <div class="deskHomeLeft col-sm-4 col-md-4 col-lg-4 text-center">
                        <div class="SecondHeadSideLines">
                            <div class="SecondHeadSideline">
                            </div>
                        </div>
                    </div>
                    <div class="deskHomeCent col-sm-4 col-md-4 col-lg-4 text-center">
                        <div class="SecondHeadSide">
                            <p>PHOTOS</p>
                        </div>
                    </div>
                    <div class="deskHomeRight col-sm-4 col-md-4 col-lg-4 text-center">
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
                    <div class="belowTitleNM col-sm-12 col-md-12 col-lg-12 text-center"></div>
                </div>
                <!--**********************************************************************************************-->
                <!--***************************************************SPACE**************************************-->
                <!--**********************************************************************************************-->
                <!--**********************************************************************************************-->
                <!--**********************************************MORE-BELOW**************************************-->
                <!--**********************************************************************************************-->
                <div class="row-fluid">
                    <div class="more col-sm-12 col-md-12 col-lg-12 text-right">
                        <?php
                        // Get the ID of a given category
                        $category_id3 = get_cat_ID( 'photos' );
                        // Get the URL of this category
                        $category_link3 = get_category_link( $category_id3);
                        ?>
                        <!-- Print a link to this category -->
                        <a href="<?php echo esc_url( $category_link3 ); ?>">MORE >></a>
                    </div>
                </div>
                <!--**********************************************************************************************-->
                <!--**********************************************MORE-ABOVE**************************************-->
                <!--**********************************************************************************************-->
                <!--**********************************************************************************************-->
                <!--***************************************************SPACE**************************************-->
                <!--**********************************************************************************************-->
                <div class="row-fluid">
                    <div class="belowMore col-sm-12 col-md-12 col-lg-12 text-center"></div>
                </div>
                <!--**********************************************************************************************-->
                <!--***************************************************SPACE**************************************-->
                <!--**********************************************************************************************-->
                <!--**********************************************************************************************-->
                <!--**********************************FEATURES-THUMBNAILS-BELOW***********************************-->
                <!--**********************************************************************************************-->
                <div class="row-fluid">
                    <!--*******************************************************************************************-->
                    <?php $args_des = array(
                        'numberposts' => 3,
                        'category' => $category_id3,
                        'orderby' => 'post_date',
                        'post_type' => 'post');
                    $recent_posts_des = wp_get_recent_posts( $args_des);
                    ?>
                    <div id="colP1" class="col-sm-6 col-md-4 col-lg-4 text-center">




                        <?php
                        $postID = $recent_posts_des[0]["ID"];
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
                    <!--*******************************************************************************************-->
                    <div id="colP2" class="col-sm-6 col-md-4 col-lg-4 text-center">
                        <?php
                        $postID = $recent_posts_des[1]["ID"];
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
                                    <div class="secondTitle featuredTitle">
                                        <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--****************************************SPACE-SM*******************************************-->
                    <div class="after2 hidden-xm visible-sm hidden-md hidden-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space after 2 (52)--></div>
                    <!--*******************************************************************************************-->
                    <div id="colP3" class="hidden-sm col-sm-6 col-md-4 col-lg-4 text-center"><?php
                        $postID = $recent_posts_des[2]["ID"];
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
                                    <div class="secondTitle featuredTitle">
                                        <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--****************************************SPACE-LG*******************************************-->
                    <div class="after3 hidden-xm hidden-sm visible-md visible-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space after 3--></div>
                    <!--*******************************************************************************************-->
                    <!--**********************************************************************************************-->
                    <!--********************************************TITLE-LINE-BELOW**********************************-->
                    <!--**********************************************************************************************-->
                    <div  class="row-fluid">
                        <div class="deskHomeLeft col-sm-4 col-md-4 col-lg-4 text-center">
                            <div class="SecondHeadSideLines">
                                <div class="SecondHeadSideline">
                                </div>
                            </div>
                        </div>
                        <div class="deskHomeCent col-sm-4 col-md-4 col-lg-4 text-center">
                            <div class="SecondHeadSide">
                                <p>VIDEOS</p>
                            </div>
                        </div>
                        <div class="deskHomeRight col-sm-4 col-md-4 col-lg-4 text-center">
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
                        <div class="belowTitleNM col-sm-12 col-md-12 col-lg-12 text-center"></div>
                    </div>
                    <!--**********************************************************************************************-->
                    <!--***************************************************SPACE**************************************-->
                    <!--**********************************************************************************************-->
                    <!--**********************************************************************************************-->
                    <!--**********************************************MORE-BELOW**************************************-->
                    <!--**********************************************************************************************-->
                    <div class="row-fluid">
                        <div class="more col-sm-12 col-md-12 col-lg-12 text-right">
                            <?php
                            // Get the ID of a given category
                            $category_id4 = get_cat_ID( 'videos' );
                            // Get the URL of this category
                            $category_link4 = get_category_link( $category_id4 );
                            ?>
                            <!-- Print a link to this category -->
                            <a href="<?php echo esc_url( $category_link4 ); ?>">MORE >></a>
                        </div>
                    </div>
                    <!--**********************************************************************************************-->
                    <!--**********************************************MORE-ABOVE**************************************-->
                    <!--**********************************************************************************************-->
                    <!--**********************************************************************************************-->
                    <!--***************************************************SPACE**************************************-->
                    <!--**********************************************************************************************-->
                    <div class="row-fluid">
                        <div class="belowMore col-sm-12 col-md-12 col-lg-12 text-center"></div>
                    </div>
                    <!--**********************************************************************************************-->
                    <!--***************************************************SPACE**************************************-->
                    <!--**********************************************************************************************-->
                    <!--**********************************************************************************************-->
                    <!--**********************************FEATURES-THUMBNAILS-BELOW***********************************-->
                    <!--**********************************************************************************************-->
                    <div class="row-fluid">
                        <!--*******************************************************************************************-->
                        <?php $args_des = array(
                            'numberposts' => 3,
                            'category' => $category_id4,
                            'orderby' => 'post_date',
                            'post_type' => 'post');
                        $recent_posts_des = wp_get_recent_posts( $args_des);
                        ?>
                        <div id="colP1" class="col-sm-6 col-md-4 col-lg-4 text-center">
                            <?php
                            $postID = $recent_posts_des[0]["ID"];
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
                        <!--*******************************************************************************************-->
                        <div id="colP2" class="col-sm-6 col-md-4 col-lg-4 text-center">
                            <?php
                            $postID = $recent_posts_des[1]["ID"];
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
                                        <div class="secondTitle featuredTitle">
                                            <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--****************************************SPACE-SM*******************************************-->
                        <div class="after2 hidden-xm visible-sm hidden-md hidden-lg col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><!--space after 2 (52)--></div>
                        <!--*******************************************************************************************-->
                        <div id="colP3" class="hidden-sm col-sm-6 col-md-4 col-lg-4 text-center"><?php
                            $postID = $recent_posts_des[2]["ID"];
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
                                        <div class="secondTitle featuredTitle">
                                            <?php echo get_the_date( ('F  Y') , $postID ); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--******************************************************************************************-->
                    </div>
                    <!--**********************************************************************************************-->
                    <!--**********************************FEATURES-THUMBNAILS-ABOVE***********************************-->
                    <!--**********************************************************************************************-->
                </div>
            </div>
        </div>
    </div>
    <!--))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))TABLET+DESKTOP-VERSION--ABOVE)))))))))))))))))))-->

    <!--)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))MOBILE-VERSION-BELOW)))))))))))))))))))-->
    <div class="mobiles">
        <!--**********************************************************************************************-->
        <!--********************************************TITLE-LINE-BELOW**********************************-->
        <!--**********************************************************************************************-->
        <div  class="row-fluid">
            <div class="deskHomeLeft col-xs-3 text-center">
                <div class="SecondHeadSideLines">
                    <div class="SecondHeadSideline">
                    </div>
                </div>
            </div>
            <div class="deskHomeCent col-xs-6 text-center">
                <div class="SecondHeadSide">
                    ALL CATEGORIES
                </div>
            </div>
            <div class="deskHomeRight col-xs-3 text-center">
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
            <div class="belowTitle col-xs-12 text-center"></div>
        </div>
        <!--**********************************************************************************************-->
        <!--***************************************************SPACE**************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************************************************************************-->
        <!--**********************************FEATURES-THUMBNAILS-BELOW***********************************-->
        <!--**********************************************************************************************-->
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        <?php
        // the query to set the posts per page to 6
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'orderby'   => 'date',
            'order'     => 'DESC',
            'paged' => $paged
        );
        $cpt_query = new WP_Query($args);
        $loopCont=1;
        ?>
        <div class="row-fluid">
            <?php if ( $cpt_query->have_posts() ) :  while ( $cpt_query->have_posts() ) : $cpt_query->the_post(); ?>

                <?php  $postID = get_the_ID();
                $postPermalink = get_permalink($postID);
                $thumbID = get_post_thumbnail_id($postID);
                $thumbURL = wp_get_attachment_url($thumbID);
                $thumbURLLocal = explode('/',$thumbURL,4);?>
                <!--*******************************************************************************************-->
                <div class="col-xs-1">
                </div>
                <div class="col-xs-10 text-center">
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
                <?php if ($loopCont<6) {?>
                    <!--*******************************************************************************************-->
                    <div class="space20px col-xs-12 text-center"><!--space20px--></div>
                    <!--***********************************************************************************************-->
                <?php }?>
                <?php $loopCont=$loopCont+1;?>
            <?php endwhile; ?>
            <?php else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif;
            wp_reset_query();
            ?>
        </div>
        <!--**********************************************************************************************-->
        <!--**********************************FEATURES-THUMBNAILS-ABOVE***********************************-->
        <!--**********************************************************************************************-->
    </div>
    <!--)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))MOBILE-VERSION-ABOVE)))))))))))))))))))-->

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
    <div class="mobiles row-fluid">
        <div id="pages" class=" col-xs-12 text-center">
            <div id="pagesContainer">
                <div><?php
                    $totalNumPages=$cpt_query->max_num_pages;
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
    <div class="mobiles row-fluid">
        <div id="redLineSpace" class="col-xs-12 text-center">

        </div>
    </div>
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
                <a href="<?php bloginfo('siteurl'); ?>">BACK TO INDEX</a><span>&nbsp;|&nbsp;</span><a href="#top">BACK TO TOP</a>
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