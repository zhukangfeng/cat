<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Cat extends Model {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'cats';
    protected $fillable = ['name', 'date_of_birth', 'sex', 'price', 'attribute', 'breed_id', 'created_user_id', 'updated_user_id'];

    public function breed() {
        return $this->belongsTo('Cat\Breed');
    }

    public function owner() {
        return User::find($this->created_user_id);
    }

    public static function getPet($user_id) {
        $cats = Cat::where('created_user_id', '=', $user_id)->get();
        return $cats; 
    }
    public function delete() {
        // $pet_relations = DB::table('pet_relations')-where('')
        // $pet_rel
    }
}