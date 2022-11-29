<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Welcome to XAMPP</title>

    <meta name="description" content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
    <meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />


</head>

<body class="index">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=277385395761685";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="contain-to-grid">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1><a href="/dashboard/index.html">Apache Friends</a></h1>
                </li>
                <li class="toggle-topbar menu-icon">
                    <a href="#">
                        <span>Menu</span>
                    </a>
                </li>
            </ul>

            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                    <li class="active"><a href="/my-sites.php">My Sites</a></li>
                    <li class=""><a href="/apps">My Apps Folder</a></li>
                    <li class=""><a href="/applications.html">Applications</a></li>
                    <li class=""><a href="/dashboard/faq.html">FAQs</a></li>
                    <li class=""><a href="/dashboard/howto.html">HOW-TO Guides</a></li>
                    <li class=""><a target="_blank" href="/dashboard/phpinfo.php">PHPInfo</a></li>
                    <li class=""><a href="/phpmyadmin/">phpMyAdmin</a></li>
                </ul>
            </section>
        </nav>
    </div>

    <div id="wrapper">
        <div class="hero">
            <div class="row">
                <div class="large-12 columns">
                    <h1><img src="/dashboard/images/xampp-logo.svg" />XAMPP <span>Apache + MariaDB + PHP + Perl</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
                <h2>My Sites</h2>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">

                <!-- VHOST FILE -->
                <?php
                    require('./vhost_file.php');
                ?>
            </div>
        </div>

    </div>

    <footer>
        <div class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-8 columns">
                        <ul class="social">
                            <li class="twitter"><a href="https://twitter.com/apachefriends">Follow us on Twitter</a></li>
                            <li class="facebook"><a href="https://www.facebook.com/we.are.xampp">Like us on Facebook</a></li>
                            <li class="google"><a href="https://plus.google.com/+xampp/posts">Add us to your G+ Circles</a></li>
                        </ul>

                        <ul class="inline-list">
                            <li><a href="https://www.apachefriends.org/blog.html">Blog</a></li>
                            <li><a href="https://www.apachefriends.org/privacy_policy.html">Privacy Policy</a></li>
                            <li>
                                <a target="_blank" href="http://www.fastly.com/"> CDN provided by
                                    <img width="48" data-2x="/dashboard/images/fastly-logo@2x.png" src="/dashboard/images/fastly-logo.png" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="large-4 columns">
                        <p class="text-right">Copyright (c) <?php echo date('Y');?>, Apache Friends</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Libraries -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/dashboard/javascripts/all.js" type="text/javascript"></script>
</body>

</html>