<?php
function encriptar($mensaje)
{
    $salida = '';
    $mensaje = str_replace('a', '/', $mensaje);
    $mensaje = str_replace('b', '=', $mensaje);
    $mensaje = str_replace('c', ')', $mensaje);
    $mensaje = str_replace('d', '!', $mensaje);
    $mensaje = str_replace('e', '<', $mensaje);
    $mensaje = str_replace('f', '+', $mensaje);
    $mensaje = str_replace('g', '[', $mensaje);
    $mensaje = str_replace('h', ']', $mensaje);
    $mensaje = str_replace('i', '¬', $mensaje);
    $mensaje = str_replace('j', '&', $mensaje);
    $mensaje = str_replace('k', '°', $mensaje);
    $mensaje = str_replace('l', '_', $mensaje);
    $mensaje = str_replace('m', '@', $mensaje);
    $mensaje = str_replace('n', '↕', $mensaje);
    $mensaje = str_replace('o', '^', $mensaje);
    $mensaje = str_replace('p', '*', $mensaje);
    $mensaje = str_replace('q', '|', $mensaje);
    $mensaje = str_replace('r', '☼', $mensaje);
    $mensaje = str_replace('s', '♫', $mensaje);
    $mensaje = str_replace('t', '♀', $mensaje);
    $mensaje = str_replace('u', '♪', $mensaje);
    $mensaje = str_replace('v', '►', $mensaje);
    $mensaje = str_replace('w', '♥', $mensaje);
    $mensaje = str_replace('x', '♣', $mensaje);
    $mensaje = str_replace('y', '•', $mensaje);
    $mensaje = str_replace('z', '○', $mensaje);
    $mensaje = str_replace('á', '%', $mensaje);
    $mensaje = str_replace('é', '╚', $mensaje);
    $mensaje = str_replace('í', '}', $mensaje);
    $mensaje = str_replace('ó', '{', $mensaje);
    $mensaje = str_replace('ú', '◄', $mensaje);
    $mensaje = str_replace(' ', '☺', $mensaje);
    //mayus
    $mensaje = str_replace('A', '‼', $mensaje);
    $mensaje = str_replace('B', '§', $mensaje);
    $mensaje = str_replace('C', '↨', $mensaje);
    $mensaje = str_replace('D', '↓', $mensaje);
    $mensaje = str_replace('E', '←', $mensaje);
    $mensaje = str_replace('F', '↔', $mensaje);
    $mensaje = str_replace('G', '▼', $mensaje);
    $mensaje = str_replace('H', '☻', $mensaje);
    $mensaje = str_replace('I', '♦', $mensaje);
    $mensaje = str_replace('J', '♠', $mensaje);
    $mensaje = str_replace('K', '♪', $mensaje);
    $mensaje = str_replace('L', '◘', $mensaje);
    $mensaje = str_replace('M', '◙', $mensaje);
    $mensaje = str_replace('N', '♂', $mensaje);
    $mensaje = str_replace('O', '¶', $mensaje);
    $mensaje = str_replace('P', '▬', $mensaje);
    $mensaje = str_replace('Q', '↑', $mensaje);
    $mensaje = str_replace('R', '→', $mensaje);
    $mensaje = str_replace('S', '∟', $mensaje);
    $mensaje = str_replace('T', '®', $mensaje);
    $mensaje = str_replace('U', '¥', $mensaje);
    $mensaje = str_replace('V', '‡', $mensaje);
    $mensaje = str_replace('W', '†', $mensaje);
    $mensaje = str_replace('X', '±', $mensaje);
    $mensaje = str_replace('Y', '‰', $mensaje);
    $mensaje = str_replace('Z', '©', $mensaje);
    //numero
    $mensaje = str_replace('1', '⌂', $mensaje);
    $mensaje = str_replace('2', 'ƒ', $mensaje);
    $mensaje = str_replace('3', 'Œ', $mensaje);
    $mensaje = str_replace('4', 'Ž', $mensaje);
    $mensaje = str_replace('5', 'µ', $mensaje);
    $mensaje = str_replace('6', '█', $mensaje);
    $mensaje = str_replace('7', '▄', $mensaje);
    $mensaje = str_replace('8', 'ø', $mensaje);
    $mensaje = str_replace('9', '╬', $mensaje);
    $salida = $mensaje;
    return $salida;
}



