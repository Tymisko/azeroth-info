<?php include("auth.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Jan Urbaś">
<meta name="description" content="News from Azeroth">
<meta name="keywords" content="world of warcraft,wow,prepatch,shadowlands,news,warcraft,frostmourne,sword, henry,canvil,transmog,wowhead,release,date,server,population,warrior,paladin,hunter,rogue,priest,shaman,mage,warlock,monk,druid,demon hunter,death knight">
<title>Azeroth Info</title> 
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
<meta property="og:title" content="Azeroth Info" />
<meta property="og:type" content="article" />
<meta property="og:description" content="News From Azeroth!" />
<meta property="og:image" content="../img/logo.png" />
<!-- STYLES -->
<link rel="stylesheet" href="css/main-site/animations.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/main-site/main.css">
<link rel="stylesheet" media="screen and (min-width:576px)" href="css/main-site/small.css">
<link rel="stylesheet" media="screen and (min-width:768px)" href="css/main-site/medium.css">
<link rel="stylesheet" media="screen and (min-width:992px)" href="css/main-site/large.css">
<!-- SCRIPTS -->
<script src="https://kit.fontawesome.com/af9a5761ff.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="header-img">
            <a href="#main">
                <img class="header-logo header-content" src="img/logo.png" alt="logo Azeroth Info">
                <img class="header-subtitle header-content" src="img/header/news-from-azeroth.png" alt="News From Azeroth">
                <div class="header-bg"></div>
            </a>
        </div>
    </header>
        <nav>
            <div class="menu-nav--desktop">
                <a href="#"><img class="menu-logo pos-asbolute" src="img/logo.png" alt="logo Azeroth Info"></a>
                <ul class="menu-links">
                    <li><a href="pages/news.php" class="menu-link--desktop">News</a></li>
                    <li><a href="pages/world.php" class="menu-link--desktop">World</a></li>
                    <li><a href="pages/travel.php" class="menu-link--desktop">Travel</a></li>
                    <li><a href="pages/style.php" class="menu-link--desktop">Style</a></li>
                    <li>
                        <label id="menu-p--others" for="menu-input-show_others">Others</label>
                        <input type="checkbox" id="menu-input-show_others">
                        <div class="menu-links_others">
                            <a href="pages/health.php">Health</a>
                            <a href="pages/business.php">Business</a>
                            <a href="pages/videos.php">Videos</a>
                            <a href="pages/music.php">Music</a>
                            <a href="pages/weather.php">Weather</a>
                        </div>
                    </li>
                </ul>
                <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo "<div class='menu-login-logged'>
                        <div class='menu-login-relative'>
                            <a href='logout.php' class='menu-btn-sign menu-sign-out'>Log Out</a>
                            <a href='del-acc.php' class='menu-btn-sign menu-del-account'>DEL Account</a>
                        </div>
                    </div>";
                    }else {echo"
                    <div class='menu-login'>
                        <div class='menu-login-relative'>
                            <a href='register.php' class='menu-btn-sign menu-sign-up'>Sign UP</a>
                            <a href='login.php' class='menu-btn-sign menu-sign-in'>Sign IN</a>   
                        </div>
                    </div>";
                    }
                ?>
            </div>
            <div class="menu-nav--mobile pos-asbolute">
                <img class="menu-logo pos-asbolute" src="img/logo.png" alt="logo Azeroth Info">
                <!-- ACCOUNT -->
                <span class="btn-a--account pos-asbolute"><label for="menu-account_show" class="fas fa-user-circle"></label></span>
                <input type="checkbox" id="menu-account_show">
                <div id="menu-nav-account">
                    <ul class="menu-nav-account">
                        <li class="account-link">Logout</li>
                        <li class="account-link">DEL Account</li>
                    </ul>
                </div>
                <!-- HAMBURGER MENU -->
                <span id="btn-a--hamburger" class="pos-asbolute"><label for="menu-input_show" class="fas fa-bars"></label></span>
                <input type="checkbox" id="menu-input_show" />
                <div id="menu-nav-list">
                    <ul class="menu-links">
                        <li><a href="pages/news.php" class="menu-link">News</a></li>
                        <li><a href="pages/world.php" class="menu-link">World</a></li>
                        <li><a href="pages/travel.php" class="menu-link">Travel</a></li>
                        <li><a href="pages/style.php" class="menu-link">Style</a></li>
                        <li><a href="pages/health.php" class="menu-link">Health</a></li>
                        <li><a href="pages/business.php" class="menu-link">Business</a></li>
                        <li><a href="pages/videos.php" class="menu-link">Videos</a></li>
                        <li><a href="pages/music.php" class="menu-link">Music</a></li>
                        <li><a href="pages/weather.php" class="menu-link">Weather</a></li>
                    </ul>
                </div>
            </div>
            <div id="main"></div>
        </nav>
    <main>
        <section class="first-section">
            <div class="underline">
                <h2 class="section-header">Breaking News!</h2>
                <div class="line"></div>
            </div>
            <div class="col-33 left">
                <a href="pages/business.php?article=1"><article class="section-article">
                    <h3>Anduin bought new supplies for the coming war</h3>
                    <img src="img/pages/business/supplies.jpg" alt="Supplies">
                    <p>Azeroth paid a terrible price to end the apocalyptic march of the Legion's crusade. As this age-old conflict reignites, join your allies and champion your faction's cause—Azeroth's future will be forged in the fires of war.</p>
                    <p>Due to the war between the alliance and the horde, Anduin decided to...</p>
                </article></a>
            </div>
            <div class="col-33 middle">
                <a href="pages/health.php?article=2"><article class="section-article">
                    <h3>The Cathedral of Light</h3>
                    <img src="img/pages/health/catedral.jpg" alt="The Cathedral of Light">
                    <p>Only The Cathedral of Light in Stormwind City has...</p>
                </article></a>
                <a href="pages/music.php?article=3"><article class="section-article">
                    <h3>Nightsong Extended</h3>
                    <img src="img/pages/music/nightelf.jpg" alt="Nightsong">
                    <p>World of Warcraft - Nightsong - introduced in Cataclysm.<br>Vocals done by Laurie Ann Haus.<br>Composer: Neal Acree</p>
                </article></a>
            </div>
            <div class="col-33 right">
                <a href="pages/news.php?article=3"><article class="section-article">
                    <h3>Ruler of The Maw</h3>
                    <img src="img/pages/news/WoW-Shadowlands-Surprise-Cinematic.jpg" alt="Jailor">
                    <p>Sylvanas Windrunner allied with the Jailer after the events of Edge of Night, and the two have been working toward a common end for some time. As she fed the Maw with new souls, both she and the Jailer have grown more powerful.</p>
                    <p>Zovaal better known as the Jailer, is one of the Eternal Ones of the Shadowlands. He rules the terrible realm known as...</p>
                </article></a>
            </div>
        </section>
        <section class="second-section">
            <div class="underline">
                <h2 class="section-header">Featured</h2>
                <div class="line"></div>
            </div>
            <div class="featured">
                <a href="pages/style.php?article=2">
                    <article class="section-article">
                        <h3>Anduin In His War Armor</h3>
                        <img src="img/pages/style/WoW_Battle_for_Azeroth_Greymane_and_Anduin.jpg" alt="Anduin Wrynn">
                        <p>Anduin Llane Wrynn is the King of Stormwind, High King of the Alliance, and...</p>
                    </article>
                </a>
                <a href="pages/travel.php?article=3">
                    <article class="section-article">
                        <h3>Drenor's Nagrand</h3>
                        <img src="img/pages/travel/nagrand-dreanor.jpg" alt="Nagrand">
                        <p>Nagrand — orcish for "Land of Winds" — was formerly the homeland of the Frostwolf clan, and the meeting grounds of the orcish people...</p>
                    </article>
                </a>
                <a href="pages/weather.php?article=1">
                    <article class="section-article">
                        <h3>Northrend snow</h3>
                        <img src="img/pages/weather/northrend.jpg" alt="Northrend">
                        <p>As you have seen in the Northrend snows won't stop! It's great time to take your...
                    </article>
                </a>
                <a href="pages/world.php?article=2">
                    <article class="section-article">
                        <h3>The Battle for Azeroth has been resolved!</h3>
                        <img src="img/pages/world/unnamed.jpg" alt=""> 
                        <p>The conflict between the Alliance and the Horde...</p>                  
                    </article>
                </a>
            </div>
        </section>
        <section class="third-section">
            <div class="underline">
                <h2 class="section-header">Watch it!</h2>
                <div class="line"></div>
            </div>
            <div class="left">
                <a href="pages/video.php?article=3">
                    <article class="section-article">
                        <h3>Shadowlands</h3>
                        <div class="video">
                            <img src="img/pages/video/shadowlands.jpg" alt="Shadowlands">
                        </div>
                    </article>
                </a>
                <a href="pages/video.php?article=1">
                    <article class="section-article">
                        <h3>Bastion</h3>
                            <div class="video">
                            <img src="img/pages/video/afterlives.jpg" alt="Bastion">
                        </div>
                    </article>
                </a>
            </div>
            <div class="right">
                <a href="https://www.youtube.com/watch?v=jSJr3dXZfcg&list=PLRxm39aUva_TOUWw-igDU5tofjZyRtZxw" target="_blank">
                    <article class="section-article">
                        <h3>Battle For Azeroth</h3>
                        <div class="video">
                            <img src="img/pages/video/batleforazeroth.jpg" alt="Battle For Azeroth">
                        </div>
                    </article>
                </a>
                <a href="pages/video.php?article=3">
                    <article class="section-article">
                        <h3>Revendreth</h3>
                        <div class="video">
                            <img src="img/pages/video/revendreth.jpg" alt="Revendreth">
                        </div>
                    </article>
                </a>
            </div>
        </section>
    </main>
    <footer>
       <div class="footer-left">
            <div class="footer-left-about_us">
                <h3 class="footer-header">Azeroth Info</h3>
                <p class="footer-left-description">Small group of gamers that is fascinated Warcraft's Universe, decided to create a place, where the news from this world appear.<br><span>Here you are ~ Azeroth Info Team</span></p>
            </div>
            <div class="footer-left-contact">
                <p><i class="fas fa-phone-square"></i> <span>666 777 888</span></p>
                <p><i class="fas fa-envelope-square"></i> <span>info@azeroth.com</span></p>
            </div>
            <div class="footer-left-links">
                <a href="https://www.youtube.com/" class="footer-left-link"><i class="fab fa-youtube-square"></i></a>
                <a href="https://www.facebook.com/" class="footer-left-link"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.reddit.com/" class="footer-left-link"><i class="fab fa-reddit-square"></i></a>
                <a href="https://www.twitch.tv/" class="footer-left-link"><i class="fab fa-twitch"></i></a>
            </div>
        </div>
        <div class="footer-right">
            <h3 class="footer-header">Contact Us</h3>
            <form id="footer-form-contact" action="mailto:azeroth@info.com" method="post">
                <ul>
                    <li><input class="footer-form-element" type="text" placeholder="Name" id="name" name="name"></li>
                    <li><input class="footer-form-element" type="text" placeholder="E-mail" id="email" name="email"></li>
                    <li>
                        <textarea class="footer-form-element" placeholder="Message" id="message" name="message"></textarea>
                    </li>
                    <li><button id="footer-form-button" type="submit">Send</button></li>
                </ul>
            </form>
        </div>
    </footer>
</body>
</html>