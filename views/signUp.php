<div id="signup" class="absolute top-0 left-0 h-full w-full bg-black bg-opacity-75" style="display:none;">
    <form action="../includes/signup.db.php" method="POST" id="signup-modal"class="bg-gray-200 absolute top-1/4 left-1/4 w-1/2 bg-gray-100 center flex flex-col rounded-lg overflow-hidden shadow-lg">
        <div class="flex w-full justify-center p-4 border-b-2 border-gray-300 bg-blue-700"><span class="text-5xl text-white font-bold">Sign Up</span></div>
        <div class="flex justify-start m-4 text-2xl">Full Name: <input name="fname" class="px-4 ml-4 flex-auto rounded-lg" type="text"/></div>
        <div class="flex justify-start m-4 text-2xl">Email Address: <input name="email" class="px-4 ml-4 flex-auto rounded-lg" type="email"/></div>
        <div class="flex justify-start m-4 text-2xl">Username: <input name="uname" class="px-4 ml-4 flex-auto rounded-lg" type="text"/></div>
        <div class="flex justify-start m-4 text-2xl">Password: <input name="pwd" class="px-4 ml-4 flex-auto rounded-lg" type="password"/></div>
        <div class="flex justify-start m-4 text-2xl">Please Repeat Password: <input name="repPwd" class="px-4 ml-4 flex-auto rounded-lg" type="password"/></div>
        <div class="flex justify-center text-4xl h-full w-full m-4"><button name="submit" type="submit" class="hover:text-gray-300 hover:border-gray-300 hover:bg-blue-800 font-bold text-white bg-blue-700 w-3/4 p-4 border-8 border-white shadow-lg">Submit</button></div>
        <?php if(isset($_GET["error"])){
            if($_GET["error"] == "emptyInput"){
                echo '<div class="flex justify-center m-4 text-2xl">Error Empty Input</div>';
            }
        }
      ?>
    </form>
</div>
<div id="login" class="absolute top-0 left-0 h-full w-full bg-black bg-opacity-75" style="display:none;">
    <div id="login-modal"class="bg-gray-200 absolute top-1/4 left-1/4 w-1/2 bg-gray-100 center flex flex-col rounded-lg overflow-hidden shadow-lg">
        <div class="flex w-full justify-center p-4 border-b-2 border-gray-300 bg-blue-700"><span class="text-5xl text-white font-bold">Login</span></div>
        <div class="flex justify-start m-4 text-2xl">Username: <input id="Luname" class="px-4 ml-4 flex-auto rounded-lg" type="text"/></div>
        <div class="flex justify-start m-4 text-2xl">Password: <input id="Lpwd" class="px-4 ml-4 flex-auto rounded-lg" type="password"/></div>
        <div class="flex justify-center text-4xl h-full w-full m-4"><button id="submit" class="hover:text-gray-300 hover:border-gray-300 hover:bg-blue-800 font-bold text-white bg-blue-700 w-3/4 p-4 border-8 border-white shadow-lg">Submit</button></div>
    </div>
</div>