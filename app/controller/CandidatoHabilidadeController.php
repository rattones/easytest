<?php
namespace app\controller;

use core\system\Controller;
use app\model\CandidatoHabilidade;
use stdClass;

class CandidatoHabilidadeController extends Controller
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
            $obj->idHabilidade= $post['idHabilidade'];
            $obj->grauConhecimento= $post['grauConhecimento'];
        
        $dao= new CandidatoHabilidade();
        $cand= $dao->create($obj);  

        self::response(201, [$cand]);
    }

    public function del()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->uidCandidato= $post['uidCandidato'];
            $obj->idHabilidade= $post['idHabilidade'];

        $dao= new CandidatoHabilidade();
        $cand= $dao->delete($obj);

        self::response(200, [$cand]);
    }
}