<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
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
    <link rel="stylesheet" href="./css/style6.css">
    <!-- /link to css -->
    <title>Snack-6</title>
</head>
<body>
    <section class="main-container">
        
        
        <?php foreach($db as $keyClass => $value){?>
            <?php if($keyClass=='teachers'){ ?>
                <div class="grey-cont">

                    <ul>
                        <li>
                            <h2>
                                <?php echo $keyClass;?>
                            </h2>
                        </li>
    
                    </ul>
                    <ul>
                    <?php foreach($value as $names){?>
                
                        <li>
                            <h4>
                                <?php echo "{$names['name']} {$names['lastname']}"       ?>
                            </h4>        
                        </li>
                    <?php }?>
                    </ul>
                </div>

            <?php }else{ ?>
                <div class="green-cont">

                    <ul>
                        <li>
                            <h2>
                                <?php echo $keyClass;?>
                            </h2>
                        </li>
    
                    </ul>
                    <ul>
                    <?php foreach($value as $names){?>
                
                        <li>
                            <h4>
                                <?php echo "{$names['name']} {$names['lastname']}"       ?>
                            </h4>        
                        </li>
                    <?php }?>
                    </ul>
                </div>
            <?php } ?>
        <?php }?>
    </section>


</body>
</html>