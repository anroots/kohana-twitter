<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>QuickThoughts</title>
    <meta name="description" content="Get quick feedback on your design">
    <meta name="author" content="Ando Roots">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="<?=URL::base()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=URL::base()?>assets/css/ui-lightness/jquery-ui-1.8.16.custom.css">

    <script src="<?=URL::base()?>assets/js/libs/modernizr-2.0.min.js"></script>

</head>
<body>
<div id="header-container">
    <header class="wrapper">
        <h1 id="title">
            <a href="<?=URL::base()?>">QuickThoughts On Your Design</a>
        </h1>

    </header>
</div>
<div id="main" class="wrapper">

    <?=Notify::render()?>
    
    <article>
        <?=$content?>
    </article>
</div>
<div id="footer-container">
    <footer class="wrapper">
        <h3>This is just a mockup. Don't expect anything working here.</h3>

        <p><a href="http://ando.roots.ee">ando.roots.ee</a></p>
    </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=URL::base()?>assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
<script src="<?=URL::base()?>assets/js/libs/jquery-ui-1.8.16.custom.min.js"></script>

<script src="<?=URL::base()?>assets/js/script.js"></script>
</body>
</html>
