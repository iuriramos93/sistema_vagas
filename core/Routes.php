<?php 
return [
    //Rotas Home
    '/' => 'HomeController@index',
    '/test'=>'HomeController@test',
    
    //Rotas Administrativas
    '/admin' => 'AdminController@index',
    '/login'=>'AdminController@login',
    '/registro'=> 'AdminController@registro',
    '/logout'=> 'AdminController@logout',
    //Rotas Vagas
    '/admin/vagas' => 'VagasController@index',
    '/admin/vagas/cadastro'=>'VagasController@cadastro',
    '/admin/vagas/(\d+)/visualizar'=> 'VagasController@visualizar',
    '/admin/vagas/(\d+)/editar'=> 'VagasController@editar',
    '/admin/vagas/(\d+)/deletar'=> 'VagasController@deletar',


    //Rotas Currículos
    '/admin/curriculo/cadastrar'=>'CurriculoController@cadastro',
    '/admin/curriculo/atualizar'=>'CurriculoController@atualizar'
    ]


?>