function desencriptar($mensaje)
{

    $salida = '';
    $mensaje = str_replace('/', 'a', $mensaje);
    $mensaje = str_replace('=', 'b', $mensaje);
    $mensaje = str_replace(')', 'c', $mensaje);
    $mensaje = str_replace('!', 'd', $mensaje);
    $mensaje = str_replace('<', 'e', $mensaje);
    $mensaje = str_replace('+', 'f', $mensaje);
    $mensaje = str_replace('[', 'g', $mensaje);
    $mensaje = str_replace(']', 'h', $mensaje);
    $mensaje = str_replace('¬', 'i', $mensaje);
    $mensaje = str_replace('&', 'j', $mensaje);
    $mensaje = str_replace('°', 'k', $mensaje);
    $mensaje = str_replace('_', 'l', $mensaje);
    $mensaje = str_replace('@', 'm', $mensaje);
    $mensaje = str_replace('↕', 'n', $mensaje);
    $mensaje = str_replace('^', 'o', $mensaje);
    $mensaje = str_replace('*', 'p', $mensaje);
    $mensaje = str_replace('|', 'q', $mensaje);
    $mensaje = str_replace('☼', 'r', $mensaje);
    $mensaje = str_replace('♫', 's', $mensaje);
    $mensaje = str_replace('♀', 't', $mensaje);
    $mensaje = str_replace('♪', 'u', $mensaje);
    $mensaje = str_replace('►', 'v', $mensaje);
    $mensaje = str_replace('♥', 'w', $mensaje);
    $mensaje = str_replace('♣', 'x', $mensaje);
    $mensaje = str_replace('•', 'y', $mensaje);
    $mensaje = str_replace('○', 'z', $mensaje);
    $mensaje = str_replace('%', 'á', $mensaje);
    $mensaje = str_replace('╚', 'é', $mensaje);
    $mensaje = str_replace('}', 'í', $mensaje);
    $mensaje = str_replace('{', 'ó', $mensaje);
    $mensaje = str_replace('◄', 'ú', $mensaje);
    $mensaje = str_replace('☺', ' ', $mensaje);
    //MAYUS
    $mensaje = str_replace('‼', 'A', $mensaje);
    $mensaje = str_replace('§', 'B', $mensaje);
    $mensaje = str_replace('↨', 'C', $mensaje);
    $mensaje = str_replace('↓', 'D', $mensaje);
    $mensaje = str_replace('←', 'E', $mensaje);
    $mensaje = str_replace('↔', 'F', $mensaje);
    $mensaje = str_replace('▼', 'G', $mensaje);
    $mensaje = str_replace('☻', 'H', $mensaje);
    $mensaje = str_replace('♦', 'I', $mensaje);
    $mensaje = str_replace('♠', 'J', $mensaje);
    $mensaje = str_replace('♪', 'K', $mensaje);
    $mensaje = str_replace('◘', 'L', $mensaje);
    $mensaje = str_replace('◙', 'M', $mensaje);
    $mensaje = str_replace('♂', 'N', $mensaje);
    $mensaje = str_replace('¶', 'O',  $mensaje);
    $mensaje = str_replace('▬', 'P', $mensaje);
    $mensaje = str_replace('↑', 'Q',  $mensaje);
    $mensaje = str_replace('→', 'R', $mensaje);
    $mensaje = str_replace('∟', 'S',  $mensaje);
    $mensaje = str_replace('®', 'T', $mensaje);
    $mensaje = str_replace('¥', 'U', $mensaje);
    $mensaje = str_replace('‡', 'V',  $mensaje);
    $mensaje = str_replace('W', '†', $mensaje);
    $mensaje = str_replace('±', 'X', $mensaje);
    $mensaje = str_replace('‰', 'Y', $mensaje);
    $mensaje = str_replace('©', 'Z',  $mensaje);
    //numero 
    $mensaje = str_replace('⌂', '1', $mensaje);
    $mensaje = str_replace('ƒ', '2', $mensaje);
    $mensaje = str_replace('Œ', '3', $mensaje);
    $mensaje = str_replace('Ž', '4',  $mensaje);
    $mensaje = str_replace('µ', '5', $mensaje);
    $mensaje = str_replace('█', '6', $mensaje);
    $mensaje = str_replace('▄', '7', $mensaje);
    $mensaje = str_replace('ø', '8', $mensaje);
    $mensaje = str_replace('╬', '9', $mensaje);

    $salida = $mensaje;
    return $salida;
}
