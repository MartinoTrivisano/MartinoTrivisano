<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
{%extends 'layoutlog.html'%}

{%block body%}
<style type="text/css"> 
  *{
    margin:0;
    padding:0;
  }
  .form-box{
    width:900px;
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
 #f2{
  
  width: 900px;
  height: 600px;
 }

</style>
<form action="{{url_for('inserisciD')}}" method="POST">
  <div class="form-box" id="f1">
    <div class="form">
      <h2>Inserisci Dati</h2>
    </div>
    <div class="input-box">
      <input name= "eta" min="0" type="number" style="width:720px ;background-color:#ededed" placeholder="Inserisci età" id="eta" required>
      <script>
        function myFunction(){
          var eta = document.getElementById('eta');
          if(eta<0||eta>140){
            window.alert("I valori sono impossibili");
          }
        }
      </script>
    </div>
    <div class="input-box"> 
      <select name="job" class="form-select" style="width:720px" type="text" placeholder="Inserisci lavoro" required>
        <option selected>Inserisci Lavoro</option>
        <option value=1>Casalinga</option>
        <option value=2>Servizi</option>
        <option value=3>Admin</option>
        <option value=4>Operaio</option>
        <option value=5>Tecnico</option>
        <option value=6>Manager</option>
        <option value=7>Imprenditore</option>
        <option value=8>Studente</option>
        <option value=9>Ignoto</option>
        <option value=10>Disoccupato-Autonomo</option>
        <option value=11>Disoccupato</option>
        <option value=12>Ritirato</option>
      </select>  
    </div>
    <div class="input-box">
      <select name="state" class="form-select" style="width:720px" type="text" placeholder="Inserisci stato sociale" required>
        <option selected>Inserisci Stato Sociale</option>
        <option value=1>Single</option>
        <option value=2>Sposato</option>
        <option value=3>Divorziato</option>
      </select>  
    </div>
    <div class="input-box">
      <select name="title" class="form-select" style="width:720px"  type="text" placeholder="Educazione"required >
        <option selected>Inserisci Titolo di Studi</option>
        <option value=1>Basic(4y)</option>
        <option value=2>Basic(6y)</option>
        <option value=3>Basica(9y)</option>
        <option value=4>Scuola Superiore</option>
        <option value=5>Ignoto</option>
        <option value=6>Corso Professionale</option>
        <option value=7>Laurea</option>
      </select>  
    </div> 
    <div class="input-box">
      <select name= "deff" class="form-select" style="width:720px" type="text" placeholder="Default" required>
        <option selected>Default</option>
        <option value=1>No</option>
        <option value=2>Ignoto</option>
      </select>  
    </div> 
    <div class="input-box">
      <select name = "abitation" class="form-select" style="width:720px" type="text" placeholder="Abitazione" required>
        <option selected>Possiede un Abitazione</option>
        <option value=1>Si</option>
        <option value=2>No</option>
        <option value=3>Ignoto</option>
      </select>  
    </div> 
    <div class="input-box">
      <select name = "laod" class="form-select"style="width:720px" type="text" placeholder="Prestito" required>
        <option selected>Prestito</option>
        <option value=1>Si</option>
        <option value=2>No</option>
        <option value=3>Ignoto</option>
      </select>  
    </div>
    <div class="input-box">
      <select name="tel" class="form-select" style="width:720px" type="text" placeholder="Contatti" required>
        <option selected>Insersci il Contatto</option>
        <option value=1>Cellulare</option>
        <option value=2>Telefono</option>
      </select>  
    </div>  
    <div class="input-box">
        <select  name= "mouth" class="form-select" style="width:720px" type="text" placeholder="Mese" required>
          <option selected>Inserisci il Mese</option>
          <option value=1>Gennaio</option>
          <option value=2>Febbraio</option>
          <option value=3>Marzo</option>
          <option value=4>Aprile</option>
          <option value=5>Maggio</option>
          <option value=6>Giugno</option>
          <option value=7>Luglio</option>
          <option value=8>Agosto</option>
          <option value=9>Settembre</option>
          <option value=10>Ottobre</option>
          <option value=11>Novembre</option>
          <option value=12>Dicembre</option>
        </select>  
    </div>
    <div class="input-box">
      <select name="day" class="form-select" style="width:720px" type="text" placeholder="Giorno della settimana" required>
        <option selected>Inserisci il Giorno della Settimana</option>
        <option value=1>Lunedì</option>
        <option value=2>Martedì</option>
        <option value=3>Mercoledì</option>
        <option value=4>Giovedì</option>
        <option value=5>Venerdì</option >
      </select>  
    </div>
    <div class="input-box">
        <input name="durata" min="0" style="width:720px ;background-color:#ededed" type="number" placeholder="Inserisci durata" id="durata" required>
      </div>
      <div class="input-box">
        <input name="comp" min="0" max="3" style="width:720px ; background-color:#ededed" type="number" placeholder="Inserisci Compagnia" id="compagnia" required>
      </div>
      <div class="input-box">
        <input name="gpag" min="0" style="width:720px ;background-color:#ededed" type="number" placeholder="Inserisci Giorni Pagati" id="pagati" required>
      </div>
      <div class="input-box">
        <select name="prev" class="form-select" style="width:720px" type="text" placeholder="Previsioni" required>
          <option selected>Previsioni</option>
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
          <option value=6>6</option>
          <option value=7>7</option>
        </select>  
      </div>
      <div class="input-box">
        <select name="pout" class="form-select" style="width:720px" type="text" placeholder="Inserisci  Poutcome" id="poutcome" required>
          <option selected>Poutcome</option>
          <option value=0>Non Esistente</option>
          <option value=1>Esistente</option>
        </select>  
      </div>
      <div class="input-box">
        <input name="emp" min="-4" max="2" style="width:720px ;background-color:#ededed" type="number" placeholder="Inserisci EmpVarRate" step="0.1" id="EmpVarRate" required> 
      </div>
      <div class="input-box">
        <input name="cprice" min="90" max="95" style="width:720px ;background-color:#ededed" type="number" placeholder="Inserisci ConsPriceIdx" step="0.001" id="cons.price.idx" required > 
      </div>
      <div class="input-box">
        <input name="cconf" min="-51" max="-25" style="width:720px ;background-color:#ededed" type="number" placeholder="Inserisci ConsConfIdx" step="0.1" id="cons.conf.idx" required> 
      </div>
      <div class="input-box">
        <input name="eur" min="0" max="5" style="width:720px ;background-color:#ededed" type="number" placeholder="Inserisci Euribor3m" step="0.001" id="euribor3m" required> 
      </div>
      <div class="input-box">
        <input name="nr" min="4960" max="5200" style="width:720px ;background-color:#ededed" type="number" placeholder="Inserisci  NrEmployed" step="0.1" id="nr.employed" required> 
      </div>
      <div class="container-fluid" >
        <ul style="align-items:center">
          <li>  
            <button name="feature-button" type="submit" name="insert" class="login-btn" onclick="visibility2()" href="risultati.php" id="bsuccessivo">INVIA DATI</button>
            <script>
              function visibility2(){
                document.getElementById('f2').style.display = "block";
                document.getElementById('f1').style.display = "none";
              }
            </script>
          </li>
        </ul>
      </div>
    </div>
  </div>
</form>
{%endblock%}