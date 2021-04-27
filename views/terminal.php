<!doctype html>
<html>
<head>    
    <title>Chase Horton|Terminal</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../scripts/control.js"></script>
    <script src='../scripts/stopAnim.js'></script>
    <script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
    <link rel="stylesheet" href="../styles/terminal.css"/>
    <link href="../styles/tailwind.css" rel="stylesheet">
    <link href="../styles/homepage-styles.css" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>
<body>
    <div class="h-screen flex-wrap bg-black">
        <?php include('navBar.html');?>
        <div class="window">
            <div id="terminalDiv"></div>
        </div>
        <script src='../scripts/terminal.js'></script>
    </div>
</body>
</html>