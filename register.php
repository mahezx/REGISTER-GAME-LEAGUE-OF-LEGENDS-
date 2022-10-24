<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
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
    <title>Login</title>
</head>
<body>
    <section class="flex flex-col md:flex-row h-screen intems-center">
        <div class="h-screen hidden bg-red-600 lg:block md:w-1/2 xl:w-2/3">
            <img src="img/ahri.jpg" class="w-full h-full object-cover">
        </div>

        <div class="bg-white items-center justify-center flex md:mx-auto md:mx-0 md:max-w-md lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12">
            <div class="w-full h-100">
                <h1 class="text-xl font-bold">Welcome, Challenger</h1>
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-5">Register your account</h1>

                <form class="mt-6" action="" method="post" autocomplete="off">
                    <input type="hidden" id="action" value="register">
                    <div>
                        <label class="block text-gray-700">Username</label>
                        <input type="text" placeholder="Username" id="username" class="w-full bg-gray-200 mt-3 border focus:border-blue-500 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus require="required">
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="text" placeholder="Email" id="email" class="w-full bg-gray-200 mt-3 border focus:border-blue-500 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus require="required">
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" placeholder="Password" id="password" class="w-full bg-gray-200 mt-3 border focus:border-blue-500 focus:bg-white focus:outline-none rounded-lg px-4 py-3" autocomplete autofocus require="required">
                    </div>

                    <button type="submit" onclick="submitData()" class="w-full block bg-blue-500 hover:bg-blue-400 px-4 py-3 mt-6 rounded-lg font-semibold text-white">Register</button>

                    <div class="flex justify-center items-center mt-5">
                        <p>
                            Already have account? <a href="login.php" class="text-blue-500 hover:text-blue-700 font-semibold">Login to your account</a> 
                        </p>
                    </div>

                    <div class="flex justify-center items-center">
                        <p class="text-sm  text-gray-500 mt-10">
                            &copy; 2022 Mahez Games
                        </p>
                    </div>

                </form>
                <?php require 'script.php' ?>

            </div>
        </div>
    </section>
</body>
</html>