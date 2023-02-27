<?php
function esPrimo($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function listaPrimos($limite) {
    $primos = array();
    for ($i = 2; $i <= $limite; $i++) {
        if (esPrimo($i)) {
            $primos[] = $i;
        }
    }
    return $primos;
}
function factoresPrimos($n) {
    $factores = array();
    $divisor = 2;
    while ($n > 1) {
        if ($n % $divisor == 0) {
            $factores[] = $divisor;
            $n /= $divisor;
        } else {
            $divisor++;
        }
    }
    return $factores;
}
		?>