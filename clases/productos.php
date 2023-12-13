<?php
class Producto{
    public function __construct(String $nombre, int $cantidad){
        $this -> nombre = $nombre;
        $this -> cantidad = $cantidad;
    }

    public function setNombre($nombre){
       return $this-> nombre = comprobarNombre($nombre);
    }

    public function setCantidad($cantidad){
        return $this -> cantidad = comprobarCantidad($cantidad);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    private function comprobarNombre($nombre){
        if(is_null($nombre) || is_numeric($nombre)) throw new Exception ("El nombre del producto no puede ser nulo ni numérico.");
        else{return $nombre;}
    }

    private function comprobarCantidad($cantidad){
        if(is_null($cantidad)|| !is_numeric($cantidad) || $cantidad < 0) throw new Exception ("La cantidad no puede ser nula, no numérica o inferior a 0");
    }

    public function __toString(){
        return "Nombre: {$this->nombre}, Cantidad: {$this->cantidad}";
    }
}


class Ropa extends Producto{

    public function __construct(String $nombre, int $cantidad, int $talla, String $pais){
        parent::__construct($nombre, $cantidad);
        $this -> talla = $talla;
        $this -> pais = $pais;
    }

    public function getTalla($talla):int{
        return $this->talla;
    }

    public function getPais($pais):String{
        return $this -> pais;
    }

    public function setTalla($talla):int{
        return $this->talla = ComprobarTalla($talla);
    }

    public function setPais($pais):String{
        return $this -> pais = ComprobarPais($pais);
    }

    private function ComprobarTalla($talla):int{
        if(is_numeric($talla) || is_null($talla)){throw new Exception ("No se permiten tallas numericas o nulas");}
        else{return $talla;}
    }

    private function ComprobarPais($pais):string{
        if(is_numeric($pais) || is_null($pais)){throw new Exception ("No se permiten números o datos nulos en país.");}
        else{return $pais;}
    }

    public function __toString() {
        return parent::__toString() . ", Talla: ". getTalla(). "Procedencia: " .getPais();
    }
}

class Variados extends Producto{

    public function __construct(String $nombre, int $cantidad, int $garantia){
        parent::__construct($nombre, $cantidad);
        $this -> garantia = $garantia;
    }

    public function setGarantia($garantia):int{
        return $this -> garantia = ComprobarGarantia($garantia);
    }

    public function getGarantia():int{
        return $this -> garantia;
    }

    private function ComprobarGarantia($garantia):int{
        if(!is_numeric($garantia) || is_null($garantia)) throw new Exception("No se permiten datos no numericos o nulos en la garantia.");
        else{return $garantia;}
    }

    public function __toString(){
        return parent::__toString() . "Garantia: " . getGarantia();
    }

}


?>