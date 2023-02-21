{% extends 'layoutlog.html'%}

{% block body %}
<?php
require 'database.php';
$eta = $_POST['eta'];
$job = $_POST['job'];
$state = $_POST['state'];
$title = $_POST['title'];
$deff = $_POST['deff'];
$abitation = $_POST['abitation'];
$load = $_POST['load'];
$tel = $_POST['tel'];
$mouth = $_POST['mouth'];
$day = $_POST['day'];
$durata = $_POST['durata'];
$comp = $_POST['comp'];
$gpag = $_POST['gpag'];
$prev = $_POST['prev'];
$pout = $_POST['pout'];
$emp = $_POST['emp'];
$cprice = $_POST['cprice'];
$cconf = $_POST['cconf'];
$eur = $_POST['eur'];
$nr = $_POST['nr'];

if(isset($_POST['feature-button'])){

  $result = $_POST['prediction'];
  $query = "INSERT INTO feature VALUES ('',''$eta','$job','$state','$title','$deff','$abitation','$load','$tel','$mouth','$day','$durata','$comp'.'$gpag','$prev','$pout','$emp','$cprice','$cconf','$eur','$nr','$result')";
  $ver = mysqli_query($conn, $query);
  if($ver==false){
    echo 
    "<script> alert ('Errore nella memorizzazione nel database')</script>";
  }
}
?>
<style type="text/css">
*{
    margin:0;
    padding:0;
  }
  .form-box{
    width:900px ;
    height:1500px;
    background-color: #ededed;
    margin:10% auto;
    margin-left: 14%;
    padding:50px 0;
    color:#000;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    border-radius: 10px;
  }
  .input-box{
    margin:31px auto;
    background: #ededed;
    width: 80% ;
    border-bottom: 1px solid #000;
    margin-top: 10px;
    padding-bottom: 5px;
  }
  h2{
    text-align: center;
    margin-bottom: 40px;
  }
  .login-btn{
    margin: 40px auto 20px;
    width: 30%  ;
    outline:none;
    padding:10px 0;
    border:1px solid #000;
    cursor: pointer;
    background: transparent;
    color:#000;
    font-size: 16px;
    border-radius: 10px;
 }
 .login-btn:hover{
      background-color: #e1dfdf;
 }
 #psuc{
  margin-left:35%;
 }

 #bprecedente{
  margin-left: 15%;
  width: 200px;
 }
 #bsuccessivo{
  margin-left: 15%;
  width: 200px;
 }
 .form-select{
  background-color: #ededed;
 }
 .progress{
  display: block;
 }
 #f2{
  height: 600px;
  width: 900px;
 }
</style>
<div class="form-box" id="f2" >
    <div class="form">
      <h2>Visualizza Risposta</h2>
    </div>
    <div class="input-box">
      <input style="width:720px ;background-color:#ededed" type="text" value='{{result}}' name="prediction" disabled="disabled"> 
    </div>
    <div class="input-box">
      <input style="width:720px ;background-color:#ededed" type="text" value='{{probability}}' name="proba" disabled="disabled"> 
    </div>
    <div class="container-fluid">
      <ul style="align-items:center">
        <li>
            <a href="{{url_for('inserisci')}}"><button name="feature-button" type="submit" class="login-btn" id="bsuccessivo">Aggiungi nuovi Dati</button></a>
        </li>
      </ul>
    </div>
  </div>
</form>

{% endblock %}



