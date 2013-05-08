<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Iron Man rocks!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link href="/js/bootstrap/2.3.0/docs/assets/css/bootstrap.css" rel="stylesheet">
        <link href="/ironman/css/main.css" rel="stylesheet">

        <!-- only load flex slider if we are on the home page -->
        <?php if ($ctrl == ''): ?>
            <link href="/js/flexslider/current/flexslider.css" rel="stylesheet">
            <link href="/ironman/css/flex.css" rel="stylesheet">
        <? endif; ?>

        <script src="/js/jquery/jquery.min.js"></script>
        <script src="/js/bootstrap/2.3.0/docs/assets/js/bootstrap-tooltip.js"></script>
        <script src="/js/bootstrap/2.3.0/docs/assets/js/bootstrap-tooltip.js"></script>
        <script src="/js/bootstrap/2.3.0/docs/assets/js/bootstrap-popover.js"></script>
        <script src="/js/bootstrap/2.3.0/docs/assets/js/bootstrap-dropdown.js"></script>

        <!-- only load flex slider if we are on the home page -->
        <?php if ($ctrl == ''): ?>
            <script src="/js/flexslider/current/jquery.flexslider-min.js"></script>
        <? endif; ?>

        <style>
            html {
                height: 100%;
            }
            body {
                padding-top: 60px;
                padding-bottom: 40px;
                background-color: #442525;
                /* FF and Chrome */
                background: linear-gradient(to bottom, #ff3236 0%,#442525 100%);
                /* IE */
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3236', endColorstr='#442525');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;

                height: 100%;

            }
            
            .container {
                position: relative;
            }
            
            .nav li {
                padding-top: 5px;
            }
            .leaderboard {
                padding: 60px;
                margin-bottom: 30px;
                background-repeat:repeat;
                -webkit-border-radius: 6px;
                -moz-border-radius: 6px;
                border-radius: 6px;
            }
            .leaderboard h1 {
                font-size: 40px;
                margin-bottom: 5px;
                line-height: 1;
                letter-spacing: -1px;
                color: red;
            }
            .leaderboard p {
                font-size: 18px;
                font-weight: 200;
                line-height: 27px;
            }    

            .logo {
                height: 50px;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li><a href="/ironman/" style="padding: 0;"><img src="/ironman/img/logo.png" class="logo"></a></li>
                        <li <?php echo ($ctrl == '') ? $activeMenuItem : ''; ?>><a href="/ironman/">Home</a></li>
                        <li <?php echo ($ctrl == 'characters') ? $activeMenuItem : ''; ?>><a href="/ironman/characters/">Characters</a></li>
                        <li <?php echo ($ctrl == 'armor') ? $activeMenuItem : ''; ?>><a href="/ironman/armor/">Armor</a></li>
                        <li <?php echo ($ctrl == 'movies') ? $activeMenuItem : ''; ?>><a href="/ironman/movies/">Movies</a></li>
                    </ul>
                </div>
            </div>
        </div>
