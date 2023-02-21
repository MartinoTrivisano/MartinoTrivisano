{%extends 'layout.html'%}

{% block body %}
<?php
require 'database.php';
if(isset($_POST['confirm-button'])){
    $token = $_GET['token'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    if($pass!=$cpass){
        echo 
        "<script> alert ('Password non identiche')</script>";
    }else{
        echo 
        "<script> alert ('Password identiche')</script>";
        $query = "UPDATE utente SET password='$pass' WHERE email='$token' LIMIT 1";
        header("Locaion: login.php");
    }
}
?>
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
<form action="" method="POST">
  <div class="form-box">
    <h2>Inserisci nuova password</h2>
    <div class="input-box">
      <i class="fa fa-key"></i>
      <input name="password" type="password" placeholder="Inserisci password" id="pass">
      <span class="eye" onclick='myFunction()'>
        <i id="Oaperto" class="fa fa-eye"></i>
        <i id="Ochiuso" class="fa fa-eye-slash"></i>
      </span>  
    </div>
    <div class="input-box">
      <i class="fa fa-key"></i>
      <input  name="cpassword" type="password" placeholder="Reinserisci la password" id="pass">
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
      <button type="submit" name="confirm-button" class="login-btn"  >CONFERMA</button>
  </div>
</form>


{% endblock%}