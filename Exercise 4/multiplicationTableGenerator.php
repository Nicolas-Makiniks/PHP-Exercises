<?php
    $userInputNumber = readline("Enter a number for multiplication: ");
    while(!is_numeric($userInputNumber)) {
        $userInputNumber = readline("Enter a valid number: ");
    }
    for($i=0;$i<=10;$i++) {
        $total = $userInputNumber*$i;
        echo "\n{$userInputNumber} x {$i} = {$total}";
    }
?>