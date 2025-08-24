<?php
    function getUserInputTemperature() {
        $validCharacter = false;
        echo "Choose a temperature:\nC: Celsius\nF: Fahrenheit\n\n";
        while($validCharacter === false) {
            $userInputTemperature = strtoupper(readline("Enter a valid character: "));
            switch($userInputTemperature) {
                case "C":
                    $validCharacter = true;
                    break;
                case "F":
                    $validCharacter = true;
                    break;
            }
        }
        return $userInputTemperature;
    }

    function getUserInputNumber() {
        $userInputNumber = readline("Enter a number: ");
        while(!is_numeric($userInputNumber)) {
            $userInputNumber = readline("Enter a valid number: ");
        }
        return $userInputNumber;
    }

    function temperatureConversor($userTemperature, $userNumber) {
        switch($userTemperature) {
            case "C":
                $convertedTemperature = round(($userNumber*9/5)+32, 1) . "°F";
                break;
            case "F":
                $convertedTemperature = round(($userNumber-32)*5/9, 1)."°C";
                break;
        }
        return $convertedTemperature;
    }

    echo "\nTemperature conversor of Celsius x Fahrenheit\n\n";
    $userTemperature = getUserInputTemperature();
    $userNumber = getUserInputNumber();
    $convertedTemperature = temperatureConversor($userTemperature, $userNumber);

    echo "{$userNumber}°{$userTemperature} converted to {$convertedTemperature}";
?>