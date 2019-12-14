<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="colour1.css">
</head>
<html>
    <body>
    <div class="container">
        <h1 style="margin:10px"><?php echo $_POST["title"];?></h1>
        <h2><?php echo $_POST["description"];?></h2>
        <div class="container-2" style="color:black" id="container2">
            <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            <?php echo $_POST["question"];?>
            </h1>
            <p id="question"></p>
            <div id="button" style="text-align:center;">
                <button id="btn0" onclick="correctanswer(this.id)"><span id="choice0"><?php echo $_POST["option1"];?></span></button>
                <button id="btn1" onclick="correctanswer(this.id)"><span id="choice1"><?php echo $_POST["option2"];?></span></button>
                <button id="btn2" onclick="correctanswer(this.id)"><span id="choice2" style="color: black;"><?php echo $_POST["option3"];?></span></button>
                <button id="btn3" onclick="correctanswer(this.id)"><span id="choice3" style="color: black;"><?php echo $_POST["option4"];?></span></button>
            </div>
            <div id="check" style="text-align:center;">
                <input type="submit" onclick="check()" value="check">
            </div>
            <div id="continue">
                <input type="submit" onclick="location.href='main.php'" value="continue">
            </div>
            <!-- <div id="forum">
                    <input type="submit" onclick="" value="forum">
            </div> -->
        </div>
        <div class="container-3">
            <h1 style="margin:10px">Progress</h1>
            <p id="progress" style="margin:10px"> question 1 of 10</p>
            <div class="progress-bar">
            </div>

        </div>
    </div>
    <script src="create.js"></script>
    </body>
</html>