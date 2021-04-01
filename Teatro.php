<?php

class teatro
{

    // ATRIBUTOS 
    private $nombreTeatro;
    private $direccion;
    private $funciones;

    // CONSTRUCTORES    
    public function __construct()
    {
        $this->nombreTeatro = '';
        $this->direccion = '';
        $this->funciones = '';
    }

    // GET 
    public function getNombreTeatro()
    {
        return $this->nombreTeatro;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getFunciones()
    {
        return $this->funciones;
    }

    // SET 
    public function setNombreTeatro($n)
    {
        $this->nombreTeatro = $n;
    }
    public function setDireccion($d)
    {
        $this->direccion = $d;
    }

    public function setFunciones($f)
    {
        $this->funciones = $f;
    }


    // METODOS
    public function cargar($nomTeatro, $dir, $n1,$p1,$n2,$p2,$n3,$p3,$n4,$p4)
    {
        $this->setNombreTeatro($nomTeatro);
        $this->setDireccion($dir);
        $this->setFunciones(array (["nombre"=>$n1,"precio"=>$p1],["nombre"=>$n2,"precio"=>$p2],["nombre"=>$n3,"precio"=>$p3],["nombre"=>$n4,"precio"=>$p4]));
    }

    public function precargado()
    {
        $this->setNombreTeatro('Colon');
        $this->setDireccion('Cerrito 628');
        $this->setFunciones(array(["nombre" => 'mañana', "precio" => 100], ["nombre" => 'tarde', "precio" => 200], ["nombre" => 'noche', "precio" => 500], ["nombre" => 'madrugada', "precio" => 400]));
    }

    public function modificarNombreFuncion($i, $nom)
    {
        $varArreglo = $this->getFunciones();
        $varArreglo[$i]['nombre'] = $nom;
        $this->setFunciones($varArreglo);
    }

    public function modificarPrecioFuncion($i, $prec)
    {
        $varArreglo = $this->getFunciones();
        $varArreglo[$i]['precio'] = $prec;
        $this->setFunciones($varArreglo);
    }

    public function __toString()
    {
        $salida = '';
        if ($this->getNombreTeatro() != '') {
            $salida = "Nombre Teatro: " . $this->getNombreTeatro() .
                "\n" . "Direccion: " . $this->getDireccion() . "\n";

            $i = 1;
            foreach ($this->funciones as $funcion) {
                $salida = $salida . 'Funcion ' . $i . ': ' . $funcion['nombre'] . ' $' . $funcion['precio'] . "\n";
                $i++;
            }
        }
        return $salida;
    }
}


