<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Diary extends Model {

	use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pet_diary';
    protected $fillable = ['title', 'content', 'is_public', 'pet_id', 'user_id', 'created_at', 'updated_at'];

    public function pet() {
        return $this->hasOne('Cat\PetRelations');
    }

    public function owner() {
        return $this->hasOne('Cat\User');
    }

    // public static function getPet($user_id) {
    //     $cats = Cat::where('created_user_id', '=', $user_id)->get();
    //     return $cats; 
    // }
    // public function delete() {
    //     // $pet_relations = DB::table('pet_relations')-where('')
    //     // $pet_rel
    // }

}
