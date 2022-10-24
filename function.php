<?php

session_start();
$conn = mysqli_connect("localhost","root","","akungame") or die("error");

if(isset($_POST["action"])){
    if($_POST["action"] == "register"){
      register();
    }
    else if($_POST["action"] == "login"){
      login();
    }
}

//register your account

function register(){
  global $conn;

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  if(empty($username) || empty($email) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query = "INSERT INTO user VALUES('', '$username', '$email', '$password')";
  mysqli_query($conn, $query);
  echo "Registration Successful";
}

// untuk login atau sign in
function login(){
        global $conn;
      
        $username = $_POST["username"];
        $password = $_POST["password"];
      
        $user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
      
        if(mysqli_num_rows($user) > 0){
      
          $row = mysqli_fetch_assoc($user);
      
          if($password == $row['password']){
            echo "Login Successful";
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
          }
          else{
            echo "Wrong Password";
            exit;
          }
        }
        else{
          echo "User Not Registered";
          exit;
        }
      }
?>