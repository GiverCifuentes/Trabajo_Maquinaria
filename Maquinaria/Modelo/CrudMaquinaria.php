<?php

require_once('../../conexion.php');

class CrudMaquinaria{

    public function __construct(){
    }

    public function InsertarMaquinaria($Maquinaria){

        $Db = Db::Conectar();

        $Insert = $Db->prepare('INSERT INTO maquinaria VALUES(:IdMaquina,:Nombre,:Capacidad)');
        $Insert->bindValue('IdMaquina',$Maquinaria->getIdMaquina());
        $Insert->bindValue('NombreObra',$Maquinaria->getNombre());
        $Insert->bindValue('DirectorObra',$Maquinaria->getCapacidad());

        try{
            $Insert->execute();
                //Echo " Registro exitoso";
                ?>
                <script>
                alert("Maquina registrada con éxito");
                document.location.href="../Vista/IngresarMaquinaria.php";
                </script>
                <?php

            } catch (Exception $e)
            {
                echo $e->getMessage();//Mostrar errores en la insercion

                die();
            }
    }

    public function ListarMaquinaria(){

        $Db = Db::Conectar();
            $ListaMaquinaria = [];
            $Sql = $Db->query('SELECT * FROM maquinaria');
            $Sql->execute();
            foreach($Sql->fetchAll() as $Maquinaria){
                $MyMaquinaria = new Maquinaria();
                $MyMaquinaria->setIdMaquina($Maquinaria['IdMaquina']);
                $MyMaquinaria->setNombre($Maquinaria['Nombre']);
                $MyMaquinaria->setCapacidad($Maquinaria['Capacidad']);
                $ListaMaquinaria[] = $MyMaquinaria;
            }
            return $ListaMaquinaria;

    }

    public function ObtenerMaquinaria($IdMaquina){
        $Db = Db::Conectar();
        $Sql = $Db->prepare('SELECT * FROM maquinaria WHERE IdMaquina=:IdMaquina');
        $Sql->bindValue('IdMaquina',$IdMaquina);
        $MyMaquinaria = new Maquinaria();
        try{
            $Sql->execute(); //Ejecutar el update
            $Maquinaria = $Sql->fetch(); //Se almacena la variable $competencia los datos de la variabale $sql
            $MyMaquinaria->setIdMaquina($Maquinaria['IdMaquina']);
            $MyMaquinaria->setNombre($Maquinaria['Nombre']);
            $MyMaquinaria->setCapacidad($Maquinaria['Capacidad']);

        }
        catch(Exception $e){ //Capturar Errores
            echo $e->getMessage();
            die();
        }
        return $MyMaquinaria;
    }

    public function ModificarMaquinaria($Maquinaria)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('UPDATE Maquinaria SET Nombre=:Nombre,
                Capacidad=:Capacidad WHERE IdMaquina=:IdMaquina');
                $Sql->bindValue('IdMaquina',$Maquina->getIdMaquina());
                $Sql->bindValue('Nombre',$Maquinaria->getNombre());
                $Sql->bindValue('Capacidad',$Maquinaria->getCapacidad());
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    //echo "Modificacion exitosa";
                    ?>
                    <script>
                    alert("Máquina modificado con éxito");
                    document.location.href="../Vista/ListarMaquinaria.php";
                    </script>
                    <?php
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }

            public function EliminarMaquinaria($IdMaquina)
            {
                $Db = Db::Conectar(); //Conectar a la base de datos
                $Sql = $Db->prepare('DELETE FROM maquinaria WHERE IdMaquina=:IdMaquina');
                $Sql->bindValue('IdMaquina',$IdMaquina);
                try{
                    $Sql->execute(); //Ejecutar el slq que contiene un update
                    //echo "Eliminacion exitosa";
                    ?>
                    <script>
                    alert("Maquina eliminado con éxito");
                    document.location.href="../Vista/ListarMaquinaria.php";
                    </script>
                    <?php
                }
                catch(Exception $e){ //Capturar Errores
                    echo $e->getMessage(); //Mostrar errores en la modificaion
                    die();
                }
            }
}
?>