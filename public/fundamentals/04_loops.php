<?php
    //Loopar: while, do-while, for, foreach

    $post = [
        'First',
        'Second',
        'Third',
        'Forth',
        'Fifth'
    ];

    $posts = [
        'First' => 'Pelle',
        'Second' => 'Stina',
        'Third' => 'Elvis',
        'Forth' => 'Anna',
        'Fifth' => 'Oscar',
    ];

    for($i = 0; $i < count($post); $i++){
        echo $post[$i] . ' ';
    }

    foreach($post as $item){
        echo '<br>' . $item;
    }

    echo '<br><br>';
    foreach($posts as $key => $value){
        echo $key . ' ' . $value . '<br>';
    }
    echo '<br>';
    var_dump($posts);
?>