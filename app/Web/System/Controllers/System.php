<?php 

use Base\Controllers\WebController;

class System extends WebController
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
        // Sample Code Here ...
        
        return layout('layouts.main1', 'pages.login');
    }
    public function history()
    {
        // Sample Code Here ...
        
        return layout('layouts.default', 'pages.history');
    }
    public function message()
    {
        // Sample Code Here ...
        
        return layout('layouts.default', 'pages.message');
    }
    public function contactlist()
    {
        // Sample Code Here ...
        
        return layout('layouts.default', 'pages.contactlist');
    }
    public function profile()
    {
        // Sample Code Here ...
        
        return layout('layouts.default', 'pages.profile');
    }
    public function editprofile()
    {
        // Sample Code Here ...
        
        return layout('layouts.default', 'pages.editprofile');
    }
    public function signup()
    {
        // Sample Code Here ...
        
        return layout('layouts.main1', 'pages.signup');
    }
    public function department()
    {
        // Sample Code Here ...
        
        return layout('layouts.default', 'pages.department');
    }
    // public function home()
    // {
    //     // Sample Code Here ...
        
    //     return layout('layouts.main1', 'pages.home');
    // }

    public function body()
    {
        return layout('layouts.default', 'pages.body');
    }

    public function addContact()
    {
        return layout('layouts.default', 'pages.addContact');
    }

    public function clientnew()
    {
        return layout('layouts.main1', 'pages.clientnew');
    }
    public function store()
    {
        
       $details = clean(input()->post()); //COME BACK TO CORRECT ARROW
       return view('clientnew-details', compact('details'));  //get n check from sirs code
    //    dd($details);
    }

    // public function store()
    // {
    //     // Sample Code Here ...
    // }

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
/* End of System file */
