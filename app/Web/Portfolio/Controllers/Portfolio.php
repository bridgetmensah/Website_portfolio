<?php 

use Base\Controllers\WebController;

class Portfolio extends WebController
{
    public function __construct()
    {
        parent::__construct();
        // $this->useDatabase(); // enable to use database

    }

    public function index()
    {
        return layout('layoutss.mainport', 'opages.portfolio');
    }

    public function list()
    {
        
    }

    public function create()
    {
        // Sample Code Here ...
    }

    public function store()
    {
        // Sample Code Here ...
    }

    public function edit($id)
    {
        $id = clean($id);

        // Sample Code Here ...
    }

    public function update($id)
    {
        $id = clean($id);

        // Sample Code Here ...
    }

    public function delete($id)
    {
        $id = clean($id);
        
        // Sample Code Here ...
    }
}
/* End of Portfolio file */
