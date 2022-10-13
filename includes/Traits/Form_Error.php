<?php




namespace test\plugin\Traits;


trait Form_Error
{



    public $errors = [];


    public function has_error($key)
    {

        if (isset($this->errors[$key])) {

            return true;
        }
    }

    public function get_error($key)
    {


        if (isset($this->errors[$key])) {


            return $this->errors[$key];
        }

        return false;
    }
}