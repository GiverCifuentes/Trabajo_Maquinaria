<?php

require_once('../../conexion.php');

class CrudServicio{

    public function __construct(){
    }

    public function InsertarServicio($Servicio){

        $Db = Db::Conectar();

        $Insert = $Db->prepare('INSERT INTO servicio VALUES(:IdServicio,:NombreObra,:DirectorObra,:Constructora,:Mes,:Maquina,:Operario1,:Operario2)');
        $Insert->bindValue('IdServicio',$Servicio->getIdServicio());
        $Insert->bindValue('NombreObra',$Servicio->getNombreObra());
        $Insert->bindValue('DirectorObra',$Servicio->getDirectorObra());
        $Insert->bindValue('Constructora',$Servicio->getConstructora());
        $Insert->bindValue('Mes',$Servicio->getMes());
        $Insert->bindValue('Maquina',$Servicio->getMaquina());
        $Insert->bindValue('Operario1',$Servicio->getOperario1());
        $Insert->bindValue('Operario2',$Servicio->getOperario2());

        try{
            $Insert->execute();//ejecutar el insert
                Echo " Registro exitoso";

            } catch (Exception $e)
            {
                echo $e->getMessage();//Mostrar errores en la insercion

                die();
            }
    }


    public function ListarServicio(){

        $Db = Db::Conectar();
            $ListaServicio = [];
            $Sql = $Db->query('SELECT * FROM servicio');
            $Sql->execute();
            foreach($Sql->fetchAll() as $Servicio){
                $MyServicio = new Servicio();
                $MyServicio->setIdServicio($Servicio['IdServicio']);
                $MyServicio->setNombreObra($Servicio['NombreObra']);
                $MyServicio->setDirectorobra($Servicio['Directorobra']);
                $MyServicio->setConstructora($Servicio['Constructora']);
                $MyServicio->setMes($Servicio['Mes']);
                $MyServicio->setMaquina($Servicio['Maquina']);
                $MyServicio->setOperario1($Servicio['Operario1']);
                $MyServicio->setOperario2($Servicio['Operario2']);
                $ListaServicio[] = $MyServicio;
            }
            return $ListaServicio;

    }

    public function ObtenerServicio($IdServicio){
                $Db = Db::Conectar();
                $Sql = $Db->prepare('SELECT * FROM servicio WHERE IdServicio=:IdServicio');
                $Sql->bindValue('IdServicio',$IdServicio);
                $MyServicio = new Servicio();
                try{
                    $Sql->execute(); //Ejecutar el update
                    $Servicio = $Sql->fetch(); //Se almacena la variable $competencia los datos de la variabale $sql
                    $MyServicio->setIdServicio($Servicio['IdServicio']);
                    $MyServicio->setNombreObra($Servicio['NombreObra']);
                    $MyServicio->setDirectorobra($Servicio['Directorobra']);
                    $MyServicio->setConstructora($Servicio['Constructora']);
                    $MyServicio->setMes($Servicio['Mes']);
                    $MyServicio->setMaquina($Servicio['Maquina']);
                    $MyServicio->setOperario1($Servicio['Operario1']);
                    $MyServicio->setOperario2($Servicio['Operario2']);

                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificacion
                    die();
                }
                return $MyServicio;
            }


            public function ModificarServicio($Servicio)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('UPDATE servicio SET IdServicio=:IdServicio, NombreObra=:NombreObra,
                DirectorObra=:DirectorObra, Constructora=:Constructora, Mes=:Mes,
                Maquina=:Maquina, Operario1=:Operario1, Operario2=:Operario2 WHERE IdServicio=:IdServicio');
                $Sql->bindValue('NombreObra',$Servicio->getNombreObra());
                $Sql->bindValue('DirectorObra',$Servicio->getDirectorObra());
                $Sql->bindValue('Constructora',$Servicio->getConstructora());
                $Sql->bindValue('Mes',$Servicio->getMes());
                $Sql->bindValue('Maquina',$Servicio->getMaquina());
                $Sql->bindValue('Operario1',$Servicio->getOperario1());
                $Sql->bindValue('Operario2',$Servicio->getOperario2());
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    echo "Modificacion exitosa";
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }

            public function EliminarServicio($Servicio)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('DELETE FROM servicio WHERE IdServicio=:IdServicio');
                $Sql->bindValue('IdServicio',$IdServicio);
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    echo "Eliminacion exitosa";
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }
}
?>