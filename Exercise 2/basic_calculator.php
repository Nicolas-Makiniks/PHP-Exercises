<?php
    echo "\nThis calculator have these operators:\nAddition: +\nSubtraction: -\nMultiplication: *\nDivision: /\nExponentiation: **\nRemainder: %\n\n";
    $validOperator = false;
    $userFirstNumber = getUserNumber();
    while($validOperator === false) {
        $userOperator = readline("Enter an operator: ");
        switch($userOperator) {
            case "+":
                $userSecondNumber = getUserNumber();
                $total = $userFirstNumber + $userSecondNumber;
                echo "{$userFirstNumber} + {$userSecondNumber} = {$total}";
                $validOperator = true;
                break;
            case "-":
                $userSecondNumber = getUserNumber();
                $total = $userFirstNumber - $userSecondNumber;
                echo "{$userFirstNumber} - {$userSecondNumber} = {$total}";
                $validOperator = true;
                break;
            case "*":
                $userSecondNumber = getUserNumber();
                $total = $userFirstNumber * $userSecondNumber;
                echo "{$userFirstNumber} * {$userSecondNumber} = {$total}";
                $validOperator = true;
                break;
            case "/":
                $userSecondNumber = getUserNumber();
                if ($userSecondNumber == 0) {
                    while($userSecondNumber == 0) {
                        echo "Can't divide by 0\n";
                        $userSecondNumber = getUserNumber();
                    }
                }
                $total = $userFirstNumber / $userSecondNumber;
                echo "{$userFirstNumber} / {$userSecondNumber} = {$total}";
                $validOperator = true;
                break;
            case "**":
                $userSecondNumber = getUserNumber();
                $total = $userFirstNumber ** $userSecondNumber;
                echo "{$userFirstNumber} ** {$userSecondNumber} = {$total}";
                $validOperator = true;
                break;
            case "%":
                $userSecondNumber = getUserNumber();
                $total = $userFirstNumber % $userSecondNumber;
                echo "{$userFirstNumber} % {$userSecondNumber} = {$total}";
                $validOperator = true;
                break;
        }
    }

    function getUserNumber() {
        $userInput = readline("Enter a number: ");
        while(!is_numeric($userInput)) {
            $userInput = readline("Please entrer a valid number: ");
        }
        return $userInput;
    }
?>