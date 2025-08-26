<?php
    $total;
    
    $userInputValue = readline("Enter a number value: ");
    while(!is_numeric($userInputValue)){
        $userInputValue = readline("Enter a number value: ");
    }

    echo "\n1- BRL -> USD\n2- BRL -> EUR\n3- USD -> BRL\n4- USD -> EUR\n5- EUR -> BRL\n6- EUR -> USD\n\n";
    $userExchange = readline("What type of exchange do you want?: ");
    while(!is_numeric($userExchange)) {
        $userExchange = readline("Enter a list number: ");
    }
    switch($userExchange) {
        case 1: //BRL -> USD : R$ -> $
            $total = exchangeCalculator($userInputValue, 544);
            echo "Exchange from R\${$userInputValue} to \${$total}";
            break;
        case 2: //BRL -> EUR : R$ -> €
            $total = exchangeCalculator($userInputValue, 633);
            echo "Exchange from R\${$userInputValue} to €{$total}";
            break;
        case 3: //USD -> BRL : $ -> R$
            $total = exchangeCalculator($userInputValue, -544);
            echo "Exchange from \${$userInputValue} to R\${$total}";
            break;
        case 4: //USD -> EUR : $ -> €
            $total = exchangeCalculator($userInputValue, -86);
            echo "Exchange from R\${$userInputValue} to \${$total}";
            break;
        case 5: //EUR -> BRL : € -> R$
            $total = exchangeCalculator($userInputValue, -633);
            echo "Exchange from R\${$userInputValue} to \${$total}";
            break;
        case 6: //EUR -> USD : € -> $
            $total = exchangeCalculator($userInputValue, -116);
            echo "Exchange from R\${$userInputValue} to \${$total}";
            break;
    }

    function exchangeCalculator($userInputValue, $exchange) {
        if ($exchange > 0) {
            $total = round($userInputValue / ($exchange / 100), 2);
            return $total;
        }
        $total = round($userInputValue * (-$exchange / 100), 2);
        return $total;
    }
?>