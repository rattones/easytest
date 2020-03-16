<?php
namespace app\controller;

use core\system\Controller;
use app\model\CandidatoDisponibilidade;
use stdClass;

class CandidatoDisponibilidadeController extends Controller
{
    public function __construct()
    {
        parent::__construct();   
    }

    public function create()
    {
        $post= self::_POST();
        $obj= new stdClass();
            $obj->uidCandidato= $post['uidCandidato'];
            $obj->idDisponibilidade= $post['idDisponibilidade'];
        
        $dao= new CandidatoDisponibilidade();
        $cand= $dao->create($obj);  

        self::response(201, [$cand]);
    }

    public function del()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->uidCandidato= $post['uidCandidato'];
            $obj->idDisponibilidade= $post['idDisponibilidade'];

        $dao= new CandidatoDisponibilidade();
        $cand= $dao->delete($obj);

        self::response(200, [$cand]);
    }
}