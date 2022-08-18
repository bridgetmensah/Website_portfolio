<?php

use App\Packages\SylynderDb\Db;
use App\Packages\SylynderDb\JsonModel;

class ContactModel extends Db implements JsonModel
{
    public $file = 'contacts';
    public $database = 'website';

    public function __construct()
    {
        parent::__construct($this->database);
        $this->useTable();
    }

    // public function db()
    // {

    // }

    public function useTable()
    {
        $this->from($this->file);
    }

}
/* End of ContacteModel file */
