<!DOCTYPE html>
<html lang="pt-br">

<head>

<!-- title and meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="MOKAEVENTOS - Sua festa é nossa" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php wp_title(); ?></title>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon">

<!-- css -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<link rel='stylesheet' id='style'  href='<?php echo get_stylesheet_directory_uri();?>/style.css?v=1.0.0' type='text/css' media='all' />

<!-- js -->
<script src="/assets/js/jquery-1.9.1.min.js"></script>
<script src="/assetsjs/modernizr.custom.js"></script>
<script>
    $(document).ready(function(){
        $("#nav-mobile").html($("#nav-main").html());
        $("#nav-trigger span").click(function(){
            if ($("nav#nav-mobile ul").hasClass("expanded")) {
                $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(this).removeClass("open");
            } else {
                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                $(this).addClass("open");
            }
        });
    });
</script>


</head>



<body>

<div id="wrapper">

<div id="top-bar">
    <div class="container clearfix">
        <span class="all-labs"><a href="http://www.callmenick.com/labs">&larr; all labs 
        </a></span>
        <span class="back-to-tutorial"><a href="http://www.callmenick.com/labs/simple-responsive-navigation-menu">back to the tutorial</a></span>
    </div>
</div><!-- /#top-bar -->

<header>
    <div id="title" class="container">
        <h1>Simple Responsive Navigation Menu</h1>
        <h2>A Navigation Menu That Responds to Screen Size</h2>
    </div>
</header><!-- /header -->


<div id="main">
    <div class="container">
        <div id="nav-trigger">
            <span>Menu</span>
        </div>
        <nav id="nav-main">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Tutorials</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <nav id="nav-mobile"></nav>

        <section>
            <h1>Hello World</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
    </div>
</div><!-- #main -->


<footer>
</footer><!-- /footer -->



</div><!-- /#wrapper -->


</body>
</html>
