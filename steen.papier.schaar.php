<html lang="nl">
<head>
    <style>
        body{
            font-size: 40px;
        }
        input{
            background-color: #4498c7;
            color: #9bff32;
            font-family: "Century Schoolbook";
            font-size: 150%;
            display: inline;
        }
        .keuze{
            background-color: #999999;
            font-style: oblique;
            font-stretch: extra-expanded;
            font-size: 200%;
        }
        .submit{
            height: 200px;
            width: 200px;
        }
    </style>
    <title>steen, papier, schaar</title>
</head>
<body>
<form name="orderform" method="post">

    <input class="submit" name="steen" type="image" value="steen" src="steen.jpg">
    <input class="submit" name="papier" type="image" value="papier" src="Papier.gif">
    <input class="submit" name="schaar" type="image" value="schaar" src="victorinox-schaar-16-cm.jpg">
    <input class="submit" name="lizard" type="image" value="lizard" src="anoles-for-sale.jpg">
    <input class="submit" name="spock" type="image" value="spock" src="Spock-emoji.jpg"><br>


</form>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 6-1-2017
 * Time: 18:19
 */
$spelerScore = 0;
$computerScore = 0;
$_SESSION['computerScore'] = $computerScore;
$_SESSION['spelerScore'] =  $spelerScore;

// $keuze = $_POST["keuze"];

if(isset($_POST['steen']) || isset($_POST['schaar']) || isset($_POST['papier']) || isset($_POST['lizard'])  || isset($_POST['spock'])) {
    $steen = isset($_POST['steen']) ? 'steen' : null;
    $papier = isset($_POST['papier']) ? 'papier' : null;
    $schaar = isset($_POST['schaar']) ? 'schaar' : null;
    $spock = isset($_POST['spock']) ? 'spock' : null;
    $lizard = isset($_POST['lizard']) ? 'lizard' : null;
}
    $rps = array('steen', 'papier', 'schaar','lizard','spock');
    $computerKeuzeIndex = '';
    $computerKeuze = '';
    $spelerKeuze = '';
  /*  $spelerScore = 0;
    $computerScore = 0;
    $_SESSION['computerScore'] = $computerScore;
    $_SESSION['spelerScore'] =  $spelerScore; */


    /* computer keuze papier, steen, schaar
     *
     */
    session_start();
    // shuffle($rps);
    $computerKeuzeIndex = rand(0, 4);
    $computerKeuze = $rps[$computerKeuzeIndex];

    if (isset($steen)) {
        //  var_dump($steen);
        $spelerKeuze = $steen;

        if (isset($spelerKeuze) == $spelerKeuze and $computerKeuze == $rps[1] || isset($spelerKeuze) and $computerKeuze == $rps[3]) {
            echo "de computer wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $steen" . "<br>";
            $computerScore ++;
            $_SESSION['computerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[2] || isset($spelerKeuze) and $computerKeuze == $rps[4]) {
            echo "speler wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $steen" . "<br>";
            $spelerScore++;
            $_SESSION['spelerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[0]) {
            echo "het is gelijk spel" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $steen" . "<br>";
        }
    }
    if (isset($papier)) {
        $spelerKeuze = $papier;

        if (isset($spelerKeuze) and $computerKeuze == $rps[0] || isset($spelerKeuze) and $computerKeuze == $rps[4]) {
            echo "speler wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo "jouw keuze is $papier" . "<br>";
            $spelerScore++;
            $_SESSION['spelerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[2] || isset($spelerKeuze) and $computerKeuze == $rps[3]) {
            echo "de computer wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $papier" . "<br>";
            $computerScore ++;
            $_SESSION['computerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[1]) {
            echo "het is gelijk spel" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $papier" . "<br>";
        }
    }


    if (isset($schaar)) {
        $spelerKeuze = $schaar;

        if (isset($spelerKeuze) and $computerKeuze == $rps[1] || isset($spelerKeuze) and $computerKeuze == $rps[3]) {
            echo "speler wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $schaar" . "<br>";
            $spelerScore++;
            $_SESSION['spelerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[0] || isset($spelerKeuze) and $computerKeuze == $rps[4]) {
            echo "de computer wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $schaar" . "<br>";
            $computerScore ++;
            $_SESSION['computerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[2]) {
            echo "het is gelijk spel" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $schaar" . "<br>";
        }
    }

    if (isset($lizard)) {
        $spelerKeuze = $lizard;

        if (isset($spelerKeuze) and $computerKeuze == $rps[4] || isset($spelerKeuze) and $computerKeuze == $rps[1]) {
            echo "speler wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $lizard" . "<br>";
            $spelerScore++;
            $_SESSION['spelerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[0] || isset($spelerKeuze) and $computerKeuze == $rps[2]) {
            echo "de computer wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $lizard" . "<br>";
            $computerScore ++;
            $_SESSION['computerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[3]) {
            echo "het is gelijk spel" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $lizard" . "<br>";
        }
    }

    if (isset($spock)) {
        $spelerKeuze = $spock;

        if (isset($spelerKeuze) and $computerKeuze == $rps[0] || isset($spelerKeuze) and $computerKeuze == $rps[2]) {
            echo "speler wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $spock" . "<br>";
            $spelerScore++;
            $_SESSION['spelerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[1] || isset($spelerKeuze) and $computerKeuze == $rps[3]) {
            echo "de computer wint" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $spock" . "<br>";
            $computerScore ++;
            $_SESSION['computerScore']++;
        } elseif (isset($spelerKeuze) and $computerKeuze == $rps[4]) {
            echo "het is gelijk spel" . "<br>";
            echo "de computers keuze is $computerKeuze" . "<br>";
            echo " jouw keuze is $lizard" . "<br>";
        }
    }


        echo "<br>" . "jouw score = " . $_SESSION['spelerScore']. "<br>";

        echo "de computer score = " .  $_SESSION['computerScore'];

    if($_SESSION['spelerScore'] == 10 || $_SESSION['computerScore'] == 10){
        $_SESSION['computerScore'] = $computerScore;
        $_SESSION['spelerScore'] =  $spelerScore;
    }




?>
</html>