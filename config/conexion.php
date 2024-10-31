<?php
    session_start();
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh=new PDO("sqlsrv:Server=GRECIA\SQLEXPRESS;Database=CompraVenta","sa","280395mel");
                return $conectar;
            }catch (Exception $e){
                print "Error Conexion BD". $e->getMessage() ."<br/>";
                die();
            }
        }

        public static function ruta(){
            return "http://localhost:90/PERSONAL_CompraVenta/";
        }
    }
?>