{% extends 'layoutlog.html'%}

{% block body %}

<div class="container-fluid" style="padding-top: 150px; padding-left:150px;">
<h2 style="padding-left: 400px;">Modifica Dati</h2>
<hr>
<br>
<?php
if (isset($_POST['modifica-button'])) {
    $eta = $_POST['age'];
    $job = $_POST['job'];
    switch ($job){
        case 1:
            $job = "Casalinga";
        case 2:
            $job = "Servizi";
        case 3:
            $job = "Admin";
        case 4:
            $job = "Operaio";
        case 5:
            $job = "Tecnico";
        case 6:
            $job = "Manager";
        case 7:
            $job = "Imprenditore";
        case 8:
            $job = "Studente";
        case 9:
            $job = "Ignoto";
        case 10:
            $job = "Disoccupato-Autonomo";
        case 11:
            $job = "Disoccupato";
        case 12:
            $job = "Ritirato";
    }
    $maritial = $_POST['maritial'];
    switch($maritial){
        case 1:
            $maritial = "Single";
        case 2:
            $maritial = "Sposato";
        case 3:
            $maritial = "Divorziato";
    }
    $edu = $_POST['edu'];
    switch($edu){
        case 1:
            $edu = "Basic(4y)";
        case 2:
            $edu = "Basic(6y)";
        case 3:
            $edu = "Basic(9y)";
        case 4:
            $edu = "Scuola Superiore";
        case 5:
            $edu = "Ignoto";
        case 6:
            $edu = "Scuola Professionale";
        case 7:
            $edu = "Laurea";
    }
    $deff = $_POST['deff'];
    switch($deff){
        case 1:
            $deff = "No";
        case 2:
            $deff = "Ignoto";
    }
    $housing = $_POST['housing'];
    switch($housing){
        case 1:
            $housing = "Si";
        case 2:
            $housing = "No";
        case 3:
            $housing = "Ignoto";
    }
    $load = $_POST['load'];
    switch($load){
        case 1:
            $load = "Si";
        case 2:
            $load = "No";
        case 3:
            $load = "Ignoto";
    }
    $contact = $_POST['contact'];
    switch($contact){
        case 1:
            $load = "Cellulare";
        case 2:
            $load = "Telefono";
    }
    $month = $_POST['month'];
    switch($load){
        case 1:
            $month = "Gennaio";
        case 2:
            $month = "Febbraio";
        case 3:
            $month = "Marzo";
        case 4:
            $month = "Aprile";
        case 5:
            $month = "Maggio";
        case 6:
            $month = "Giugno";
        case 7:
            $month = "Luglio";
        case 8:
            $month = "Agosto";
        case 9:
            $month = "Settembre";
        case 10:
            $month = "Ottobre";
        case 11:
            $month = "Novembre";
        case 12:
            $month = "Dicembre";

    }
    $day = $_POST['day'];
    switch($day){
        case 1:
            $day = "Lunedi";
        case 2:
            $day = "Martedi";
        case 3:
            $day = "Mercoledi";
        case 4:
            $day = "Giovedi";
        case 5:
            $day = "Venerdi";
    }
    $prev = $_POST['prev'];
    $pout = $_POST['pout'];
    switch($pout){
        case 0:
            $pout = "Non Esistente";
        case 1:
            $pout = "Esistente";
    }
    $duration = $_POST['dura'];
    $compaign = $_POST['comp'];
    $p_days = $_POST['payday'];
    $prev = $_POST['prev'];
    $emp = $_POST['empvar'];
    $consp = $_POST['consprice'];
    $consc = $_POST['consconf'];
    $eur = $_POST['eur'];
    $nr = $_POST['nr'];

}
?>
<div class="container-fluid">
    <form action = "{{url_for('modifica')}}" method="POST">
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Eta</label>
                <div class="col-sm-6">
                    <input min=0 type="text" class="form-control" name="et" value="<?php echo $eta;?>" required>
                </div>
            </div>
        </div>
       <br> 
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Job</label>
                <div class="col-sm-6">    
                    <div class="input-box">
                        <select  type="text" class="form-control" name="jo"  required>
                            <option selected id="l"><?php echo $job;?></option>
                            <option value=1 id="l1">Casalinga</option>
                            <option value=2 id="l2">Servizi</option>
                            <option value=3 id="l3">Admin</option>
                            <option value=4 id="l4">Operaio</option>
                            <option value=5 id="l5">Tecnico</option>
                            <option value=6 id="l6">Manager</option>
                            <option value=7 id="l7">Imprenditore</option>
                            <option value=8 id="l8">Studente</option>
                            <option value=9 id="l9">Ignoto</option>
                            <option value=10 id="l10">Disoccupato-Autonomo</option>
                            <option value=11 id="l11">Disoccupato</option>
                            <option value=12 id="l12">Ritirato</option>
                            <script type="text/javascript">
                                /*var l = document.getElementById('l');
                                if(l == document.getElementById('l1')){
                                    l1.style.display = "none";
                                }
                                if(l == document.getElementById('l2')){
                                    l2.style.display = "none";
                                }
                                if(l == document.getElementById('l3')){
                                    l3.style.display = "none";
                                }
                                if(l == document.getElementById('l4')){
                                    l4.style.display = "none";
                                }
                                if(l == document.getElementById('l5')){
                                    l5.style.display = "none";
                                }
                                if(l == document.getElementById('l6')){
                                    l6.style.display = "none";
                                }
                                if(l == document.getElementById('l7')){
                                    l7.style.display = "none";
                                }
                                if(l == document.getElementById('l8')){
                                    l8.style.display = "none";
                                }
                                if(l == document.getElementById('l9')){
                                    l9.style.display = "none";
                                }
                                if(l == document.getElementById('l10')){
                                    l10.style.display = "none";
                                }
                                if(l == document.getElementById('l11')){
                                    l11.style.display = "none";
                                }
                                if(l == document.getElementById('l12')){
                                    l12.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Maritial</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="maritia"  required >
                            <option selected id="m"><?php echo $maritial;?></option>
                            <option value=1 id="m1">Single</option>
                            <option value=2 id="m2">Sposato</option>
                            <option value=3 id="m3">Divorziato</option>
                            <script type="text/javascript">
                                /*var m = document.getElementById('m');
                                if(l == document.getElementById('m1')){
                                    m1.style.display = "none";
                                }
                                if(l == document.getElementById('m2')){
                                    m2.style.display = "none";
                                }
                                if(m == document.getElementById('m3')){
                                    m3.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Education</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="ed"  required >
                            <option selected id="e"><?php echo $edu;?></option>
                            <option value=1 id="e1">Basic(4y)</option>
                            <option value=2 id="e2">Basic(6y)</option>
                            <option value=3 id="e3">Basica(9y)</option>
                            <option value=4 id="e4">Scuola Superiore</option>
                            <option value=5 id="e5">Ignoto</option>
                            <option value=6 id="e6">Corso Professionale</option>
                            <option value=7 id="e7">Laurea</option>
                            <script type="text/javascript">
                                /*var e = document.getElementById('e');
                                if(e == document.getElementById('e1')){
                                    e1.style.display = "none";
                                }
                                if(e == document.getElementById('e2')){
                                    e2.style.display = "none";
                                }
                                if(e == document.getElementById('e3')){
                                    e3.style.display = "none";
                                }
                                if(e == document.getElementById('e4')){
                                    e4.style.display = "none";
                                }
                                 if(e == document.getElementById('e5')){
                                    e5.style.display = "none";
                                }
                                if(e == document.getElementById('e6')){
                                    e6.style.display = "none";
                                }
                                if(e == document.getElementById('e7')){
                                    e7.style.display = "none";
                                }
                                */
                            </script>
                        </select> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Deff</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="def"  required >
                            <option selected id="d"><?php echo $deff;?></option>
                            <option value=1 id="d1">No</option>
                            <option value=2 id="d2">Ignoto</option>
                            <script type="text/javascript">
                                /*var d = document.getElementById('d');
                                if(d == document.getElementById('d1')){
                                    d1.style.display = "none";
                                }
                                if(d == document.getElementById('d2')){
                                    d2.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div  class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Housing</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="housin"  required >
                            <option selected id="h"><?php echo $housing;?></option>
                            <option value=1 id="h1">Si</option>
                            <option value=2 id="h2">No</option>
                            <option value=3 id="h3">Ignoto</option>
                            <script type="text/javascript">
                                /*var h = document.getElementById('h');
                                if(h == document.getElementById('h1')){
                                    h1.style.display = "none";
                                }
                                if(h == document.getElementById('h2')){
                                    h2.style.display = "none";
                                }
                                if(h == document.getElementById('h3')){
                                    h3.style.display = "none";
                                }
                                */
                            </script>
                        </select> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Load</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="loa" required id="lo">
                            <option selected id="lo"><?php echo $load;?></option>
                            <option value=1 id="lo1">Si</option>
                            <option value=2 id="lo2">No</option>
                            <option value=3 id="lo3">Ignoto</option>
                            <script type="text/javascript">
                                /*var lo = document.getElementById('lo');
                                if(lo == document.getElementById('lo1')){
                                    lo1.style.display = "none";
                                }
                                if(lo == document.getElementById('lo2')){
                                    lo2.style.display = "none";
                                }
                                if(lo == document.getElementById('lo3')){
                                    lo3.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contact</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="contac" value="<?php echo $contact;?>" required >
                            <option selected id="co"><?php echo $contact;?></option>
                            <option value=1 id="c1">Cellulare</option>
                            <option value=2 id="c2">Telefono</option>
                            <script type="text/javascript">
                                /*var co = document.getElementById('co');
                                if(co == document.getElementById('co1')){
                                    co1.style.display = "none";
                                }
                                if(co == document.getElementById('co2')){
                                    co2.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Month</label>
                <div class="col-sm-6">
                    <div class="input-box">           
                        <select type="text" class="form-control" name="mont" required >
                            <option selected id="opt"><?php echo $month;?></option>
                            <option value=1 id="mot1">Gennaio</option>
                            <option value=2 id="mot2">Febbraio</option>
                            <option value=3 id="mot3">Marzo</option>
                            <option value=4 id="mot4">Aprile</option>
                            <option value=5 id="mot5">Maggio</option>
                            <option value=6 id="mot6">Giugno</option>
                            <option value=7 id="mot7">Luglio</option>
                            <option value=8 id="mot8">Agosto</option>
                            <option value=9 id="mot9">Settembre</option>
                            <option value=10 id="mot10">Ottobre</option>
                            <option value=11 id="mot11">Novembre</option>
                            <option value=12 id="mot12">Dicembre</option>
                            <script type="text/javascript">
                                /*var mot = document.getElementById('mot');
                                if(mot == document.getElementById('mot1')){
                                    mot1.style.display = "none";
                                }
                                if(mot == document.getElementById('mot2')){
                                    mot2.style.display = "none";
                                }
                                if(mot == document.getElementById('mot3')){
                                    mot3.style.display = "none";
                                }
                                if(mot == document.getElementById('mot4')){
                                    mot4.style.display = "none";
                                }
                                if(mot == document.getElementById('mot5')){
                                    mot5.style.display = "none";
                                }
                                if(mot == document.getElementById('mot6')){
                                    mot6.style.display = "none";
                                }
                                if(mot == document.getElementById('mot7')){
                                    mot7.style.display = "none";
                                }
                                if(mot == document.getElementById('mot8')){
                                    mot8.style.display = "none";
                                }
                                if(mot == document.getElementById('mot9')){
                                    mot9.style.display = "none";
                                }
                                if(mot == document.getElementById('mot10')){
                                    mot10.style.display = "none";
                                }
                                if(mot == document.getElementById('mot11')){
                                    mot11.style.display = "none";
                                }
                                if(mot == document.getElementById('mot12')){
                                    mot12.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Day</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="da" required>
                            <option selected id="opt"><?php echo $day;?></option>
                            <option value=1 id="opt1">Lunedì</option>
                            <option value=2 id="opt2">Martedì</option>
                            <option value=3 id="opt3">Mercoledì</option>
                            <option value=4 id="opt4">Giovedì</option>
                            <option value=5 id="opt5">Venerdì</option>
                            <script type="text/javascript">
                                /*var opt = document.getElementById('opt');
                                if(opt == document.getElementById('opt1')){
                                    opt1.style.display = "none";
                                }
                                if(opt == document.getElementById('opt2')){
                                    opt2.style.display = "none";
                                }
                                if(opt == document.getElementById('opt3')){
                                    opt3.style.display = "none";
                                }
                                if(opt == document.getElementById('opt4')){
                                    opt4.style.display = "none";
                                }
                                if(opt == document.getElementById('opt5')){
                                    opt5.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Duration</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input type="text" class="form-control" name="duration" value="<?php echo $duration;?>" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Compaign</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input min=1 max=3 type="text" class="form-control" name="compaign" value="<?php echo $compaign;?>" required> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">PayDays</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input type="text" class="form-control" name="pay" value="<?php echo $p_days;?>" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Prev</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input min=0 max=7 type="text" class="form-control" name="pre" value="<?php echo $prev;?>" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pout</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <select type="text" class="form-control" name="pout" value="<?php echo $pout;?>" required id="out">
                            <option value=0 id="out1">Non Esistente</option>
                            <option value=1 id="out2">Esistente</option>
                            <script>
                                /*var out = document.getElementById('out');
                                if(out == document.getElementById('out1')){
                                    out1.style.display = "none";
                                }
                                if(out == document.getElementById('out2')){
                                    out2.style.display = "none";
                                }
                                */
                            </script>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Emp</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input type="text" class="form-control" name="emp" value="<?php echo $emp;?>" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ConsP</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input type="text" class="form-control" name="consp" value="<?php echo $consp;?>" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ConsC</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input type="text" class="form-control" name="consc" value="<?php echo $consc;?>" required>
                    </div>
                </div>
            </div>
        </div>    
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Eur</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input type="text" class="form-control" name="eu" value="<?php echo $eur;?>" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nr</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input type="text" class="form-control" name="nr" value="<?php echo $nr;?>" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Prediction</label>
                <div class="col-sm-6">
                    <div class="input-box">
                        <input  disabled="disabled" type="text" class="form-control" name="result" value="{{result}}">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Proba</label>
                    <div class="col-sm-6">
                        <div class="input-box">
                            <input disabled="disabled" type="text" class="form-control" name="proba" value="{{probability}}">
                        </div>
                    </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <div class="container-fluid">
                        <table class="table" style="align-itemes:center;" >
                                <thead>
                                    <tr>
                                        <th><form action="" method="POST"><input style="align:center"  type="submit" class='btn btn-primary btn-sm' name="button-update" value="Modifica"></form></th>
                                        <th><input style="align:center"  type="submit" class='btn btn-primary btn-sm'  value="Invia Dati"></th>
                                    </tr> 
                                </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST['button-update'])) {
        $eta = $_POST['et'];
        $job = $_POST['jo'];
        $state = $_POST['maritia'];
        $title = $_POST['ed'];
        $deff = $_POST['def'];
        $abitation = $_POST['housin'];
        $load = $_POST['loa'];
        $tel = $_POST['contac'];
        $mouth = $_POST['mont'];
        $day = $_POST['da'];
        $durata = $_POST['duration'];
        $comp = $_POST['compaign'];
        $gpag = $_POST['pay'];
        $prev = $_POST['pre'];
        $pout = $_POST['pout'];
        $emp = $_POST['emp'];
        $cprice = $_POST['consp'];
        $cconf = $_POST['consc'];
        $eur = $_POST['eu'];
        $nr = $_POST['nr'];
        $result = $_POST['result'];
        $proba = $_POST['proba'];
        if(empty($result)||empty($proba)){
            echo  "<script> alert ('Inserisci i dati per vedee la previsione')</script>";
        }else{
            $query = "INSERT INTO feature VALUES ('',''$eta','$job','$state','$title','$deff','$abitation','$load','$tel','$mouth','$day','$durata','$comp','$gpag','$prev','$pout','$emp','$cprice','$cconf','$eur','$nr','$result')";
            $ver = mysqli_query($conn, $query);

        }

    }
    ?>
</div>
</div>


{% endblock %}

