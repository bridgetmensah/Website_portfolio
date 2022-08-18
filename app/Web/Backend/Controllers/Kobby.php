<?php 

use Base\Controllers\WebController;

class Kobby extends WebController
{
    public function __construct()
    {
        parent::__construct();
        // $this->useDatabase(); // enable to use database

    }

    public function index()
    {
        // return layout('main1','pages.signup' );
        return layout('layouts.main1', 'pages.signup');


    }
    public function signup()
    {
        // return layout('main1','pages.signup' );


        // use_model('Backend/MaviModel');
        use_model('MaviModel');
        $request =clean(input()->post());

        $saved = false;

        $request = objectify($request);
// dd($request);

        $saved=$this->MaviModel->insert([
            'id'=>$this-> MaviModel->autoincrement(),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
            'sid' => $request->sid,
            'department' => $request->department,
            'username' => $request->username,
            'pass' => $request->pass,
            'cpass' => $request->cpass,
        ]);

        // dd($saved);

        if (!$saved) {
            $this->index();
        }

        if ($saved) {
            route()->to('system')->withSuccess('Registered successfully');
        }

       
        // $this->list();
    }
    public function save_detais()
    {
        
        // ($saved)
        //     ? route()->to('backend.kobby.view_details')->withSuccess("Thank You For giving us your card details")
        //     : route()->to('money.creditcard.view_details')->withError("Sorry Please Try Again.");
        
    }

    // public function view_details()
    // {
    //     use_model('CardModel');

    //     $details = $this->CardModel->select('*')->get();
    //     $details = objectify($details);

    //     return view('card_details', compact('details'));
    // }


    

    public function list()
    {
        // Sample Code Here ...
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
/* End of Kobby file */
