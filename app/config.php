<?php

// default route
$routes['get']['']                   = 'Welcome';

$routes['get']['test']               = 'Test/Method';

// habilidades
$routes['post']['habilidade']          = 'HabilidadeController/create';
$routes['put']['habilidade']           = 'HabilidadeController/set';
$routes['get']['habilidade']           = 'HabilidadeController/list';
$routes['get']['habilidade/:id']       = 'HabilidadeController/get';
$routes['delete']['habilidade']        = 'HabilidadeController/del';

// disponibilidades
$routes['post']['disponibilidade']          = 'DisponibilidadeController/create';
$routes['put']['disponibilidade']           = 'DisponibilidadeController/set';
$routes['get']['disponibilidade']           = 'DisponibilidadeController/list';
$routes['get']['disponibilidade/:id']       = 'DisponibilidadeController/get';
$routes['delete']['disponibilidade']        = 'DisponibilidadeController/del';

// candidatos
$routes['post']['candidato']          = 'CandidatoController/create';
$routes['put']['candidato']           = 'CandidatoController/set';
$routes['get']['candidato']           = 'CandidatoController/list';
$routes['get']['candidato/:id']       = 'CandidatoController/get';
$routes['delete']['candidato']        = 'CandidatoController/del';

// candidatosHabilidade
$routes['post']['candidatoHabilidade']          = 'CandidatoHabilidadeController/create';
$routes['delete']['candidatoHabilidade']        = 'CandidatoHabilidadeController/del';

// candidatosDisponibilidade
$routes['post']['candidatoDisponibilidade']          = 'CandidatoDisponibilidadeController/create';
$routes['delete']['candidatoDisponibilidade']        = 'CandidatoDisponibilidadeController/del';
