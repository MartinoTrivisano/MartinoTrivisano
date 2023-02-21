<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
{% extends 'layout.html'%}
<?php
  require 'database.php';
    if(isset($_POST["register-button"])){
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      $duplicate = mysqli_query($conn , "SELECT * FROM utente where nomme='$nome' AND email='$email'");
      if(mysqli_num_rows($duplicate)>0){
      echo
        "<script> alert ('Nome o Email già esistenti')</script>";
      }else{
        if($password==$cpassword){
        $query = "INSERT INTO utente VALUES('' , '$nome' , '$email' ,'$password')";
        mysqli_query($conn, $query);
        echo 
        "<script> alert ('Registrazione effettuata')</script>";
        header("Location: login.php");
        }else{
          echo 
        "<script> alert ('Password non identiche')</script>";
        }
      }
    }
  ?>
{% block body %}
<style type="text/css">
  *{
    margin:0;
    padding:0;
  }
  .form-box{
    width:500px;
    background: #ededed;
    margin:12% auto;
    padding:50px 0;
    color:#000;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    border-radius: 10px;
  }
  h2{
    text-align: center;
    margin-bottom: 40px;
  }
  .input-box{
    margin:31px auto;
    width: 80%;
    border-bottom: 1px solid #000;
    margin-top: 10px;
    padding-bottom: 5px;
    }
    .input-box input{
      width: 90%;
      border:none;
      outline: none;
      background: transparent;
      color:#000;
    }
    ::placeholder{
      color:#000;
    }
    .fa{
      margin-right: 10px;
    }
    .eye{
      position: absolute;
    }
    #Oaperto{
      display: none;
    }
    .login-btn{
      margin: 40px auto 20px;
      width:80%;
      display: block;
      outline:none;
      padding:10px 0;
      border:1px solid #000;
      cursor: pointer;
      background: transparent;
      color:#000;
      font-size: 16px;
      border-radius: 10px;
    }
    h6{
      padding-left: 50px;
    }
    .login-btn:hover{
      background-color: #e1dfdf;
    }
</style>
<form action="" method="POST" autocomplete="off">
  <div class="form-box">
    <h2>Registrazione</h2>
    <div class="input-box">
      <i class="fa fa-user-circle" ></i>
      <input name="nome" type="username" placeholder="Inserisci il tuo nickname">
    </div>
    <div class="input-box">
      <i class="fa fa-envelope"></i>
      <input name= "email" type="email" placeholder="Inserisci la mail">
    </div>
    <div class="input-box">
      <i class="fa fa-key"></i>
      <input  name="password" type="password" placeholder="Inserisci la password" id="pass">
      <span class="eye" onclick='myFunction()'>
        <i id="Oaperto" class="fa fa-eye"></i>
        <i id="Ochiuso" class="fa fa-eye-slash"></i>
        <script>
          function myFunction(){
            var pass = document.getElementById("pass");
            var aperto = document.getElementById("Oaperto");
            var chiuso = document.getElementById("Ochiuso");
            if(pass.type==='password'){
              pass.type = "text";
              aperto.style.display = "block";
              chiuso.style.display = "none";
            }else{
              pass.type = "password";
              aperto.style.display = "none";
              chiuso.style.display = "block";
            }
          }
        </script>
      </span>
    </div>
    <div class="input-box">
      <i class="fa fa-key"></i>
      <input name= "cpassword" type="password" placeholder="Conferma Password" id="passC">
    </div>
    <div>
      <a href="{{url_for('login')}}"><h6>Hai gia un account?</h6></a>
    </div> 
      <button type="submit" name="register-button" class="login-btn" >REGISTRATI</button>
  </div>
</form>


{% endblock %}