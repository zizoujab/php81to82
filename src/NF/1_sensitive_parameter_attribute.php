<?php

function login(
    string $login,
    string $secretPassword
) {
    throw new Exception('Error!');
}


try {
    login('zizoujab', 'secret');
} catch (Exception $e) {
    echo $e, PHP_EOL, PHP_EOL;
}

function sensitiveParameterLogin(
    string $login,
    #[\SensitiveParameter]
    string $secretPassword
) {
    throw new Exception('Error!');
}
try {
    sensitiveParameterLogin('zizoujab', 'secret');
} catch (Exception $e) {
    echo $e, PHP_EOL, PHP_EOL;
    $stackTrace = $e->getTrace();
    // to get the value
     var_dump($stackTrace[0]['args'][1]->getValue());
}
