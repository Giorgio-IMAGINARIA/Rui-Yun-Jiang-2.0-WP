<?php
/**
 * Created by PhpStorm.
 * User: giorgiomazzei
 * Date: 05/03/15
 * Time: 17:42
 */
add_theme_support( 'post-thumbnails' );

wp_register_script( 'general-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js' );

// Enqueue personal javascript:
wp_enqueue_script( 'general-bootstrap' );

//HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
//WARNING: Respond.js doesn't work if you view the page via file:// -->
add_action( 'wp_enqueue_scripts', 'bootstrap_script' );
add_action( 'wp_enqueue_scripts', 'html5shiv_script' );
add_action( 'wp_enqueue_scripts', 'respond_script' );
add_action( 'wp_enqueue_scripts', 'jquery_script' );


//Include all compiled plugins (below), or include individual files as needed
function bootstrap_script()
{
// Register general bootstrap:
//<!--[if lt IE 9]>
//<![endif]-->
}

//html5shiv
function html5shiv_script()
{
    // Register html5shiv script:
    wp_register_script( 'html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js' );
    // Enqueue html5shiv script:
    wp_enqueue_script( 'html5shiv' );
}

//respond
function respond_script()
{
    // Register respond script:
    wp_register_script( 'respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js' );
    // Enqueue respond script:
    wp_enqueue_script( 'respond' );
}

//jQuery (necessary for Bootstrap's JavaScript plugins)
function jquery_script()
{
    // Enqueue jquery script:
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
}






add_action('pre_get_posts', 'changePPP', 1 );
function changePPP(&$query) {

    //Before anything else, make sure this is the right query...
    if ( ! $query->is_category()  ) {
        return;
    }

    //First, define your desired offset (PPP in the first page - PPP in the others pages)
    $offset = 1;

    //Next, define how many PPP there are in the other pages
     $ppp = 6;

    //Next, detect and handle pagination...
    if ( $query->is_paged ) {

        //Determine page query offset (offset + current page (minus one) x posts per page)
        //to apply to the other pages
        $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

        //Apply page offset and PPP for the other pages
        $query->set('offset', $page_offset);
        $query->set('posts_per_page',6);

    }
    else {

        //Apply PPP for the first page
        $query->set('posts_per_page',7);

    }
}

//add_action('phpmailer_init','send_smtp_email');
//function send_smtp_email( $phpmailer )
//{
    // Define that we are sending with SMTP
   // $phpmailer->isSMTP();

    // The hostname of the mail server
   // $phpmailer->Host = "secure157.inmotionhosting.com";

    // Use SMTP authentication (true|false)
  //  $phpmailer->SMTPAuth = true;

    // SMTP port number - likely to be 25, 465 or 587
  //  $phpmailer->Port = "465";

    // Username to use for SMTP authentication
   // $phpmailer->Username = "info@ruiyun.uk";

    // Password to use for SMTP authentication
  //  $phpmailer->Password = "RuiGiorgio140627";

    // Encryption system to use - ssl or tls
    //$phpmailer->SMTPSecure = "tls";

    //$phpmailer->From = "info@ruiyun.uk";
    //$phpmailer->FromName = "RuiYun";
//}







