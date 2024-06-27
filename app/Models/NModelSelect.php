<?php

namespace App\Models;

use CodeIgniter\Model;

class NMOdelSelect extends Model
{
    public function Select_Modelo_Inventario()
    {
        $variable = $this->db->query('select * from tbl_inventario');
        return $variable->getResult();
    }
}

// Hay que agregar al controlador el use App\Models\Nombre de la clase modelo;