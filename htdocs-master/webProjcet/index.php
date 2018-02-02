<?php
session_start();
?>
<meta charset="UTF-8">
    <title>Snake</title>
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <div id="wrapper">
        <div id="status"><span class="title">Leaderboard</span></div>
    </div>
    <div id="Menu">
        <div id="startMenu">
          <form class="" action="login.php" method="post">
            <p>Open game</p>
            <input type="text" placeholder="Enter your name here" id="playerNameInput" minlength="6" name="name" maxlength="25" />
            <br />
            <button id="startButton" type="submit" name="submit">Registration</button>
            <br />
                      </form>
            <div id="instructions">
                <h3>Gameplay</h3>
                <ul>
                   <li>Objective: Try to get fat and eat other players.</li>
                    <li>Move your mouse on the screen to move your character.</li>
                    <li>Eat food and other players</li>
                    <li>A player's mass is the number of food particles eaten.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
