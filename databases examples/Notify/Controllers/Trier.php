<?php 

use Base\Controllers\WebController;

class Trier extends WebController
{
    public function __construct()
    {
        parent::__construct();
        // $this->useDatabase(); // enable to use database

    }

    public function index()
    {
        use_model('Notify/NotifymeModel', 'messages'); // use model and assign alias

        // select all from table
        $messages = $this->messages->get();

        // select specific fields from table
        $messages = $this->messages->select('id, title')->get();

        // select all from table and filter 
        $messages = $this->messages->select('*')->where([
            'title' => "you are welcome",
            'id' => 8
        ], $this->messages::OR)->get();

        // $this->messages->insert([
        //     'id' => $this->messages->autoincrement(),
        //     'title' => "you are welcome",
        //     'details' => "learning is so sweet oo and I saw someone somewhere",

        // ]);
        dd($messages);
        $this->list();
    }

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
/* End of Try file */
