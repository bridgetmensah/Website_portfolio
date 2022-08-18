<?php 

use App\Packages\SylynderDb\Db;
use App\Packages\SylynderDb\JsonModel;

class NotifymeModel extends Db implements JsonModel
{
    public $file = 'messages'; // it is the json file
    public $database = 'data'; // it is a folder

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
/* End of NotifymeModel file */
