<?php

?>

<div class="container clearfix">
    <nav class="navbar navbar-default">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Gamename</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Test</a></li>
            </ul>
        </div>
    </nav>


    <span id="welcome-msg"><?=$this->User->welcome()?></span>
    <span id="logout"><?=$this->User->logout()?></span>
</div>
