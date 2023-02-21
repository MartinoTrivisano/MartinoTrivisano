<?php
require 'database.php';
if(isset($_POST['out'])){
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location:'home.html'");
}
?>


<div class="col-12 col-md-3 col-xl-2 bd-sidebar">
    <div class="sidebar-wrapper">
        <style type="text/css">
            .bd-sidebar{
                background-color:#ededed;
                margin-top: -20px;
                margin-right: 30px;
                padding-right: -100px;
                width: 15%;
                height: auto;
                border-radius: 10px;
            }
        </style>
        <div class="sidebar-linklist-wrapper">
            <div class="container-fluid">
                <style type="text/css">
                    .circular-landspace{
                        display: inline-block;
                        position: relative;
                        width: 50px;
                        height: 50px;
                        overflow: hidden;
                        border-radius: 50%;
                        margin-top: 50px;
                        align-items: center;
                    }
                    .circular-landspace img{
                        width: auto;
                        height: 100%;
                        margin-left: -50px;
                    }
                </style>
                    <img class="circular-landspace" src="https://www.artemedialab.it/wp-content/uploads/2019/04/immagini-sfondo-1-700x400.jpg">
                    <strong>{{Username}}</strong>
                <a href="{{url_for('index')}}" name="out">Logout</a>
            </div>  

            <div class="link-list-wrapper">
                <ul class="link-list">
                    <style type="text/css">
                        ul{
                            margin-top: 20px;
                        }
                    </style>
                    <hr>
                    <li>
                        <a class="list-item medium active left-icon" href="{{url_for('inserisci')}}">Inserisci Dati</a>
                    </li>
                </ul>
                <ul class="link-list">
                    <li>
                        <a class="list-item medium active left-icon" href="{{url_for('dati')}}">Visualizza Dati</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>   
</div>
    