<?php

use Base\Controllers\WebController;

class Booking extends WebController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function bookNow()
    {
    }

    public function bookBike()
    {
        use_model('BookingModel', 'order');
        use_form('BookingForms');

        use_form_validation();
        
        $request = clean(input()->post());

        validate()->formData($request);

        $valid = BookingForms::save();

        $saved = false;

        if (!$valid) {
            $this->bookNow();
        }

        if ($valid) {

            $request = objectify($request);

            $saved = $this->order->insert([
                'id' => $this->order->autoincrement(),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ]);

            ($saved)
                ? route()->to('contact-us')->withSuccess("Thank You For Contacting Us. We will get back to You")
                : route()->to('contact-us')->withError("Sorry Please Try Again.");
        }
    }
}
