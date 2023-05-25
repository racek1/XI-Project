<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

    <?php 
    if ($_SESSION["user_name"]) {
        echo "<div>Logged as " . $_SESSION['user_name'] . "</div><br>";
    }
    else {echo "Not logged in";}
    ?>
    <div class="container justify-content-center text-center mt-5">
        <p id="jokeText" class="h1">Joke</p>
        <button id="newJokeButton" type="button" class="btn btn-dark">Generate new</button>
    </div>
</body>

<script>
    GenerateJoke();
    var newJokeButton =document.getElementById("newJokeButton");
    var jokeText = document.getElementById("jokeText");
    newJokeButton.addEventListener('click',GenerateJoke);
    function GenerateJoke() {
        //https://yomomma-api.herokuapp.com/jokes?count=1
       // https://api.chucknorris.io/jokes/random
        var joke = $.get("https://api.chucknorris.io/jokes/random", function () 
        {
            console.log(joke.responseJSON.value);
        })
            .done(function () 
            {
                jokeText.innerHTML = joke.responseJSON.value;
            })
            .fail(function () {
                alert("Error! Can't connect to the API");
            })
    }

    $("#newJokeButton").click(function()
    {
        $("#newJokeButton").animate({
            height: '+=15px',
            width: '+=15px'
        },"fast");
        $("#newJokeButton").animate({
            height: '-=15px',
            width: '-=15px'
        },"fast");
    });
</script>
</html>