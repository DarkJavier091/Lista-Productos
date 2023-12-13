<?php
# Si intenta el usuario dirigirse directamente a la página de finalización de registro para acceder a los datos,
# esta direccionará al usuario de vuelta a la página de resgistro.
if(!$_POST){
    header('Location: http://localhost:3000/FundamentosPHP/Proyecto_1/Parte%201/registro.php');
}
else{
    
    class registro{

        # Constructor de la clase Registro, unicamente toma los valores del nombre del local y del propietario.
        public function __construct($nombre_local, $nombre_propietario) {
            $this->nombre_local = $nombre_local;
            $this->nombre_propietario = $nombre_propietario;
            $this->id = $this->generarCifrado();
            $this->passwd = $this->generarCifrado();
        }

        # Encargado de obtener el nombre del local.
        # Valida la información obtenida, si no es correcta salta una excepción.
        # En caso de ser valido devuelve el nombre del local.
        public function setNombre_Local($nombre_local) {
            $this->nombre_local = $this->comprobarNombre($nombre_local);
        }
        
        # Encargado de obtener el nombre del propietario.
        # Valida la información obtenida, si no es correcta salta una excepción.
        # En caso de ser valido devuelve el nombre del propietario.
        public function setNombre_Propietario($nombre_propietario) {
            $this->nombre_propietario = $this->comprobarNombre($nombre_propietario);
        }
        
        # Devuelve el nombre del local.
        public function getNombre_Local() {
            return $this->nombre_local;
        }
        
        # Devuelve el nombre del propietario.
        public function getNombre_Propietario() {
            return $this->nombre_propietario;
        }
        
        
        # Por medio de un IF se encarga de validar el nombre del local, o de propietario.
        # En caso de ser nulo o unicamente constar de espacio se mandará una excepción.
        private function comprobarNombre($nombre) {
            if (empty($nombre)) {
              throw new Exception("El nombre no puede estar vacío.");
            }
            if (ctype_space($nombre)) {
              throw new Exception("El nombre no puede estar compuesto únicamente de espacios.");
            }
            return $nombre;
        }

        //Devuelve la Identificacion del usuario
        public function getObtenerID() {
            return $this->id;
        }

        //Devuelve la contraseña del usuario
        public function getObtenerPasswd() {
            return $this->passwd;
        }

        # Genera una clave unica, aunque no es 100% segura devido al cifrado, evitar repeticiones.
        private function generarCifrado() {
        return uniqid();
        }

        # Función que atravez de straval(toString) muestra una retroalimentación de los datos introducidos.
        function __toString(){
            return "<div class='registro'>
            <h2>Registro</h2>
            <ul>
              <li><strong>Nombre del local:</strong> {$this->getNombre_Local()}</li>
              <li><strong>Nombre del propietario:</strong> {$this->getNombre_Propietario()}</li>
              <li><strong>ID:</strong> {$this->getObtenerID()}</li>
              <li><strong>Password:</strong> {$this->getObtenerPasswd()}</li>
            </ul>
          </div>";
        }
    }
}
?>