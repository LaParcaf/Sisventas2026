<?php
namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\Admin\Categorias;
class ProductosController extends Controller
{
    private $categoriasModel;
    public function __construct()
    {
        // Inicializa el modelo de categorias para poder usarlo.
        $this->categoriasModel = new Categorias();
    }

    // Muestra la pagina principal con el listado de productos
    public function index()
    {
        $this->view('admin/productos/index', [
            'isAdmin'   => true,
            'module'    => 'admin',
            'pageTitle' => 'Productos'
        ]);
        exit;
    }
    public function nuevo(){
        // Estas categorias se utilizan para llenar el selector del formulario de nuevo producto
        $categorias = $this->categoriasModel->categorias_select();
        var_dump($categorias);
        // Envia a la vista los datos necesarios para renderizar el formulario de nuevo producto
        $this->view('admin/productos/nuevo', [
            'isAdmin'   => true,
            'module'    => 'admin',
            'pageTitle' => 'Nuevo Producto',
            'categorias' => $categorias
        ]);
        exit;
    }
}