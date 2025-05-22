<?php


$n = 3;


$problems = [
    [1, 1, 0],
    [1, 1, 1],
    [1, 0, 0]
];


$count = 0;


for ($i = 0; $i < $n; $i++) {

   
    $yes = 0;

    if ($problems[$i][0] == 1) {
        $yes++;
    }

    if ($problems[$i][1] == 1) {
        $yes++;
    }

    if ($problems[$i][2] == 1) {
        $yes++;
    }

    if ($yes >= 2) {
        $count++;
    }
}


echo "عدد المسائل اللي هيحلوها: " . $count;

?>



