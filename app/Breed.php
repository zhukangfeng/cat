<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Breed extends Model {
    use SoftDeletes;
    
    protected $fillable = ['name', 'attribute'];
    protected $table = 'cats_breeds';

    public function cats() {
        return $this->hasMany('Cat\Cat');
    }
}

