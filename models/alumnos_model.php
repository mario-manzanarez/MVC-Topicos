<?php
    require_once("../config/db.php");
	/**
	 * Clase que funciona como acceso a datos de la tabla de alumnos
	 */
    class alumno_model{
    	private $db;
    	private $alumnos;
        private $consulta=null;

    	public function __construct(){
    		$this->db       = Conectar::conexion();
    		$this->alumnos  = array();
    	}
		
		/**
		 * Método para llamar a todos los campos de la tabla alumnos
		 * @return alumnos[]
		 */
    	public function get_alumno(){
    	    $consulta = $this->db->query("call alumnos_consultar()");
    		while($fila = $consulta->fetch_assoc()){
    			$this->alumnos[] = $fila;
    		}
             	return $this->alumnos;
          
    	}
		/**
		 * Método para ingresar un nuevo alumno
		 * @param string $cadenasql sentencia SQL 
		 * @return void
		 */
    	public function put_alumno($cadenasql){
    		$consulta = $this->db->query($cadenasql); 
    		return null;
    	}
		/**
		 * Método para buscar un alumno por no de control o nombre
		 * @param string $cadenasql sentencia SQL 
		 * @return alumnos_model
		 */
        public function ind_alumno($cadena){
        	$consulta   = $this->db->query($cadena);
                $reg = mysqli_fetch_array($consulta);
        	if ($reg == null)
                    $reg = array ("NC"=>"00000","Nombre"=>"No-existe", "Direccion"=>"No_existe","Telef"=>"000","Carrera"=>""); 
               return $reg;  
        }     

    }
