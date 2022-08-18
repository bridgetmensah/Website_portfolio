<?php

use App\Packages\SylynderDb\Db;
use App\Packages\SylynderDb\JsonModel;

class BookingModel extends Db implements JsonModel
{
    public $file = 'booking';
    public $database = 'website';

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
/* End of ContacteModel file */
