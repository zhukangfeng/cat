<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
Class Breed extends Model {
    protected $fillable = ['name', 'attribute'];

    public function cats() {
        return $this->hasMany('Cat\Cat');
    }
}

