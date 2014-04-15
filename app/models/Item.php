<?php

class Item extends Eloquent {

    protected $table = 'items';

    public function hidden() {
    	return $this->belongsTo('User', 'create_id', 'id');
    }

    public function found() {
    	return $this->belongsTo('User', 'found_id', 'id');
    }
}

?>