<?php

use App\Packages\SylynderDb\Db;
use App\Packages\SylynderDb\JsonModel;

class UserModel extends Db implements JsonModel
{
    public $file = 'users';
    public $database = 'books';

    public function __construct()
    {
        parent::__construct($this->database);
        $this->useTable();
    }

    public function useTable()
    {
        $this->from($this->file);
    }

}