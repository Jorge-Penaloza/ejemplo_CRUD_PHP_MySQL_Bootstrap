function limitar(e, contenido, caracteres)
{
    // obtenemos la tecla pulsada
    var unicode=e.keyCode? e.keyCode : e.charCode;
    // Permitimos las siguientes teclas:
    // 8 backspace
    // 46 suprimir
    // 13 enter
    // 9 tabulador
    // 37 izquierda
    // 39 derecha
    // 38 subir
    // 40 bajar
    if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40)
        return true;
    // Si ha superado el limite de caracteres devolvemos false
    if(contenido.length>=caracteres)
    {
        return false;
    }
    else
    {
        // Permitimos los siguientes numeros:
        // 48 -> 0 o 96
        // 49 -> 1 o 97
        // 50 -> 2 o 98
        // 51 -> 3 o 99
        // 52 -> 4 o 100
        // 53 -> 5 o 101
        // 54 -> 6 o 102
        // 55 -> 7 o 103
        // 56 -> 8 o 104
        // 57 -> 9 o 105
        if( (unicode >= 48 &&  unicode <= 57) || (unicode >= 96 &&  unicode <= 105))
            return true;
        else
            return false;
    }
    return true;
}

