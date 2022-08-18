<?php 

use Base\Controllers\WebController;

class Website extends WebController
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
    public function home()
    {
        $this->list();
    }

    // public function body()
    // {
    //     $this->list();
    // }

    public function list()
    {
        return layout('layoutss.main', 'opages.home');
    }

    public function signup()
    {
        return layout('layoutss.main', 'opages.signup');
    }

    public function abouts()
    {
        return layout('layoutss.main', 'opages.about');
    }

    public function contacts()
    {
        return layout('layoutss.main', 'opages.contacts');
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
/* End of Website file */
