{% extends 'layout.html'%}
<?php
require 'database.php';
if(isset($_POST['login-button'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $result = mysqli_query($conn, "SELECT * FROM utente WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0){
    if($password == $row["password"]){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: homelog.html");
    }else{
      echo 
        "<script> alert ('Password sbagliata')</script>";
    }
  }else{
    echo 
      "<script> alert ('Utente non registrato')</script>";
  }
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://unpkg.com/ag-grid-community@26.2.1/dist/ag-grid-community.min.js"></script>
{% block body %}
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,200&display=swap');
  body{
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
  }
  *{
    margin:0;
    padding:0;
  }
  .form-box{
    width:500px;
    background:  #ededed;
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
    <h2>Login</h2>
    <div class="input-box">
      <i class="fa fa-envelope"></i>
      <input type="email" placeholder="Inserisci la mail">
    </div>
    <div class="input-box">
      <i class="fa fa-key"></i>
      <input type="password" placeholder="Inserisci la password" id="pass">
      <span class="eye" onclick="myFunction()">
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
    <div>
      <a href="{{url_for('forgot')}}"><h6>Password dimenticata?</h6></a>
    </div>
    <div>
      <a href="{{url_for('register')}}"><h6>Non hai un account? Registrati</h6></a>
    </div>
    <button type="button" name="login-button"  class="login-btn">LOGIN</button>
  </div>

</form>





{% endblock %}