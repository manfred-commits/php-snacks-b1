<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name_parameter=$_GET['name'];
$mail_parameter=$_GET['mail'];
$age_parameter=$_GET['age'];
$verified=false;

if(!empty($name_parameter) && !empty($mail_parameter) && !empty($age_parameter)){
    // basic debug static
    // $name_parameter='manfredi';
    // $mail_parameter='manfredipiraino@gmail.com';
    // $age_parameter=25;
    
    if(strlen($name_parameter)>3 && (strpos($mail_parameter,".")||strpos($mail_parameter,".") == 0) && strpos($mail_parameter,"@") && is_numeric($age_parameter)){
        $verified=true;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <form action="">
        <input type="text" name="name">
        <input type="text" name="mail">
        <input type="text" name="age">
        <input type="submit">
    </form>
    
    <?php if(!empty($name_parameter) && !empty($mail_parameter) && !empty($age_parameter)){?>
        
        <?php if($verified){?>
        <h2>Acesso riuscito</h2>
        <?php }else{?>
        <h2>Acesso Negato</h2>
        <?php }?>

    <?php }else{?>
        <h2>Compila i campi per effettuare l'accesso</h2>
    <?php }?>


</body>
</html>