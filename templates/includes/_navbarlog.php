<?php
require 'database.php';
if(isset($_POST['out'])){
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location:'home.html'");
}
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url_for('index')}}"><i class="fa fa-home" ></i></i></a></li>
                <li><a href="{{url_for('info')}}"><i class="fa fa-info-circle"></i></a></li> 
                <li><a href="{{url_for('index')}}"><i  class="fa fa-sign-out"></i></form></li>  
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Cerca">
            </form>     
        </div>
    </div>
