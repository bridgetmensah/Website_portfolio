<?php 

use Base\Controllers\WebController;

class Signup extends WebController
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
        return view('create-user');
    }

    public function store()
    {
        use_form_validation();

        $details = clean(input()->post());

        validate()->formData($details);

        validate()->input('firstname', 'trim|required|min_length[3]');

        if (!validate()->check()) {
            // dd('ajieeii');
            $this->create();
        }

        return view('user-details', compact('details'));

        dd($details);
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
/* End of Sigup file */
