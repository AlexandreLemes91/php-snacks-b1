<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    
    <?php 
    /**
     * PHP Snack 1:
     * Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
     * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema:
     * Olimpia Milano - Cantù | 55-60
     */

    //dixhiarazione var
    $matches = [
        [
            'home' => 'Alpha',
            'guests' => 'Beta',
            'home_points' => rand(30, 110),
            'guests_points' => rand(30, 110),
        ],
        [
            'home' => 'Gamma',
            'guests' => 'Delta',
            'home_points' => rand(30, 110),
            'guests_points' => rand(30, 110),
        ],
        [
            'home' => 'Espilon',
            'guests' => 'Zeta',
            'home_points' => rand(30, 110),
            'guests_points' => rand(30, 110),
        ],
    ];

    //echo var_dump($matches);
    ?>

    <h2>SNACK 1</h2>

    <ul>
        <?php for( $i=0; $i<count($matches); $i++ ) {
            $e = $matches[$i];
        ?>
        <li><?php echo $e['home'] . ' - ' . $e['guests'] . ' | ' . $e['home_points'].'-'.$e['guests_points'] ?></li>
        <?php }?>
    </ul>

    <hr>
    
    <?php
    /**
     * PHP Snack 2:
     * Passare come parametri GET (query string) name, mail e age
     * verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * 1. name sia più lungo di 3 caratteri
     * 2. che mail contenga un punto e una chiocciola
     * 3. che age sia un numero.
     * Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     */

    //GET
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    //echo var_dump($age);
    ?>

    <h2>SNACK 2</h2>
    <?php
        if(strlen($name) < 4 
            || strpos($mail, '@') === false 
            || strpos($mail, '.') === false 
            || !is_numeric($age) ){
                echo 'Accesso negato!';
            }else{
                echo 'Accesso riuscito!';
            }
    ?>

    <hr>

    <h2>SNACK 3</h2>

    <?php 
    /**
     * PHP Snack 3 Bonus (solo come bonus e solo se completati i due precedenti)
     * Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
     */
    
    $array = [];
    $maxNum = 15;
    while( count($array) < $maxNum ){
        $num = rand(1,15);
        if( !in_array($num, $array)){
            $array[] = $num;
        }
    }

    echo var_dump($array);
    
    ?>


</body>
</html>