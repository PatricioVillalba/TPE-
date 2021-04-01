<?php
include 'Teatro.php';

$teat = new Teatro();
do {
    echo "--------------------------------------" . "\n";
    echo "ELIJA UNA OPCION: " . "\n";
    echo "1: Cargar Datos" . "\n";
    echo "2: Usar Datos Precargados" . "\n";
    echo "3: Ver Datos" . "\n";
    echo "4: Modificar Nombre de una Funcion" . "\n";
    echo "5: Modificar Precio de una Funcion" . "\n";
    echo "6: Modificar Nombre del Teatro" . "\n";
    echo "7: Modificar Direccion del Teatro" . "\n";
    echo "0: SALIR" . "\n";
    echo "-------------------------------------" . "\n";
    echo "Opcion: ";
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case '1':
            echo ("Cargar Nombre Teatro." . "\n");
            $nomTeatro = trim(fgets(STDIN));
            echo ("Cargar Direccion Teatro." . "\n");
            $dir = trim(fgets(STDIN));
            echo ("Cargar Nombre Funcion 1." . "\n");
            $n1 = trim(fgets(STDIN));
            echo ("Cargar precio Funcion 1." . "\n");
            $p1 = trim(fgets(STDIN));
            echo ("Cargar Nombre Funcion 2." . "\n");
            $n2 = trim(fgets(STDIN));
            echo ("Cargar precio Funcion 2." . "\n");
            $p2 = trim(fgets(STDIN));
            echo ("Cargar Nombre Funcion 3." . "\n");
            $n3 = trim(fgets(STDIN));
            echo ("Cargar precio Funcion 3." . "\n");
            $p3 = trim(fgets(STDIN));
            echo ("Cargar Nombre Funcion 4." . "\n");
            $n4 = trim(fgets(STDIN));
            echo ("Cargar precio Funcion 4." . "\n");
            $p4 = trim(fgets(STDIN));
            $teat->cargar($nomTeatro, $dir, $n1,$p1,$n2,$p2,$n3,$p3,$n4,$p4);
            break;
        case '2':
            $teat->precargado();
            echo ("Datos Cargados con exito." . "\n");
            break;
        case '3':
            $salida = $teat->__toString();
            if ($salida == '') {
                echo ("Primero debe cargar los datos." . "\n");
            } else {
                echo ($salida . "\n");
            }
            break;
        case '4':
            if ($teat->getNombreTeatro() != '') {
                echo "ELIJA UN N° Del 1 al 4 PARA CAMBIAR EL NOMBRE DE UNA FUNCION: " . "\n";
                $num = trim(fgets(STDIN));
                if (is_numeric($num)  && ($num < 5 && $num > 0)) {
                    echo "ESCRIBA NUEVO NOMBRE" . "\n";
                    $nomNuevo = trim(fgets(STDIN));
                    $teat->modificarNombreFuncion($num - 1, $nomNuevo);
                    echo ("Datos Cargados con exito." . "\n");
                } else {
                    echo "ERROR: DEBE CARGAR UN NUMERO ENTRE 1 Y 4." . "\n";
                }
            } else {
                echo ("Primero debe cargar los datos." . "\n");
            }
            break;
        case '5':
            if ($teat->getNombreTeatro() != '') {
                echo "ELIJA UN N° Del 1 al 4 PARA CAMBIAR EL PRECIO DE UNA FUNCION: " . "\n";
                $num = trim(fgets(STDIN));
                if (is_numeric($num)  && ($num < 5 && $num > 0)) {
                    echo "ESCRIBA NUEVO PRECIO" . "\n";
                    $pre = trim(fgets(STDIN));
                    $teat->modificarPrecioFuncion($num - 1, $pre);
                    echo ("Datos Cargados con exito." . "\n");
                } else {
                    echo "ERROR: DEBE CARGAR UN NUMERO ENTRE 1 Y 4." . "\n";
                }
            } else {
                echo ("Primero debe cargar los datos." . "\n");
            }
            break;
            case '6':
                if ($teat->getNombreTeatro() != '') {
                    echo "ELIJA UN NUEVO NOMBRE PARA EL TEATRO: " . "\n";
                    $nomT = trim(fgets(STDIN));
                    $teat->setNombreTeatro($nomT);
                } else {
                    echo ("Primero debe cargar los datos." . "\n");
                }    
            break;
            case '7':
                if ($teat->getNombreTeatro() != '') {
                    echo "ELIJA UNA NUEVA DIRECCION PARA EL TEATRO: " . "\n";
                    $dire = trim(fgets(STDIN));
                    $teat->setDireccion($dire);
                } else {
                    echo ("Primero debe cargar los datos." . "\n");
                }        
            break;
    }
} while ($opcion <> 0);
