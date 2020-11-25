<?php include("../includeHTML/auth_pages.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Jan Urbaś">
<meta name="description" content="News from Azeroth">
<meta name="keywords" content="world of warcraft,wow,prepatch,shadowlands,news,warcraft,frostmourne,sword, henry,canvil,transmog,wowhead,release,date,server,population,warrior,paladin,hunter,rogue,priest,shaman,mage,warlock,monk,druid,demon hunter,death knight">
<title>Music - Azeroth Info</title> 
<link rel="shortcut icon" href="/favicon.ico">
<link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
<link rel="icon" type="image/png" sizes="196x196" href="/favicon-192.png">
<link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
<link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
<link rel="apple-touch-icon" href="/favicon-57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon-60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon-180.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="/favicon-144.png">
<meta name="msapplication-config" content="/browserconfig.xml">
<!-- OG TAGS -->
<meta property="og:title" content="Music - Azeroth Info" />
<meta property="og:type" content="article" />
<meta property="og:image" content="../img/logo.png" />
<!-- STYLES -->
<link rel="stylesheet" href="../css/fonts.css">
<link rel="stylesheet" href="../css/pages/main_pages.css">
<link rel="stylesheet" media="screen and (min-width:576px)" href="../css/pages/small_pages.css">
<link rel="stylesheet" media="screen and (min-width:768px)" href="../css/pages/medium_pages.css">
<style>
    .menu-link-music {display: none!important;}
    .main-section-others #articleOthers1 .article {
        background-image: url('../img/pages/music/illidan.jpg');
    }

    .main-section-others #articleOthers2 .article {
        background-image: url('../img/pages/music/arthas.jpg');
    }

    .main-section-others #articleOthers3 .article {
        background-image: url('../img/pages/music/nightelf.jpg');
    }
    #menu-input-show_others:hover + .menu-links_others {
        height: 21vh;
    }
    .menu-links_others:hover {
        height: 21vh;
    }
</style>
<!-- SCRIPTS -->
<script src="https://kit.fontawesome.com/af9a5761ff.js" crossorigin="anonymous"></script>
</head>
<body>
        <nav>
            <div class="menu-nav--desktop">
                <div w3-include-html="../includeHTML/nav-desktop_pages.html"></div>
            </div>
            <div class="menu-nav--mobile pos-asbolute">
                <div w3-include-html="../includeHTML/nav-mobile_pages.html"></div>
            </div>
        </nav>
    <main>
        <!-- DISPLAYED -->
        <section class="main-section-displayed">
            <div class="underline">
                <h2>Music</h2>
                <div class="line"></div>
            </div>
            <article id="article1" class="section-article-displayed">
                <h3>Azeroth's Last Hope</h3>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/i4vK3-1o_3E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
            <article id="article2" class="section-article-displayed">
                <h3>Athas - My Son</h3>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/3m51oKG3BKA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
            <article id="article3" class="section-article-displayed">
                <h3>Nightsong Extended</h3>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/7G6FfKXvZX8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </article>
        </section>
        <!-- OTHERS -->
        <section class="main-section-others">
            <div class="underline">
                <h2>Other Articles</h2>
                <div class="line"></div>
            </div>
            <article id="articleOthers1" class="section-article-others">
            <div class="article">
                <div class="article-text">
                    <h3>Last Hope</h3>
                </div>
                <div class="hero-bg"></div>
            </div>
            </article>
            <article id="articleOthers2" class="section-article-others">
                <div class="article">
                    <div class="article-text">
                        <h3>My Son</h3>
                    </div>
                    <div class="hero-bg"></div>
                </div>
            </article>
            <article id="articleOthers3" class="section-article-others">
                <div class="article">
                    <div class="article-text">
                        <h3>Nightsong</h3>
                    </div>
                    <div class="hero-bg"></div>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <div w3-include-html="../includeHTML/footer_pages.html"></div>
    </footer>
    <script src="../js/redirectArticle.js"></script>
    <script src="../js/articleSwap.js"></script>
    <script src="../js/includeHTML.js"></script>
    <script>
        includeHTML();
        swapArticle();
        firstArticle();
    </script>
</body>
</html>