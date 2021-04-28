<?php
include_once "felhasznalok.php";

if (isset($_POST["bej"])){
    if(isset($_POST["fnevbej"]) && isset($_POST["jelszobej"])){
        $belepes = false;
        foreach ($_SESSION["regisztraltFelhasznalok"] as $userobj){
            if($userobj -> getFnev() == $_POST["fnevbej"] && $userobj -> getJelszo() == $_POST["jelszobej"]){
                $belepes = true;
                $_SESSION["user"]= $userobj;
                break;
            }
        }
        if(!$belepes){
            die("<strong>HIBA: </strong> Sikertelen bejelentkezés! Hibás adatok!<a href='log-in.php'>Vissza a bejelentkezéshez</a>");
        }

    }else{
        die("<strong>HIBA: </strong> Nem lettek kitöltve a mezők.<a href='log-in.php'>Vissza a bejelentkezéshez</a>");
    }
}

if (isset($_POST["ki"])){
    session_unset();
    session_destroy();
}

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Molnár Dóra és Beviz Zoltán" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <title>Web Vision | Bejelentkezés</title>

    <link rel="icon" href="../images/favicon.png" />

    <!-- Import sylesheets -->
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/login.css">
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
                        <li>
                            <a href="about.php">Rólunk</a>
                        </li>
                        <li>
                            <a href="blog-posts.php">Blog</a>
                        </li>
                        <?php
                        if(!isset($_SESSION["user"])){
                            echo '
                                <li>
                                    <a href="career.php">Karrier</a>
                                </li>
                                <li class="active">
                                    <a href="log-in.php">Bejelentkezés</a>
                                </li>
                                ';
                        } else {
                            echo '
                                <li class="active">
                                    <a href="log-in.php">Profil</a>
                                </li>
                                ';
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <main>

                <?php
                    if(!isset($_SESSION["user"])){
                        echo '
                            <div class="box">
                            <h1>Bejelentkezés</h1>
                            <form action="log-in.php" method="post" enctype="multipart/form-data">
                                <label for="username">Felhasználó név:</label>
                                <input type="text" name="fnevbej" id="username">
                                <br>
                                <label for="passw">Jelszó:</label>
                                <input type="text" id="passw" name="jelszobej">
                                <br>
                                <input type="Submit" value="Bejelentkezés" name="bej">
                            </form>
                            </div>
                        ';
                    } else {
                        echo '
                        <div>
                            <img src="profil/'. $_SESSION["user"]-> getKep(). '"alt="profilkep" width="200">
                            <p>Név: '.$_SESSION["user"]->getNev(). '</p>
                            <p>Felhasználónév: '.$_SESSION["user"]->getNev(). ' </p>
                            <p>Születési dátum: '.$_SESSION["user"]->getSzuldatum(). ' </p>
                            <p>Nem: '.$_SESSION["user"]->getNem(). ' </p>
                            <p>Telefon: '.$_SESSION["user"]->getTel(). ' </p>
                            <p>Email: '.$_SESSION["user"]->getEmail(). ' </p>
                            <p>Legmagasabb iskolai végzettség: '.$_SESSION["user"]->getEdu(). ' </p>
                            <p>Ismert technológiák: '.$_SESSION["user"]->getTechnologiak(). ' </p>
                            <p>Jelentkezés dátuma: '.$_SESSION["user"]->getJelentkezesDatuma().'</p>
                            
                            <form id="kijelentkezes" action="log-in.php" method="post" enctype="multipart/form-data">
                            <input type="submit" value="kijelentkezes" name="ki">
                            </form>
                            </div>
                        ';
                    }
                ?>




            
        </main>
        <?php include "footer.php" ?>
    </div>
</body>
</html>