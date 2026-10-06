<?php
namespace App\Models\Admin;
use core\Model;
use PDO;
class Productos extends Model{
    protected $table = 'productos';

    public function resgistrar($data){
        $sql = "INSERT INTO {$this->table} (categoria_id, codigo_sku, nombre, descripcion, precio_venta, stock_actual) VALUES (:categoria_id, :codigo_sku, :nombre, :descripcion, :precio_venta, :stock_actual)";
        $params = [
            ':categoria_id' => $data['categoria_id'],
            ':codigo_sku' => $data['codigo_sku'],
            ':nombre' => $data['nombre'],
            ':descripcion' => $data['descripcion'],
            ':precio_venta' => $data['precio_venta'],
            ':stock_actual' => $data['stock_actual']
        ];
        $preparado = self::$db->prepare($sql);
        return $preparado->execute($params);
    }
    public function buscar(){
    }
    public function ver(){
    }
    public function actualizar(){
    }
    public function eliminar(){
    }
}