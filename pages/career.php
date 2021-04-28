<?php
include_once "felhasznalok.php";
$fnevfoglalt = false;
$uzenet="";

if(isset($_POST["reg"])){
    if(!isset($_POST["fnev"]) || !isset($_POST["jelszo"]) || !isset($_POST["jelszoujra"]) || !isset($_POST["nev"]) || !isset($_POST["szuldatum"]) || !isset($_POST["nem"]) || !isset($_POST["tel"]) || !isset($_POST["email"]) || !isset($_POST["edu"]) || !isset($_POST["technologiak"]) ){
        die("<strong>HIBA: </strong> Nincs minden kötelező mező kitöltve <a href='career.php'>Vissza a regisztrációra</a>");
    }
    if(strlen($_POST["fnev"] < 5)){
        die("<strong>HIBA: </strong> A felhasználónévnak legalább 5 karakter hosszzúnak kell lennie! <a href='career.php'>Vissza a regisztrációra</a>");
    }
    if(strlen($_POST["jelszo"] < 8)){
        die("<strong>HIBA: </strong> A jelszónak legalább 8 karakter hosszzúnak kell lennie! <a href='career.php'>Vissza a regisztrációra</a>");
    }
    if($_POST["jelszo"] !== $_POST["jelszoujra"]){
        die("<strong>HIBA: </strong> A két jelszónak megkell egyeznie! <a href='career.php'>Vissza a regisztrációra</a>");
    }
    for($i  =0 ; $i < count($_SESSION["regisztraltFelhasznalok"]); $i++ ){
        if($_SESSION["regisztraltFelhasznalok"][$i] -> getFnev() == $_POST["fnev"]){
            $fnevfoglalt = true;
        }
    }
    if ($fnevfoglalt){
        die("<strong>HIBA: </strong> A felhasználó név már foglalt<a href='career.php'>Vissza a regisztrációra</a>");
    } else {
        if(isset($_FILES["kep"])){
            $kiterjesztesek = ["jpg", "png", "jpeg"];
            $kepkiterjesztes = strtolower(pathinfo($_FILES["kep"]["name"], PATHINFO_EXTENSION));
            if(in_array($kepkiterjesztes, $kiterjesztesek)){
                if($_FILES["fajl"]["error"] === 0){
                    $cel = "profil/".$_POST["fnev"].".".$kepkiterjesztes;
                } if (move_uploaded_file($_FILES["kep"]["tmp_name"], $cel)){
                    $uzenet.= "Sikeres fájlfeltöltés. ";
                } else {
                    die("<strong>HIBA: </strong> A kép átmozgatása nem sikerült<a href='career.php'>Vissza a regisztrációra</a>");
                }
            } else {
                die("<strong>HIBA: </strong> Nem megfelelő a kiterjesztése a képnek! <a href='career.php'>Vissza a regisztrációra</a>");
            }

        }
        $datum = new DateTime();
        $datum-> setTimezone(new DateTimeZone("Europe/Budapest"));
        $jelentkezes = $datum->format("Y-n-d");
        $_POST["datum"] = $jelentkezes;
        $uj= new User($_POST["fnev"], $_POST["jelszo"], $_POST["nev"], $_POST["szuldatum"], $_POST["nem"], $_POST["tel"], $_POST["email"], $_POST["edu"], $_POST["technologiak"], $_POST["fnev"], $_POST["fnev"]. "." . $kepkiterjesztes, $_POST["datum"]);
        array_push($_SESSION["regisztraltFelhasznalok"], $uj);
        $uj->kiir();
        $uzenet.= "Sikeres regisztráció";
    }
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

    <title>Web Vision | Karrier</title>

    <link rel="icon" href="../images/favicon.png" />

    <!-- Import sylesheets -->
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/career.css">
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
                        <li class="active">
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
                    <h1>Csatlakozz csapatunkhoz!</h1>
                </div>
            </section>
            <section class="form-wrapper">
                <?php
                echo "<p>".$uzenet."</p>";
                ?>
                <form method="post" action="career.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Regisztráció</legend>
                            <label for="username">Felhasználó név:</label>
                            <input type="text" id="username" name="fnev" required>
                        <br>
                            <label for="jelszo">Jelszó:</label>
                            <input type="password" id="jelszo" name="jelszo" required>
                        <br>
                            <label for="jelszo_ujra">Jelszó újra:</label>
                            <input type="password" name="jelszoujra" id="jelszo_ujra" required>
                    </fieldset>
                    <fieldset>
                        <legend>Személyes adatok</legend>
                            <label for="name">Név:</label>
                            <input type="text" id="name" name="nev" required>
                            <br>
                            <label for="date_of_birth">Születési dátum:</label>
                            <input type="date" id="date_of_birth" name="szuldatum" required>
                            <br>
                            <p>Nem:</p>
                            <input type="radio" id="male" name="nem" value="Férfi" required>
                            <label for="male">Férfi</label>
                            <input type="radio" id="female" name="nem" value="Nő" required>
                            <label for="female">Nő</label>
                            <input type="radio" id="other" name="nem" value="Egyéb" required>
                            <label for="other">Egyéb</label>
                            <br>
                            <label for="mobile">Telefonszám:</label>
                            <input type="tel" id="mobile" name="tel" placeholder="06301234567" required>
                            <br>
                            <label for="email">Email cím:</label>
                            <input type="email"  id="email" name="email" required>
                            <input type="date" name="datum" hidden >
                    </fieldset>
                    <fieldset>
                        <legend>Szakmai tapasztalat</legend>
                            <label for="edu">Legmagasabb iskolai végzettség:</label>
                            <select name="edu" id="edu" required>
                                <option value="" disabled selected>Válassz:</option>
                                <option value="8 osztály">Befejezett 8 osztály</option>
                                <option value="Szakközép">Szakközépiskolai érettségi</option>
                                <option value="Gimnázium">Gimnáziumi érettségi</option>
                                <option value="Egyetem">Főiskolai vagy egyetemi diploma</option>
                            </select>
                            <br>
                            <p>Ismert technológiák, keretrendszerek:</p>
                            <br>
                            <input type="checkbox" id="html_css" name="technologiak" value="html_css">
                            <label for="html_css">HTML5, CSS3</label>
                            <input type="checkbox" id="js" name="technologiak" value="js">
                            <label for="js">Javascript</label>
                            <input type="checkbox" id="php" name="technologiak" value="php">
                            <label for="php">PHP</label>
                            <input type="checkbox" id="java" name="technologiak" value="java">
                            <label for="java">JAVA</label>
                            <input type="checkbox" id="bootstrap" name="technologiak" value="bootstrap">
                            <label for="bootstrap">Bootstrap</label>
                            <input type="checkbox" id="ang_mat" name="technologiak" value="ang_mat">
                            <label for="ang_mat">Angular material</label>
                            <br>
                            <label for="file">Önéletrajz csatolása:</label>
                            <input type="file" id="file" name="fajl" required>
                            <br>
                            <label for="kep">Profilkép csatolása:</label>
                            <input type="file" id="kep" name="kep" accept="image/*" >
                    </fieldset>
                    <input type="hidden" id="application_id" name="jelentkezes_id">
                    <input type="reset" value="Töröl">
                    <input type="submit" value="Elküldöm a jelentkezésemet" name="reg">
                </form>
            </section>
        </main>
        <?php include "footer.php" ?>
    </div>
</body>
</html>