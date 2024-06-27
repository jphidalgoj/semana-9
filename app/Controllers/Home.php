<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function ReturnVista1()
    {
        $datos=[
            "Dir2"=>"http://localhost/semana9/%20vista_login/vista2",
            "Dir3"=>"http://localhost/semana9/%20vista_login/vista3"];
        return view('vista_login/vista1',$datos);
    }

    public function ReturnVista2()
    {
        $datos=[
            "Dir1"=>"http://localhost/semana9/%20vista_login/vista1",
            "Dir3"=>"http://localhost/semana9/%20vista_login/vista3"];
        return view('vista_login/vista2',$datos);
    }

    public function ReturnVista3()
    {
        $datos=[
            "Dir1"=>"http://localhost/semana9/%20vista_login/vista1",
            "Dir2"=>"http://localhost/semana9/%20vista_login/vista2"];   
        return view('vista_login/vista3',$datos);
    }
    public function ReturnVista4($estaeslaVaiable)
    {
        if($estaeslaVaiable==1){
            print_r("estoy en el primer ciclo");
        } elseif ($estaeslaVaiable==2){
            print_r("estoy en el ciclo 2");
        }
        $datos=[
            "Dir1"=>"http://localhost/semana9/%20vista_login/vista1",
            "Dir2"=>"http://localhost/semana9/%20vista_login/vista2"];   
        return view('vista_login/vista3',$datos);
    }
    /*public function ReturnCatalogo($variable)
    {  
        if($variable=="zapatos"){
            return view("catalogo/zapatos");
        }elseif ($variable=="vestidos"){
            return view("catalogo/vestido");
        }
    }*/

    public function ReturnZapatos($var1)
    {  
        $datos1=[
            "DirVest"=>"http://localhost/semana9/catalogo/vestido",
            "DirZap"=>"http://localhost/semana9/catalogo/zapatos"
        ];
       if($var1=="zapatos"){
            return view("catalogo/zapatos",$datos1);
       }elseif($var1=="vestidos"){
            return view("catalogo/vestido",$datos1);
       }
    }
    
    public function testdb()
    {  
       $db=\Config\Database::connect();

       if($db->connect()){
            echo ("Berraco se conecto");
       }else{
            echo ("a llorar");
       }
    }
}
