<?php

use App\Packages\SylynderDb\Db;
use Base\Controllers\ConsoleController;

class Console extends ConsoleController
{
    public function __construct()
    {
        $this->db = new Db();

        parent::__construct();
    }

    public function index()
    {
        echo $this->success('Welcome to Sylynder Db') ;
    }

    public function create_db()
    {
        $this->db->createDatabase('softclickDb');
    }

    public function add_framework($tablename = '')
    {
        // dd($tablename);
        $this->db->insert($tablename, [
			'id' => 3,
			'framework' => 'Symfony',
			'language' => 'PHP',
			'author' => 'Fabio Potencier',
			'year_released' => 2005
		]);
    }
}