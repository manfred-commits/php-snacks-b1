<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// $name_parameter=$GET_['name'];
// $mail_parameter=$GET_['mail'];
// $age_parameter=$GET_['age'];
$name_parameter='manfredi';
$mail_parameter='manfredipiraino@gmail.com';
$age_parameter=25;

if(strlen($name_parameter)>3 && strpos($mail_parameter,".") && strpos($mail_parameter,"@") && is_numeric($age_parameter)){
    echo "Accesso riuscito";
}else{
    echo "Accesso negato";
}