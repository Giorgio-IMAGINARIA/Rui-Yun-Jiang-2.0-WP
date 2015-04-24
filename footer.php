<!--**********************************************************************************************-->
<!--**************************************SPACE-BEFORE-SEARCH-LINE********************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div id="beforeSearch" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
</div>
<!--**********************************************************************************************-->
<!--**************************************SPACE-BEFORE-SEARCH-LINE********************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--***************************************SEARCH-LINES-BELOW*************************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div id="lineStickLeftCol" class="col-xs-1 col-sm-4 col-md-4 col-lg-4 text-center">
        <div class="hidden-xs searchLineCont">
            <div class="boxSearchLine">
            </div>
        </div>
    </div>






    <div id="searchStickCentralCol" class="col-xs-10 col-sm-4 col-md-4 col-lg-4 text-center">
        <div class="boxSearch" role="search">

    <form role="search" method="get"  action="<?php echo home_url( '/' ); ?>">
        <div id="colSearchButton" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
        <input id="searchButton" type="submit"  value="<?php echo esc_attr_x( '', 'submit button' ) ?>" />
        </div>
        <div id="colSearchInput" class=" col-xs-10 col-sm-10 col-md-10 col-lg-10 text-center">
            <input id="searchSite" type="search"  placeholder="<?php echo esc_attr_x( 'search this site …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </div>
    </form>

        </div>

    </div>


    <div id="lineStickRightCol" class="col-xs-1 col-sm-4 col-md-4 col-lg-4 text-center">
        <div class="hidden-xs searchLineCont">
            <div class="boxSearchLine">
            </div>
        </div>
    </div>
<!--
    <div id="lineStickLeftCol" class="col-xs-1 col-sm-4 col-md-4 col-lg-4 text-center">
        <div class="hidden-xs searchLineCont">
            <div class="boxSearchLine">
            </div>
        </div>
    </div>

    <div id="searchStickCentralCol" class="col-xs-10 col-sm-4 col-md-4 col-lg-4 text-center">
        <div class="boxSearch" role="search">

            <div id="colSearchButton" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                <button id="searchButton" type="button" onclick="resetSearchForm()"></button>
            </div>

            <div id="colSearchInput" class=" col-xs-10 col-sm-10 col-md-10 col-lg-10 text-center">
                <input id="searchSite" type="text" value="" placeholder="search this site ..." onclick="clickSearch()" onkeyup="searchConfirmation(event)" />
            </div>
        </div>
    </div>

    <div id="lineStickRightCol" class="col-xs-1 col-sm-4 col-md-4 col-lg-4 text-center">
        <div class="hidden-xs searchLineCont">
            <div class="boxSearchLine">
            </div>
        </div>
    </div>-->
</div>
<!--**********************************************************************************************-->
<!--***************************************SEARCH-LINES-ABOVE*************************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--**************************************SPACE-BETWEEN-SEARCH-SOCIAL*****************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div id="betweenSearchSocial" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
</div>
<!--**********************************************************************************************-->
<!--**************************************SPACE-BETWEEN-SEARCH-SOCIAL*****************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--***************************************SOCIAL-LINES-BELOW*************************************-->
<!--**********************************************************************************************-->
<div class="noExtraSmall row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="socialContainer">
            <a href="#">
                <div id="beh" class="fullSpaceIcon"></div>
            </a>
            <div class="fullSpaceLine"></div>
            <a href="#">
                <div id="dribble" class="fullSpaceIcon "></div>
            </a>
            <div class="fullSpaceLine"></div>
            <a href="#">
                <div id="linkedIn" class="fullSpaceIcon"></div>
            </a>
            <div class="fullSpaceLine"></div>
            <a href="#">
                <div id="twitter" class="fullSpaceIcon"></div>
            </a>
            <div class="fullSpaceLine"> </div>
            <a href="#">
                <div id="ins" class="fullSpaceIcon"></div>
            </a>
        </div>
    </div>
</div>
<div class="extraSmall row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="connectedContainer">
            <div id="rssBox">
                <div id="rssPic" class="contactPic">&#8203;</div>
            </div>
            <div id="rssSpace">

            </div>
            <div id="rssMessBox">
                <a href="#" id="rssLink">STAY CONNECTED</a>
            </div>
        </div>
    </div>
