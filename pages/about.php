<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Molnár Dóra és Beviz Zoltán" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Web Vision | Rólunk</title>

    <link rel="icon" href="../images/favicon.png" />

    <!-- Import sylesheets -->
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/footer.css">

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
                        <li class="active">
                            <a href="about.php">Rólunk</a>
                        </li>
                        <li>
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
            <section class="title-wrapper">
                <div class="title">
                    <h1>Rólunk</h1>
                </div>
            </section>
            <section class="history">
                <h2>Történetünk</h2>
                <img  id="html_graf" src="../images/html.png" alt="html-grafika">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet sem laoreet enim egestas ornare. Duis rhoncus, sapien sed maximus maximus, diam quam bibendum diam, a hendrerit lectus est vel odio. Quisque cursus, leo vitae tristique euismod, nunc velit pellentesque risus, eu suscipit dui risus pharetra elit. Praesent tincidunt, dui non hendrerit efficitur, nisl ex tempus felis, id commodo erat justo at justo. Etiam nec tortor nec metus pellentesque congue vitae sit amet nisi.</p>
                <img id ="css_graf" src="../images/css.png" alt="css-grafika">
                <p> Pellentesque rutrum maximus nisi. Praesent a vestibulum mauris, non euismod lectus. Integer quis tortor lorem. Praesent non laoreet eros, a rutrum leo. Vestibulum vehicula suscipit purus non lacinia. Integer id est auctor, interdum justo id, cursus sapien. Pellentesque facilisis ante nec nisl fringilla blandit. Nullam pharetra imperdiet lorem, pretium pellentesque leo pharetra sit amet. Mauris viverra lorem eget erat scelerisque, quis consectetur dui eleifend.</p>
                <div id="map">
                    <iframe 
                        width="425" 
                        height="350" 
                        src="https://www.openstreetmap.org/export/embed.html?bbox=20.118455886840824%2C46.23869293586169%2C20.18420219421387%2C46.27513110872208&amp;layer=mapnik" style="border: 1px solid black">
                    </iframe>
                </div>

            </section>
            <section class="team">
                <h2>Csapatunk</h2>
                <div class="teammates">
                    <div class="teammate">
                        <img class="teammate-img" src="../images/cat1.jpeg" alt="munkatársunk">
                        <h3>Valaki Egy</h3>
                        <h4>CEO</h4>
                        <p> Suspendisse dignissim maximus interdum. Curabitur et fermentum enim. Mauris eros arcu, gravida.</p>
                    </div>
                    <div class="teammate">
                        <img class="teammate-img" src="../images/cat2.jpeg" alt="munkatársunk">
                        <h3>Valaki Kettő</h3>
                        <h4>CTO</h4>
                        <p>Vestibulum cursus pharetra nibh eu mattis. Morbi quam tellus, eget ipsum. Praesent venenatis et diam.</p>
                    </div>
                    <div class="teammate">
                        <img class="teammate-img" src="../images/cat3.jpg" alt="munkatársunk">
                        <h3>Valaki Három</h3>
                        <h4>Developer</h4>
                        <p>Fusce ut blandit lectus, quis lacinia est. Aenean malesuada arcu leo, eget ullamcorper ipsum tincidunt eu. Mauris eros arcu, gravida.</p>
                    </div>
                </div>
            </section>
            <section class="quality">
                <h2>Amiért érdemes minket választani</h2>
                <div class="qualities">
                    <div class="quality-item">
                        <div class="quality-item-content">
                            <img src="../images/desktop.png" alt="desktop">
                            <h3><em>Széleskörű szolgáltatás</em></h3>
                            <p>Praesent nec porttitor elit. Suspendisse feugiat est at erat aliquet consectetur. Mauris fermentum ornare sem luctus ornare. Aenean ac lorem.</p>
                        </div>
                    </div>
                    <div class="quality-item">
                        <div class="quality-item-content">
                            <img src="../images/hourglass.png" alt="hourglass">
                            <h3><em>Több évtizedes tapasztalat</em></h3>
                            <p>Praesent nec porttitor elit. Suspendisse feugiat est at erat aliquet consectetur. Mauris fermentum ornare sem luctus ornare. Aenean ac lorem.</p>
                        </div>
                    </div>
                    <div class="quality-item">
                        <div class="quality-item-content">
                            <img src="../images/hand.png" alt="hand">
                            <h3><em>Költséghatékony</em></h3>
                            <p>Praesent nec porttitor elit. Suspendisse feugiat est at erat aliquet consectetur. Mauris fermentum ornare sem luctus ornare. Aenean ac lorem.</p>
                        </div>
                    </div>
                    <div class="quality-item">
                        <div class="quality-item-content">
                            <img src="../images/chat.png" alt="chat">
                            <h3><em>Magas szintű kommunikáció</em></h3>
                            <p>Praesent nec porttitor elit. Suspendisse feugiat est at erat aliquet consectetur. Mauris fermentum ornare sem luctus ornare. Aenean ac lorem.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include "footer.php" ?>
    </div>
</body>
</html>