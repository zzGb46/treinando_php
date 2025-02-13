<?php 



session_start();
if(isset($_SESSION['ida'])){
    echo 'Sessão existe ' .$_SESSION['ida']['nome'];
}else{
echo 'Sessão não existe';
}




