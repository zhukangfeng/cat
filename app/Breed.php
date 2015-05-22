<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
Class Breed extends Model {
    public $timestamps = false;

    public function cats() {
        return $this->hasMany('Cat\Cat');
    }
}

