<?php
session_start(); ?>
<meta charset="UTF-8">
    <title>Agar.IO</title>
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <div id="wrapper">
        <div id="status"><span class="title">Leaderboard</span></div>
    </div>
    <div id="Menu">
        <div id="startMenu">
            <p>Match Results</p>
            <br />
            <div id="instructions" style="list-style:none">
                   <li><label for="score" style="text-align:center"><?php echo $_GET['score']; ?></label></li>
                   <li style="text-align:center"><label for="name"><?php echo $_SESSION['login']; ?></label></li>

            </div>
            <button id="startButton" name="continue">Continue</button>
            <button id="startButton" name="logout">Log Out</button>
            <br />

        </div>
    </div>
</body>
</html>
