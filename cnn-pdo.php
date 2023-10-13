<?php
    //CREAMOS LA CLASE CONEXIÓN PARA REALIZAR LA CONEXIÓN A MYSQL CON PDO
    class Conexion extends PDO
    {
        //DEFINIMOS LAS CREDENCIALES DE LA BASE DE DATOS
        private $tipo_de_base='mysql';
        private $host='localhost:3306';
        private $nombre_de_base='micatalogoonline';
        private $usuario='root';
        private $contrasena='';

        //VAMOS A MODIFICAR EL MÉTODO CONSTRUCTOR DE LA CLASE PDO
        public function __construct()
        {
            //VAMOS A MANEJAR EL TRY-CATCH PARA MANEJAR LAS EXCEPCIONES EN LA CONEXIÓN
            try 
            {
                //AQUÍ DEFINIMOS LAS CREDENCIALES DE LA BD EN EL MÉTODO CONSTRUCTOR
                parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,$this->usuario,$this->contrasena);    
            } 
            catch (PDOException $e) 
            {
                //SI OCURRIÓ UNA EXCEPCIÓN, MOSTRAMOS EL SIGUIENTE MENSAJE
                echo '<h5 style="font-family:Century Gothic; font-size:25px; color:#000000; text-align:center; font-weight:600;">Ha surgido un error y no se puede conectar a la B.D. DETALLE: '.$e->getMessage().'</h5>'; 
                echo '<center><img src="./img/icono-tache.png" width="330px"></center><br>';   
            }
        }
    }
?>
