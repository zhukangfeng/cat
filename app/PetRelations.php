<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class PetRelations extends Model {
    use SoftDeletes;
    
    protected $fillable = ['owner_id', 'pet_id', 'pet_type', 'begin_at', 'end_at', 'remark'];
    protected $table = 'pet_relations';
	//
    public function isCat() 
    {
        if ($this->pet_type === '1') {
            return true;
        } else {
            return false;
        }
    }

    public function petInfo() {
        switch ($this->pet_type) {
            case '1':
                # code...
                return $this->hasOne('Cat\Cat', 'id')->get();
                break;
            
            default:
                # code...
                break;
        }
    }

    public function cat() 
    {
        if ($pet_type !== '1') {
            return false;
        }
        $this->hasOne('Cat\Cat');
    }
    public function user() {
        $this->hasOne('Cat\User');
    }

}
