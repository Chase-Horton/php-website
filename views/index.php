<!doctype html>
<html>
<head>
    <title>Chase Horton|Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../scripts/control.js"></script>
    <script src='../scripts/stopAnim.js'></script>
    <link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
    <link href="../styles/tailwind.css" rel="stylesheet">
    <link href="../styles/homepage-styles.css" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
  <div class="h-screen bg-gradient-to-br from-red-600 to-red-200 flex flex-col items-center">
    <!--HEADER-->
    <header id="navBarAnimated" class="h-20 flex w-full justify-start pt-4 text-2xl rounded-b-2xl">
      <div class="navBar flex text-base md:text-3xl">
        <div id="home"><a href="index.php" class="underline ml-4 md:ml-8 hover:text-gray-400">Home</a></div>
        <div id="projects"><a href="projects.php" class="ml-4 md:ml-8 hover:text-gray-400">Projects</a></div>
        <div id="terminal"><a href="terminal.php" class="ml-4 md:ml-8 hover:text-gray-400">Terminal</a></div>
        <div id="workspace"><a href="workspace.php" class="ml-4 md:ml-8 hover:text-gray-400">Workspace</a></div>
        <div id="contact"><a href="contact.php" class="ml-4 md:ml-8 hover:text-gray-400">Contact</a></div>
        <div id="about"><a href="about.php" class="ml-4 md:ml-8 hover:text-gray-400">About me</a></div>
        <div id="signupDiv"><a id="signup-button" href="#" class="act-button hover:bg-blue-500 hover:border-blue-700 pb-2 ml-4 md:ml-8 text-center shadow-lg py-0 px-4 border-b-4 border-blue-600 mb-4 bg-blue-400 rounded-lg">Sign Up</a></div>
        <div id="loginDiv"><a id="login-button" href="#" class="act-button hover:bg-blue-500 hover:border-blue-700 pb-2 ml-4 md:ml-8 text-center shadow-lg py-0 px-4 border-b-4 border-blue-600 mb-4 bg-blue-400 rounded-lg">Login</a></div>
      </header>
    <!--INFO CARD-->
    <div id="homeCard" class="bg-white w-4/6 mt-12 rounded-lg border border-gray-200 shadow-lg p-4">
      <div class="border-b pb-2">
        <span class="text-2xl text-blue-500 font-bold w-full">Welcome to my webpage!</span>  
      </div>
      <p class="mt-2 text-lg"><span class="text-red-500 font-bold">This is just a webpage made to test out TailwindCSS.</span><br/> 
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae dolor maximus, dapibus tortor non, viverra lorem. Aliquam sed lacus rhoncus, ultrices sem a, eleifend turpis. Phasellus facilisis ex vitae eros lacinia condimentum. Maecenas a risus mollis, aliquet sapien in, scelerisque lacus. Phasellus congue, eros nec sagittis lobortis, neque lectus dictum sapien, a ultricies diam elit ac mi. Donec elementum varius quam, quis pretium neque pharetra non. Donec ultrices, arcu sed fermentum dictum, odio felis congue urna, a bibendum dolor purus id arcu.
      Proin ornare pharetra eleifend. In pretium risus sit amet vestibulum facilisis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis erat ligula, porttitor in venenatis venenatis, cursus et nulla. Aliquam venenatis feugiat bibendum. Maecenas convallis orci at mauris condimentum porttitor. Etiam vel libero non dui pharetra consequat. Vestibulum dapibus dolor ac felis molestie viverra. Vivamus non enim id ex posuere malesuada a id turpis.
      Vivamus cursus mattis fermentum. Duis elit sapien, commodo vitae dui vitae, ultricies venenatis ipsum. Donec semper, justo imperdiet placerat tristique, quam eros rutrum justo, ut eleifend arcu nulla sit amet eros. Nullam nec lectus mi. Quisque in imperdiet nisl, eu pharetra purus. Etiam vehicula bibendum ligula. Maecenas lobortis consectetur augue, eu malesuada lorem suscipit accumsan. Aenean ultrices id nisi ut ornare. Duis non porta nisl. Suspendisse at commodo leo, id cursus enim. Quisque erat lorem, bibendum volutpat ullamcorper non, rhoncus at est. Praesent sit amet ullamcorper velit, in pharetra libero. Nullam varius tempor turpis eu pulvinar. Donec auctor augue ligula, quis pharetra nisl cursus vestibulum. Sed sed quam vestibulum, rutrum nulla nec, laoreet ligula. Pellentesque rutrum porta dolor tristique fringilla.
      Nam augue sapien, fringilla at porta a, volutpat quis arcu. Pellentesque pharetra dapibus aliquet. Etiam porttitor, urna vel sodales pulvinar, ante tortor fringilla turpis, a malesuada quam odio a felis. Curabitur rutrum nisl sit amet molestie interdum. Pellentesque pretium consectetur sem, in posuere nisi lacinia at. Duis varius arcu convallis blandit tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut interdum consectetur tortor, ut vehicula augue vulputate at. Etiam nec accumsan lorem, id laoreet magna. Morbi mollis vulputate ante, vitae vehicula lectus fringilla in. Suspendisse euismod pellentesque euismod.
      Praesent non sem sed arcu semper aliquet. Cras maximus pulvinar iaculis. Morbi vel nisi sit amet elit lobortis suscipit at ac arcu. Aliquam consequat condimentum neque et vulputate. Donec id consectetur lorem. Nam aliquet bibendum orci, sit amet eleifend tortor faucibus non. Curabitur ultricies augue eget ornare luctus. Nulla in eleifend dui. In sagittis lorem nisi, et imperdiet libero sodales sed. Vestibulum non mi vitae ipsum tempor congue. Morbi facilisis sagittis euismod. Vestibulum ante risus, facilisis in nulla quis, auctor imperdiet odio.
    </p>
  </div>
  <?php include("signUp.html");?>
  </div>
</body>
<script src="../scripts/login.js"></script>
</html>
