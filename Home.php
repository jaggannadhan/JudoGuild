<?php
  
  session_start();
  include_once("DBConnect.php");  
      
      $email = $_POST['email'];
      $pass = $_POST['pass'];     
      $remember = $_POST['check'];      

      $query = mysql_query("select * from userinfo where Email = '$email'");
      $check = mysql_fetch_array($query);

      if(!$check){        
        header("Location: Sign-in.html?error=Invalid%20Email!");
        return 0;       
      }

      if(strcmp($check['Password'], $pass)){        
        header("Location: Sign-in.html?error=Incorrect%password!");
        return 0;       
      }
      elseif(!strcmp($check['Password'], $pass))
      {
        $_SESSION['UserId'] = $check['UserId'];
        $_SESSION['Name'] = $check['Name'];
        $_SESSION['Email'] = $check['Email'];
        header("Location: Home.html?login=success");
      }
    
?>