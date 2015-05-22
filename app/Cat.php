<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
Class Cat extends Model {
    protected $fillable = ['name', 'date_of_birth', 'sex', 'price', 'attribute', 'breed_id'];

    public function breed() {
        return $this->belongsTo('Cat\Breed');
    }
}

