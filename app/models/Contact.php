<?php

class Contact extends Eloquent {

    protected $table = 'contact_us';

    public static $rules = array(
	    'from'      => 'required|max:100',
	    'subject'       => 'required|max:100',
	    'message'       => 'required|max:500'
	);

}

?>