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
    <div class="h-screen bg-gradient-to-br from-red-600 to-red-200 flex flex-col items-center">
        <?php include('navBar.html');?>
        <!--TERMINAL-->
        <div id="term" class="bg-black w-3/4 h-3/4 mt-14 rounded-lg overflow-hidden shadow-lg">
            <div id="terminalDiv" class="p-8"></div>
        </div>
        <!--BUTTONS-->
        <div id="term-buttons" class="w-3/4 my-4 flex justify-evenly text-2xl">
            <button id="help-button" class="terminal-button bg-red-500 rounded-full">Help</button>
            <button id="save-button" class="terminal-button bg-red-500 rounded-full">Save</button>
            <button id="load-button" class="terminal-button bg-red-500 rounded-full">Load</button>       
            <button class="terminal-button bg-red-500 rounded-full">More Information</button>
            <button class="terminal-button bg-red-500 rounded-full">See Code on GitHub></button>
        </div>
    </div>
</body>
<script src='../scripts/terminal.js'></script>
</html>