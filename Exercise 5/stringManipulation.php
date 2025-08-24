<?php
    //strlen - comprimento
    //str_word_count - contar palavras
    //strrev - inerter
    //mb_* - suporta acentos
    //mb_strlen - não sei

    $userInput = readline("Enter a word: ");

    echo "Your word have ".strlen($userInput)." letters, ".str_word_count($userInput)." words, and \"".strrev($userInput)."\" is reversed version.";
?>