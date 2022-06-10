<?php

require_once("conexion.php");

class user extends conexion{
    
    private $name;
    private $email;
    private $phone;
    private $date;

    function __constructor($name,$email,$phone,$date){
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->date=$date;
    }

    //GET METHOD
    public function getname(){
        return $this->name;
    }

    public function getemail(){
        return $this->email;
    }

    public function getphone(){
        return $this->phone;
    }

    public function getdate(){
        return $this->date;
    }

    //Functions

    //Insertar un usuario
    public function insert($name,$email,$phone,$date){

        $newconex = new conexion('','','');
	    $conex = $newconex->conectar('','','');
        $conex->beginTransaction();

			try{
				$sql = "INSERT INTO user (name, email, phone, date) VALUES (:name, :email, :phone, :date);";
				$stm = $conex->prepare($sql);

				$stm->execute(array(':name'  => $name,
								    ':email' => $email,
                                    ':phone' => $phone,
                                    ':date'  => $date
                                 ));

        $conex->commit();
		//$result = $consulta->fetchAll();
        //return $result;
      }catch(PDOException $e){
        $conex->rollBack();
        echo "Failed: " . $e->getMessage();
      }
    }

    //Tomar datos de los usuarios
    public function select($name,$email,$phone,$date){

        $newconex = new conexion('','','');
	    $conex = $newconex->conectar('','','');
        $conex->beginTransaction();

        try{
            $sql = "SELECT * FROM user;";

		    $consulta = $conex->prepare($sql);
			$consulta->execute();

			$conex->commit();
			$result = $consulta->fetchAll();
		    return $result;

        }catch(PDOException $e){
            $conex->rollBack();
            echo "Failed: " . $e->getMessage();
        }

    }
}
?>