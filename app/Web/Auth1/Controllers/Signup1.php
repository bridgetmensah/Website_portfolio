<?php 

use Base\Controllers\WebController;

class Signup1 extends WebController
{
    public function __construct()
    {
        parent::__construct();
        // $this->useDatabase(); // enable to use database

    }

    public function index()
    {
        $this->create();
      
    }

    public function list()
    {
        // Sample Code Here ...
    }

    public function create()
    {
        return view('create-signup');
    }

    public function store()
    {
        
       $details = clean(input()->post()); //COME BACK TO CORRECT ARROW
       return view('signup-details', compact('details'));  //get n check from sirs code
    //    dd($details);
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
/* End of Signup file */
