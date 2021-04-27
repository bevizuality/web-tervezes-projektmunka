<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Molnár Dóra és Beviz Zoltán" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Web Vision | Blog</title>

    <link rel="icon" href="../images/favicon.png" />

    <!-- Import sylesheets -->
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/blog.css" />
    <link rel="stylesheet" href="../css/footer.css" />

    <!-- Import fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page">
        <header>
            <nav>
                <a class="navbar-brand" href="../index.php"></a>
                <div id="main-menu">
                    <div class="mobile-menu"></div>
                    <ul class="menu">
                        <li>
                            <a href="../index.php">Kezdőlap</a>
                        </li>
                        <li>
                            <a href="about.php">Rólunk</a>
                        </li>
                        <li class="active">
                            <a href="blog-posts.php">Blog</a>
                        </li>
                        <li>
                            <a href="career.php">Karrier</a>
                        </li>
                        <li>
                            <a href="log-in.php">Bejelentkezés</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="content">
                    <div class="post-wrapper">
                        <blockquote cite="https://www.usernet.hu/">
                            <img src="../images/blog1.jpg" alt="UX illusztráció">
                            <h5>Mi az a UX Design és mit kell tudni róla?</h5>
                            <p>A UX Design olyan termékek létrehozásának folyamata, amelyek a hasznosságon túl személyes élményt is nyújtanak használóiknak. Az UX Design-ba beletartozik a termék ...</p>
                        </blockquote>
                        <a href="blog-post.php">Tovább</a>
                    </div>
                    <div class="post-wrapper">
                        <blockquote cite="https://www.usernet.hu/">
                            <img src="../images/blog1.jpg" alt="UX illusztráció">
                            <h5>Webshop UX audit a magasabb konverzióért és a több bevételért</h5>
                            <p>Az UX audit egy diagnosztikai eljárás, amely a weboldalak és webshopok megjelenésének és működésének hibáit segít felderíteni ezzel biztosítva a magasabb konverzió ...</p>
                        </blockquote>
                        <a href="blog-post.php">Tovább</a>
                    </div>
                    <div class="post-wrapper">
                        <blockquote cite="https://www.usernet.hu/">
                            <img src="../images/blog2.jpg" alt="UX illusztráció">
                            <h5>Weboldal UX audit a magasabb konverziók érdekében</h5>
                            <p>Nem vagy elégedett weboldalad teljesítményével? Úgy érzed valamin változtatni kellene, de nem tudod pontosan min? Az UX auditot neked találták ki. Rávilágít weboldalad ...</p>
                        </blockquote>
                        <a href="blog-post.php">Tovább</a>
                    </div>
                </div>
                <aside>
                    <h6>Kategóriák</h6>
                    <ul>
                        <li><a class="active" href="blog-posts.php">Webdesign</a></li>
                        <li><a href="blog-posts.php">Webfejlesztés</a></li>
                        <li><a href="blog-posts.php">SEO</a></li>
                        <li><a href="blog-posts.php">Tanfolyamok</a></li>
                        <li><a href="blog-posts.php">Webáruházak</a></li>
                    </ul>
                    <div class="ad-banner">
                        <p>Hirdetés</p>
                        <img id="ad-banner" src="../images/ad-banner.jpg" alt="Hirdetés">
                    </div>
                </aside>
            </div>
        </main>
        <?php include "footer.php" ?>
    </div>
</body>
</html>