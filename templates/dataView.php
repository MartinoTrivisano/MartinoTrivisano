{% extends 'layoutlog.html'%}

{% block body %}
<style>
  h2{
    text-align: center;
    margin-top: 40px;
  }
  table{
    border-collapse: collapse;
    border-spacing: 0;
    width::100%;
    color:#000;
    font-family: monospace;
    font-size:13px;
    text-align:left;
  }
  th{
    background-color: #ededed
    color:white;
  }
  tr:nth-child(even){background-color: #f2f2f2;}
</style>
<h2>Visualizza Dati</h2>
<hr>
<form action="modifica.php" method="POST">
  <div class="container-fluid" style="overflow-x:auto">
    <table class="table">
      <thead>
          <tr>
            <th>id</th>
            <th>age</th>
            <th>job</th>
            <th>state</th>
            <th>title<th>
            <th>deff</th>
            <th>abitation</th>
            <th>load</th>
            <th>tel</th>
            <th>month</th>
            <th>day</th>
            <th>durata</th>
            <th>comp</th>
            <th>gpag</th>
            <th>pre</th>
            <th>pout</th>
            <th>emp_var</th>
            <th>cprice</th>
            <th>cconf</th>
            <th>eur</th>
            <th>nr</th>
            <th>result</th>
          </tr>
      </thead>
      <tbody>     
      <?php
      require 'database.php';
      $query = "SELECT * FROM feature";
      $result = mysqli_query($conn, $query);
      if(!$result){
        echo
        "<script> alert ('Query non andata a buon fine')</script>";
      }else{
        $row = mysqli_fetch_assoc($result);
        while($row != $risultato){
          echo "
          <tr>
              <td name='id'>$row[id]</td>
              <td name='age'>$row[age]</td>
              <td name='job'>$row[job]</td>
              <td name='state'>$row[state]</td>
              <td name='title'>$row[title]</td>
              <td name='deff'>$row[deff]</td>
              <td name='abitation'>$row[abitation]</td>
              <td name='load'>$row[load]</td>
              <td name='tel'>$row[tel]</td>
              <td name='month'>$row[month]</td>
              <td name='day'>$row[day]</td>
              <td name='durata'>$row[durata]</td>
              <td name='comp'>$row[comp]</td>
              <td name='gpag'>$row[gpag]</td>
              <td name='pre'>$row[pre]</td>
              <td name='pout'>$row[pout]</td>
              <td name='emp'>$row[emp]</td>
              <td name='cprice'>$row[cprice]</td>
              <td name='cconf'>$row[cconf]</td>
              <td name='eur'>$row[euribor3m]</td>
              <td name='nr'>$row[nremployed]</td>
              <td>$row[result]</td>
              <td><form action='modifica.php' method='POST' name='modifica-button' class='btn btn-primary btn-sm''>Modifica</form></td>
              <td><a href='dataView.php' class='btn btn-danger btn-sm' onclick='elimina()'>Elimina</a></td>  
           </tr>
          ";
        }
      }
      function elimina(){
        require 'database.php';
        $id = $_POST['id'];
        $sql = "DELETE FROM feature WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if(!$result){
          echo 
          "<script> alert ('Query non andata a buon fine')</script>";
        }else{
          echo
          "<script> alert ('Tupla selezionata Eliminata')</script>";
        }
        header("location: dataView.php");
      }
      ?>
      </tbody>
    </table>
  </div>
</form>


{% endblock %}



