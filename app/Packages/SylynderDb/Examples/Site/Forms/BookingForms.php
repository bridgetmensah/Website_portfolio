<?php 

class BookingForms
{
    public static function save()
    {

        validate()->input('city', 'trim|required|cleanxss|min_length[3]|max_length[30]');
        validate()->input('location', 'trim|required|cleanxss|min_length[3]|max_length[30]');
        validate()->input('date', 'trim|required|cleanxss|min_length[10]|max_length[16]');
        validate()->input('time', 'trim|required|valid_email|cleanxss|min_length[15]|max_length[180]');
        validate()->input('persons', 'trim|required|cleanxss|min_length[20]|max_length[180]');
        validate()->input('persons', 'trim|required|cleanxss|min_length[20]|max_length[180]');
        validate()->input('persons', 'trim|required|cleanxss|min_length[20]|max_length[180]');
        validate()->input('persons', 'trim|required|cleanxss|min_length[20]|max_length[180]');
        validate()->input('persons', 'trim|required|cleanxss|min_length[20]|max_length[180]');

        return form_valid();
    }

    public static function edit($id)
    {
        validate('some-form-field', 'field-name', 'trim|required|min_length[3]|max_length[120]|is_unique[table.column,some-colunm,'.$id.']');
        
        return form_valid();
    }
}
/*End of BookingForms form file */
