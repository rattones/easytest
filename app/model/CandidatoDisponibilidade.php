<?php
namespace app\model;

use core\system\Dao;

class CandidatoDisponibilidade extends Dao
{
    public $tableName= "candidatoDisponibilidade";
    public $keys= ['uidCandidato', 'idDisponibilidade'];

    public function __construct()
    {
        parent::__construct();
    }
}