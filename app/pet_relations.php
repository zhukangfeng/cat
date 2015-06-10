<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;

class pet_relations extends Model {
    protected $fillable = ['owner_id', 'pet_id', 'begin_at', 'end_at', 'remark'];

	//
    public function pet() {
        $this->belongsToMany('Cat\Cat');
    }
    public function user() {
        $this->hasOne('Cat\User');
    }
}
