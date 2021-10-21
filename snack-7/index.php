<?php
    // Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

// FUNZIONI

function getAverage($array){
    $average=0;
    $length=0;

    

        $length=count($array['voti']);

        foreach($array['voti'] as $numbers){

            $average+=$numbers;
        }

        
        $average=$average / $length;
    
    return round($average);
}

// /FUNZIONI


$studenti=[
    [        
        "nome"=>"Samuele",
        "cognome"=>"Madrigali",
        "voti"=>[10,10,10,10,10],
    ],
    [        
        "nome"=>"Alessandra",
        "cognome"=>"Madrigali",
        "voti"=>[rand(2,10),rand(2,10),rand(2,10),rand(2,10),rand(2,10)],
    ],
    [        
        "nome"=>"Nemo",
        "cognome"=>"Madrigali",
        "voti"=>[rand(2,10),rand(2,10),rand(2,10),rand(2,10),rand(2,10)],
    ],
]



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link to font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
        <!-- /link to font family -->
    <!-- link to ccss -->
    <link rel="stylesheet" href="./css/style7.css">
    <!-- /link to css -->
    <title>Snack-7</title>
</head>
<body>
    <section class="main-container">
    <?php foreach($studenti as $studente){?>
        <h2>
        <?php echo "{$studente['nome']} {$studente['cognome']}";?>
        </h2>
        <h3>

            <?php echo "Media voti studente:". getAverage($studente);?>

        </h3>

    <?php }?>
        
    </section>


</body>
</html>