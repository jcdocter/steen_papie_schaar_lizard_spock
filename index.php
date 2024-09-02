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
    <title>Rock, Paper, Scissor</title>
</head>
<body>
<form name="orderform" action="" method="POST">

    <input type="hidden" id="choiceValue" name="choice" value="">
    <input class="submit" name="choiceButton" type="image" value="rock" src="Images/steen.jpg" onclick="document.getElementById('choiceValue').value='rock';">
    <input class="submit" name="choiceButton" type="image" value="paper" src="Images/Papier.gif" onclick="document.getElementById('choiceValue').value='paper';">
    <input class="submit" name="choiceButton" type="image" value="scissor" src="Images/victorinox-schaar-16-cm.jpg" onclick="document.getElementById('choiceValue').value='scissor';"><br>
    <!-- <input class="submit" name="lizard" type="image" value="lizard" src="anoles-for-sale.jpg">
    <input class="submit" name="spock" type="image" value="spock" src="Spock-emoji.jpg"><br> -->

</form>
</body>
<?php
    $playerScore = 0;
    $computerScore = 0;
    $_SESSION["computerScore"] = $computerScore;
    $_SESSION["playerScore"] =  $playerScore;

    $choices = array("rock", "paper", "scissor");

    if (isset($_POST["choice"]))
    {
        $playerChoice = $_POST["choice"];
    }

    session_start();
    $computerChoice = $choices[rand(0, 2)];

    echo "You choose: " . $playerChoice . "<br>";
    echo "Computer choose: " . $computerChoice . "<br>";

    switch ($computerChoice)
    {
        case "rock" :
            Result($playerChoice, "paper", "scissor", "rock");
            break;

        case "paper" :
            Result($playerChoice, "scissor", "rock", "paper");
            break;

        case "scissor" :
            Result($playerChoice, "rock", "paper", "scissor");
            break;

        default:
            echo "Invalid action form the computer !";  
            break;        
    }
    
    echo "<br>" . "jouw score = " . $_SESSION["playerScore"]. "<br>";
    echo "de computer score = " .  $_SESSION["computerScore"];

    function Result($playerChoice, $win, $lose, $draw)
    {
        switch ($playerChoice)
        {
            case $win :
                echo "You win !!";
                break;
    
            case $lose :
                echo "You lose !!";
                break;
    
            case $draw :
                echo "Draw !!";
                break;
    
            default:
                echo "Invalid action form the player !";  
                break;        
        }
    }
?>
</html>
