<!DOCTYPE html>
<html lang=en>
    <head>
        <title>Legend of Zelda Quiz</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @import url("css/styles.css");
            @import url('https://fonts.googleapis.com/css?family=Fascinate+Inline|Ubuntu');
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="bg">
            <div class="navbar text-center">
                <h1>The Legend of Zelda: Breath of the Wild Quiz!</h1>
            </div>
            <div class="container-fluid">
                <form class="col-sm-4" id="questions" method="post">
                    Name: <input type="text" name="name" id="name" value="" required><br><br>
                    Own the Game? 
                    <select name="own" id="own" required>
                        <option value="">Select One</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select><br><br>
                    Did you enjoy the game? (if applicable)
                    <select name="rating" id="rating" required>
                        <option value="">Select One</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select><br><br>
                    Question 1: What is Zelda's race?<br>
                    <input type="radio" name="q1" value="goron" required>Goron<br>
                    <input type="radio" name="q1" value="zora">Zora<br>
                    <input type="radio" name="q1" value="hylian">Hylian<br>
                    <input type="radio" name="q1" value="rito">Rito<br><br>
                    Question 2: How long was Link asleep?<br>
                    <input type="radio" name="q2" value="1" required>1 Year<br>
                    <input type="radio" name="q2" value="100">100 Years<br>
                    <input type="radio" name="q2" value="25">25 Years<br>
                    <input type="radio" name="q2" value="143">143 Years<br><br>
                    Question 3: What is the name of setting for The Legend of Zelda?<br>
                    <input type="radio" name="q3" value="hyrule" required>Hyrule<br>
                    <input type="radio" name="q3" value="kanto">Kanto<br>
                    <input type="radio" name="q3" value="mushroom">Mushroom Kingdom<br>
                    <input type="radio" name="q3" value="final">Final Destination<br><br>
                    
                    <input id="submit" type="button" value="Submit">
                    <input id="reset" type="button" value="Reset">
                </form>
                <div id="thankyou"></div>
                <div id="return"></div>
            </div>
        </div>
        <script src="js/quiz.js"></script>
    </body>
</html>