<?php 
	require("connection.php");
	class Actividad{

		 private $connection;
    
	    public function __construct(){
	        $this->connection = Connection::getInstance();
	    }

	    public function getTipos(){

        	$query = "SELECT `id`, `Descripcion` FROM `actividad-tipo`";
            
            $datos = array();

            if($result = $this->connection->query($query)){
                while($fila = $result->fetch_assoc()){
                $datos[] = $fila;                                 
	            }
	            $result->free();
	            return $datos;
            }else{
               return false;
            }
	    }

	    public function getGrupos($tipo){

        	$query = "SELECT `id`, `idTipo`, `descripcion` FROM `actividad-grupo` where  idTipo = '$tipo'";
            
            $datos = array();

            if($result = $this->connection->query($query)){
                while($fila = $result->fetch_assoc()){
                $datos[] = $fila;                                 
	            }
	            $result->free();
	            return $datos;
            }else{
               return false;
            }
	    }

	    public function getActividades($grupo){
	    	$query = 	"SELECT `id`, `nombre`, `idTipo`, `idGrupo` FROM `actividades` WHERE idGrupo = '$grupo'";

	    	$datos = array();

	    	if ($result = $this->connection->query($query)){
	    		while($fila = $result->fetch_assoc()){
	    			$datos[] = $fila;
	    		}
	    		$result->free();
	    		return $datos;
	    	}
	    	else{
	    		return false;
	    	}


	    }

	}
