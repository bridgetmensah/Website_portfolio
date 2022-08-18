<?php 

use Base\Controllers\WebController;

class Site extends WebController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $pageTitle = 'Home';

        $this->setTitle($pageTitle);
        $this->setBreadcrumb($pageTitle, 'Home', 'Home');
        
        return layout('website.layouts.main','website.pages.home', $this->data);
    }

    public function about()
    {
        $pageTitle = 'About Us';

        $this->setTitle($pageTitle);
        $this->setBreadcrumb($pageTitle, 'About', 'Our History');
        
        return layout('website.layouts.general','website.pages.about', $this->data);
    }

    public function ourHistory()
    {
    }

    public function ourTeam()
    {
    }

    public function destinations()
    {
    }

    public function singleTour()
    {
    }

    public function bikeRental()
    {
    }

    public function contact()
    {
        $pageTitle = 'Contact Us';

        $this->setTitle($pageTitle);
        $this->setBreadcrumb($pageTitle, 'Contact', 'Contact Us');
        return layout('website.layouts.general', 'website.pages.contact', $this->data);
    }

    public function sendContact()
    {

        use_form_validation();

        use_model('ContactModel', 'contact');

        $request = clean(input()->post());

        validate()->formData($request);

        validate()->input('app_field', 'trim|honey_check');
        validate()->input('app_time', 'trim|honey_time[5]');
        validate()->input('firstname', 'trim|required|cleanxss|min_length[3]|max_length[30]');
        validate()->input('lastname', 'trim|required|cleanxss|min_length[3]|max_length[30]');
        validate()->input('phone', 'trim|required|cleanxss|min_length[10]|max_length[16]');
        validate()->input('email', 'trim|required|valid_email|cleanxss|min_length[15]|max_length[180]');
        validate()->input('message', 'trim|required|cleanxss|min_length[20]|max_length[180]');

        $valid = validate()->check();

        $saved = false;

        if (!$valid) {
            $this->contact();
        }
        
        if ($valid) {

            $request = objectify($request);

            $saved = $this->contact->insert([
                'id' => $this->contact->autoincrement(),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'created_at' => datetime()
            ]);
            
            ($saved)
                ? route()->to('contact-us')->withSuccess("Thank You For Contacting Us. We will get back to You")
                : route()->to('contact-us')->withError("Sorry Please Try Again.");
        
        }
    }

    public function getContacts()
    {
        use_model('ContactModel', 'contact');

        $contacts = $this->contact->get();
        $contacts = objectify($contacts);
        $this->data['contacts'] = $contacts;

        return view('website.pages.contacts', $this->data);

    }
}
/* End of Site file */
