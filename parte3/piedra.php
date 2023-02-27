<?php
// Función para generar la jugada de la computadora
function generarJugadaComputadora() {
    $opciones = array('piedra', 'papel', 'tijeras');
    return $opciones[array_rand($opciones)];
}

// Función para determinar el ganador de una ronda
function determinarGanador($jugadaUsuario, $jugadaComputadora) {
    if ($jugadaUsuario == $jugadaComputadora) {
        return 'empate';
    } elseif ($jugadaUsuario == 'piedra' && $jugadaComputadora == 'tijeras') {
        return 'usuario';
    } elseif ($jugadaUsuario == 'papel' && $jugadaComputadora == 'piedra') {
        return 'usuario';
    } elseif ($jugadaUsuario == 'tijeras' && $jugadaComputadora == 'papel') {
        return 'usuario';
    } else {
        return 'computadora';
    }
}

// Función para mostrar el resultado de una ronda
function mostrarResultado($jugadaUsuario, $jugadaComputadora, $ganador) {
    echo "Usted eligió $jugadaUsuario\n";
    echo "La computadora eligió $jugadaComputadora\n";
    if ($ganador == 'empate') {
        echo "Empate\n";
    } else {
        echo "El ganador es $ganador\n";
    }
}

// Función para pedir al usuario que ingrese su jugada
function pedirJugadaUsuario() {
    $jugada = '';
    while ($jugada != 'piedra' && $jugada != 'papel' && $jugada != 'tijeras') {
        echo "Ingrese su jugada (piedra, papel o tijeras): ";
        $jugada = strtolower(trim(fgets(STDIN)));
    }
    return $jugada;
}

// Función principal del juego
function jugarCachipun() {
    echo "¡Bienvenido al juego de cachipún!\n";
    $puntosUsuario = 0;
    $puntosComputadora = 0;
    $rondas = 1;
    while ($puntosUsuario < 3 && $puntosComputadora < 3) {
        echo "Ronda $rondas:\n";
        $jugadaUsuario = pedirJugadaUsuario();
        $jugadaComputadora = generarJugadaComputadora();
        $ganador = determinarGanador($jugadaUsuario, $jugadaComputadora);
        mostrarResultado($jugadaUsuario, $jugadaComputadora, $ganador);
        if ($ganador == 'usuario') {
            $puntosUsuario++;
        } elseif ($ganador == 'computadora') {
            $puntosComputadora++;
        }
        echo "Puntaje: Usted $puntosUsuario - Computadora $puntosComputadora\n";
        $rondas++;
    }
    if ($puntosUsuario > $puntosComputadora) {
        echo "¡Felicitaciones! Usted ha ganado el juego.\n";
    } else {
        echo "Lo siento, ha perdido el juego.\n";
    }
}

// Llamar a la función principal para iniciar el juego
jugarCachipun();
?>