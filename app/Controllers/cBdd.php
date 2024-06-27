<?php

namespace App\Controllers;

use App\Models\NMOdelSelect;

class cBdd extends BaseController
{
    public function testbdd()
    {
        $db=\Config\Database::connect();
        if($db->connect()){
            print_r("listo mijin conectao");
        }else{
            print_r("cambiese a gastronomia");
        }
    }

    public function Select_Modelo_Bdd(){
        $instacia=new NMOdelSelect();
        $datosbdd= $instacia->Select_Modelo_Inventario();
        $data=[
            'keyselectbdd'=>$datosbdd
        ];
        print_r($data);
        return view('vistainventario', $data);
    }

}