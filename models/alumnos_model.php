<?php
    
    require_once("../config/db.php");
    class alumno_model{
    	private $db;
    	private $alumnos;
        private $consulta=null;

    	public function __construct(){
    		$this->db       = Conectar::conexion();
    		$this->alumnos  = array();
    	}

    	public function get_alumno(){
    	    $consulta = $this->db->query("call alumnos_consultar()");
    		while($fila = $consulta->fetch_assoc()){
    			$this->alumnos[] = $fila;
    		}
             	return $this->alumnos;
          
    	}

    	public function put_alumno($cadenasql){
    		$consulta = $this->db->query($cadenasql); 
    		return null;
    	}

        public function ind_alumno($cadena){
        	$consulta   = $this->db->query($cadena);
                $reg = mysqli_fetch_array($consulta);
        	if ($reg == null)
                    $reg = array ("NC"=>"00000","Nombre"=>"No-existe", "Direccion"=>"No_existe","Telef"=>"000","Carrera"=>""); 
               return $reg;  
        }     

    }
?>