</div>
<!--**********************************************************************************************-->
<!--***************************************SOCIAL-LINES-ABOVE*************************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--**************************************SPACE-BETWEEN-SOCIAL-MAIL*******************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div id="betweenSocialMail" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
</div>
<!--**********************************************************************************************-->
<!--**************************************SPACE-BETWEEN-SOCIAL-MAIL*******************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--***********************************************MAIL-BELOW*************************************-->
<!--**********************************************************************************************-->
<div class="noExtraSmall row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="contactLine">
            <div id="envelopeBox" class="contactBox">
                <div id="envelopepic" class="contactPic">&#8203;</div>
            </div>
            <div id="mailAddressBox" class="contactBox1">
                <a href="mailto:info@ruiyun.uk" id="ruiMail" class="contactContent">INFO&#64;RUIYUN.UK</a>
            </div>
            <div id="contactSpace">

            </div>
            <div id="phoneBox" class="contactBox">
                <div id="phonepic" class="contactPic">&#8203;</div>
            </div>
            <div id="phoneNumberBox" class="contactBox1">
                <a href="tel:+447538113586" id="ruiPhone" class="contactContent">+(44)&nbsp;7538113586</a>
            </div>
        </div>
    </div>
</div>

<div class="extraSmall row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="contactLinexs1">
            <div id="envelopeBoxxs">
                <div id="envelopepicxs">&#8203;</div>
            </div>
            <div id="mailSpacexs">

            </div>
            <div id="mailAddressBoxxs">
                <a href="mailto:info@ruiyun.uk" id="ruiMailxs">INFO&#64;RUIYUN.UK</a>
            </div>
        </div>
    </div>
</div>
<div class="extrasmall row-fluid">
    <div class="betweenMailCopyright col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
</div>
<div class="extraSmall row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="contactLinexs2">
            <div id="phoneBoxxs">
                <div id="phonepicxs">&#8203;</div>
            </div>
            <div id="phoneSpacexs">

            </div>
            <div id="phoneNumberBoxxs">
                <a href="tel:+447538113586" id="ruiPhonexs">+(44)&nbsp;7538113586</a>
            </div>
        </div>
    </div>
</div>
<!--**********************************************************************************************-->
<!--***********************************************MAIL-ABOVE*************************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--**************************************SPACE-BETWEEN-MAIL-COPYRIGHT****************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div class="betweenMailCopyright col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
</div>
<!--**********************************************************************************************-->
<!--**************************************SPACE-BETWEEN-MAIL-COPYRIGHT****************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--******************************************COPYRIGHT-BELOW*************************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="copyrightline">
            <div class="boxCopyright">
                <span>&copy; COPYRIGHT </span><span class="noExtraSmall">&amp; DESIGNED BY </span><a class="nameLink" href="<?php bloginfo('siteurl'); ?>">RUI YUN JIANG</a><span> 2014</span>
            </div>
        </div>
    </div>
</div>
<!--**********************************************************************************************-->
<!--******************************************COPYRIGHT-ABOVE*************************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--********************************SPACE-BETWEEN-COPYRIGHT-DEVELOPMENT***************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div id="betweenCopyrightDevelopment" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
</div>
<!--**********************************************************************************************-->
<!--********************************SPACE-BETWEEN-COPYRIGHT-DEVELOPMENT***************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--****************************************DEVELOPMENT-BELOW*************************************-->
<!--**********************************************************************************************-->
<div class="noExtraSmall row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="developmentLine">
            <div class="boxDevelopment">
                <span>DEVELOPED BY </span><a class="nameLink" target="_blank" href="http://www.imaginaria.london/">IMAGINARIA.LONDON</a>
            </div>
        </div>
    </div>
</div>
<div class="extrasmall row-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <div id="developmentLinexs">
            <div class="boxDevelopment">
                <span>DEVELOPED BY </span><a class="nameLink" target="_blank" href="http://www.imaginaria.london/">IMAGINARIA</a>
            </div>
        </div>
    </div>
</div>
<!--**********************************************************************************************-->
<!--****************************************DEVELOPMENT-ABOVE*************************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--******************************SPACE-BETWEEN-DEVELOPMENT-LOGO-BOTTOM***************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div id="betweenDevelopmentLogoBottom" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"></div>
</div>
<!--**********************************************************************************************-->
<!--********************************SPACE-BETWEEN-COPYRIGHT-LOGO-BOTTOM***************************-->
<!--**********************************************************************************************-->
<!--**********************************************************************************************-->
<!--****************************************LOGO-BOTTOM-BELOW*************************************-->
<!--**********************************************************************************************-->
<div class="row-fluid">
    <div class="hidden-xs col-sm-12 col-md-12 col-lg-12 text-center">
        <div class="boxLogoBottom">
        </div>
    </div>
</div>
<!--**********************************************************************************************-->
<!--****************************************LOGO-BOTTOM-ABOVE*************************************-->
<!--**********************************************************************************************-->
</div> <!--my-fluid-container-->
</div><!--main-->
<!--script src="personal-jquery/effects.js" type="text/javascript"></script>-->
<?php wp_footer(); ?>
</body>
</html>