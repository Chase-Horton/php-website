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
        <div class="flex justify-center h-3/4 w-full mt-8">
            <!--BUTTONS-->
            <div id="term-buttons" class="m-8 h-full pb-8 w-1/8 flex flex-col justify-evenly text-2xl">
                <button id="help-button" class="terminal-button rounded-full">Help</button>
                <button id="clear-button" class="terminal-button rounded-full">Clear</button>
                <button id="save-button" class="terminal-button rounded-full">Save</button>
                <button id="load-button" class="terminal-button rounded-full">Load</button>       
                <button class="terminal-button rounded-full">More Information</button>
                <a target="_blank" href="https://github.com/Chase-Horton/php-website" class="terminal-button rounded-full">See Code on GitHub</a>
            </div>
                <div id="termX" class="mt-6 w-3/4 h-full flex-none bg-black rounded-lg shadow-lg overflow-hidden">
                    <div id="terminalDiv" class="p-8"></div>
                </div>

        </div>
    </div>
</body>
<script src='../scripts/terminal.js'></script>
</html>