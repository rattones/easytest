<?php 
namespace app\model;

use core\system\Dao;

class CandidatoHabilidade extends Dao
{
    public $tableName= "candidatoHabilidade";
    public $keys= ['uidCandidato', 'idHabilidade'];

    public function __construct()
    {
        parent::__construct();
    }
}