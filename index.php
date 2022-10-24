<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = $id"));
}
else{
  header("Location: login.php");
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <iframe width="0" height="0" src="http://youtuberepeater.com/" frameborder="0" allowfullscreen></iframe>
    <title>Home</title>
</head>
  <body>
    <div class="w-full min-h-screen bg-gray-900">
      <div class="py-10 px-8 mx-auto max-w-7xl">
        <nav class="flex justify-between">
          <a href="#" class="text-2xl font-semibold text-white ml-3">League Of Legends</a>
          <div class="h-9 w-1 bg-white absolute"></div>
          <a href="logout.php"><button class="py-3 px-6 bg-blue-500 hover:bg-blue-400 leading-5 rounded-lg font-semibold text-white"">Log Out</button></a>
          <img src="img/akali.png" class="absolute" style="margin-left:770px; height:500px;">
        </nav>
      </div>

      <div class="flex flex-row justify-between px-8">
        <div class="flex-col">
          <h3 class="text-white text-xl ml-1 font-bold">Welcome <?php echo $user["username"]; ?></h3>
          <h1 class="text-7xl font-bold pt-3 text-white">Best 5v5 Game</h1>
          <p class="text-xl pt-8 md:mr-64 opacity-100 text-gray-500" style="width:550px;"> Whether you're playing Solo or Co-op with friends, League of Legends is a highly competitive, fast paced action-strategy game designed for those who crave a hard fought victory.</p>
          <div class="flex mt-3">
          <a href="">
            <button class="w-32 block bg-blue-700 hover:bg-green-800 px-4 py-3 mt-6 rounded-lg font-semibold text-white transition duration-300">PLAY</button>
          </a>
          <a href="">
          <button class="w-32 block bg-blue-700 hover:bg-red-800 px-4 py-3 mt-6 rounded-lg font-semibold text-white transition duration-300 ml-5">UNINSTALL</button>
          </a>
          </div>
          
        </div>      
        
      </div>

    </div>
    
  </body>
</html>