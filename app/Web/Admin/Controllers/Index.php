<?php 

use Base\Controllers\WebController;

class Index extends WebController
{
    public function __construct()
    {
        parent::__construct();
        // $this->useDatabase(); // enable to use database

    }

    public function index()
    {
        $this->list();
    }

    public function list()
    {
        return layout('layouts.main', 'pages.blog');
    }

    public function contact()
    {
        return layout('layouts.main', 'pages.contact');
    }

    public function articles()
    {
        return layout('layouts.main', 'pages.articles');
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
/* End of Index file */
