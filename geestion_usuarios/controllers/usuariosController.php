<?php

namespace ususarioController;


use baseControler\baseController;
use conexionDb\ConexionDbController;

class UsuarioController extends BaseController
{

    function create()
    {
    }

    function read()
    {
        $sql ='select * from usuarios';
        $conexiondb= new ConexionDbController();
        $usuarios = $conexiondb-> execSQL( $sql);
        $conexiondb->close();
        return $usuarios;
        
    }
    function update()
    {
    }
    function delete()
    {
    }
}
