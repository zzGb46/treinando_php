<?php 

if (!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['ida'])){
    echo 'Sessão existe ' .$_SESSION['ida']['idade'];
}else{
echo 'Sessão não existe';
}



