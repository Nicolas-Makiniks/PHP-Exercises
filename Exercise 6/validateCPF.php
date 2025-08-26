<?php
    echo validate(readline("Enter your CPF with only numbers: "));

    /*
        Code from Rafael Neri:
        https://gist.github.com/rafael-neri/ab3e58803a08cb4def059fce4e3c0e40
    */
    function validate(string $cpf) {
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        
        if (strlen($cpf) != 11) {
            return 'Invalid CPF length';
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return 'Invalid CPF format';
        }

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return 'Invalid CPF';
            }
        }
        return "{$cpf} is a Valid CPF";
    }
?>