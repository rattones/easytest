<?php

// default route
$routes['get']['']                   = 'Welcome';

$routes['get']['test']               = 'Test/Method';

// project routes
//  cadastro
$routes['get']['cadastro']          = 'Cadastro/list';
$routes['get']['cadastro/:uid']     = 'Cadastro/get';
$routes['post']['cadastro']         = 'Cadastro/create';

//  email cadastro
$routes['get']['emailCadastro/:uid/:timestamp']    = 'Cadastro/verify';

//  validar documento
$routes['get']['valida/:doc']       = 'Cadastro/validaDoc';