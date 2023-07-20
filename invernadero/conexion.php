<?php
	
		class conexion{
			const user = 'root';
			const pass = '';
			const db = 'inventario';
			const servidor = 'localhost';


			public function conectarbd(){
				$conectar = new mysqli_connect(self::servidor, self::user,self::pass,self::pass, self::db);
				if($conectar-> maxdb_connect_errno){
					die("error en la conexion".$conectar->maxdb_connect_error);

				}
				return $conectar;
			}
		}
		
	

?>