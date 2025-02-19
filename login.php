<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
include('php/index.php');

    if(isset($_POST['email']) && $_POST['email'] >0){

        if(!isset($_SESSION))
        session_start();

        $_SERVER['email'] = $mysqli->escape_string($_POST['email']);
        $_SERVER['senha'] = md5(md5($_POST['senha']));

        $sqlcode = "SELECT senha_cliente, email_cliente from tbl_gabrielm_cliente 
        where email_cliente = '$_POST[email]'";
        $sql_query = $mysqli->query($sqlcode) or die($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total =$sql_query->num_rows;
        
        if($total == 0){
            $erro[]= "este email não pertence á nenum usuário.";
        }
        
        // header('Location: '.'php/index.php');
        // exit();
        

    }

    ?>
    <form action="php/index.php" method="post"> 
        <input type="text" name="email" value="">
        <input type="password" value="" name="senha">
        <input type="submit" name="">
    </form>
    
</body>
</html>