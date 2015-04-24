<?php
/*
Template Name: Search Page
*/
?>

<?php get_header( 'general' ); ?>

<style>
    <?php include 'search.css'; ?>
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
            <p>SEARCH</p>
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

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query_string_array= explode("&", $query_string);
$query_split_equal = explode("=", $query_string_array[0]);
$query_split_space = explode("%20", $query_split_equal[1]);
$keyword = implode(" ", $query_split_space);

$search_query = array(
    's' => $keyword,
    'post_type' => 'post',
    'posts_per_page' => '6',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'paged' => $paged
);

$search = new WP_Query($search_query);
?>


<!--<h1>Keyword: <?php echo $keyword; ?></h1>
<h1>Total number of pages: <?php echo $search->max_num_pages; ?></h1>
<h1>Total number of posts for this query: <?php echo $search->found_posts; ?></h1>
<h1>Number of posts for this page: <?php echo $search->post_count; ?></h1>
<h1>Page number: <?php echo $paged; ?></h1>-->




<?php $loopCont=1;?>
<?php if ( $search ->have_posts() ) : while ( $search->have_posts() ) : $search->the_post(); ?>

    <div class="desktops"><!--****************************************DESKTOPS***************************************************************************-->
        <div class="row-fluid">


            <?php if (($loopCont==1)||($loopCont==4)) {
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
            }?>

        </div>
    </div><!--****************************************DESKTOPS******************************************************************************************-->
    <!--***************************************************************************************************************************************************-->
    <!--****************************************************BETWEEN DESKTOPS AND TABLETS+MOBILES***********************************************************-->
    <!--***************************************************************************************************************************************************-->
    <div class="tablets"><!--****************************TABLETS******************************************************************************-->
        <div class="row-fluid">


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
    <script>
        alert('No posts found');
        window.history.go(-1);
    </script>
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
<!--<h1>Keyword: <?php echo $keyword; ?></h1>
<h1>Total number of pages: <?php echo $search->max_num_pages; ?></h1>
<h1>Total number of posts for this query: <?php echo $search->found_posts; ?></h1>
<h1>Number of posts for this page: <?php echo $search->post_count; ?></h1>
<h1>Page number: <?php echo $paged; ?></h1>-->


<div class="row-fluid">
    <div id="pages" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="pagesContainer">
            <div><?php
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
                    'total' => $search->max_num_pages
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
    <?php if  ($search->max_num_pages != 1){?>
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








