<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    
    

    public function prueba ()
    {
        echo 'hola esto es una prueba';
    }

    public function api ()
    {


echo 'VENTAS DE MAQUILLAJE';

        $usuario = array(
            "Empresa" => "Jumake",
            "Dueña" => "Julenny Vera",
            "Ciudad" => "PORTOVIEJO",
            "Telf" => "0996777101"
        );

        $marca1 = array(
            "nombre" => "CHANEL",
            "descripcion" => "Linea de Productos en Base y Correctores",
            "pais" => "Mexico",
            "sitio_web" => "https://www.chanel.com/es/"
        );

        $marca2 = array(
            "nombre" => "Lancóme",
            "descripcion" => "Cosméticos de lujo, perfumes y cuidado de la piel",
            "pais" => "Inglaterra",
            "sitio_web" => "hhttps://www.chanel.com/es/"
        );

        $producto1 = array(
            "nombre" => "LES PINCEAUX DE CHANEL",
            "descripcion" => "SET DE 3 BROCHAS ESENCIALES",
            "precio" => 10.99,
            "marca" => $marca1
        );

        $producto2 = array(
            "nombre" => "MÁSCARA DE PESTAÑAS CON SUERO LE 8 HYPNÔSE",
            "descripcion" => "Máscara de pestañas voluminizadora con suero.",
            "precio" => 15.99,
            "marca" => $marca2
        );

        $productos = array($producto1, $producto2);

        $resultado = array(
            "usuario" => $usuario,
            "productos" => $productos
        );
        return $this->response->setJSON($resultado);
        }   
            
    
        public function login(){
    
    return view('login');
        
        }
    
    
        public function testbd()
        {
            $this->db = \Config\Database::connect();
        
            $query = $this->db->query("SELECT *
                FROM Makeup, Marca");
        
            $result = $query->getResult();
        
            return $this->response->setJSON($result);
        }
        
        
}

