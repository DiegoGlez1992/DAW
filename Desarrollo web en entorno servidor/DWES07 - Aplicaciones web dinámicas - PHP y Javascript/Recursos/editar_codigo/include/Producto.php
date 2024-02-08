<?php
include "conexion.php";
class Producto extends Conexion
{
    private $id;
    private $nombre;
    private $nombre_corto;
    private $pvp;
    private $familia;
    private $descripcion;
    

    public function __construct()
    {
        parent::__construct();
    }

    // setters
    public function setId($i)
    {
        $this->id = $i;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setNombre_corto($nombre_corto)
    {
        $this->nombre_corto = $nombre_corto;
    }

    public function setPvp($pvp)
    {
        $this->pvp = $pvp;
    }

    public function setFamilia($familia)
    {
        $this->familia = $familia;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getNombre()
    {
        return $this->nombre ;
    }




    function getProducto($id)
    {
        $consulta = "select * from productos where id=:i";
        $stmt = $this->conexion->prepare($consulta);
        try {
            $stmt->execute([':i' => $id]);
        } catch (PDOException $ex) {
            die("Error al recuperar el producto: " . $ex->getMessage());
        }
		if ($stmt->rowCount()==1)
			return $stmt->fetch(PDO::FETCH_OBJ); //Devolvemos objeto
		else 
			return "";							 // devolvemos vacío
    }

   
}
