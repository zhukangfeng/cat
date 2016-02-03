<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
use Auth;
use Storage;
use Config;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Cat\Libraries\GlobalFileFunc;

class UploadFile extends Model {

	//
    use SoftDeletes;
    
    protected $fillable = ['id', 'file_cd', 'resource_id', 'save_path', 'real_name', 'save_name', 'type', 'remark', 'user_id', 'size'];
    protected $table = 'file';


    public $file_cd;
    public $resource_id;
    public $path;
    public $name;
    public $type;
    public $remark;
    public $user_id;
    public $size;
    public $delete_user_id;

    public $file;
    // protected $
    public static function saveUploadedFile($file) {
        $real_name = $file->getClientOriginalName();
        $result = $file->move($file, GlobalFileFunc::getStorageRealPath() . GlobalFileFunc::getFileSaveName($real_name));
        echo "string";
        var_dump($result);
        exit;

    }

    /**
    * save file and insert into db
    * 
    * @return success: db id
    * @return error: false;
    **/
    public function saveFile() {
        if (!file_exists($this->file)) {
            return false;
        }
        $file = $this->file;
        $real_name = $file->getClientOriginalName();
        $file_path = GlobalFileFunc::getStorageRealPath();
        $save_name = GlobalFileFunc::getFileSaveName($real_name);
        $result = $file->move($file_path, $save_name);
        if (Auth::id()) {
            $user_id = Auth::id();
        } else {
            $user_id = null;
        }
        // echo GlobalFileFunc::getStorageRealPath() . GlobalFileFunc::getFileSaveName($real_name);
        if (!$file->getError()) {
            $createdFile = [
                'file_cd'       => $this->file_cd,
                'resource_id'   => $this->resource_id,
                'save_path'          => GlobalFileFunc::getStorageRelativePath(),
                'real_name'     => $real_name,
                'save_name'     => $save_name,
                'type'          => $file->getClientMimeType(),
                'remark'        => Config::get('db_const.DB_FILE_CD_VALUE')[$this->file_cd],
                'user_id'       => $user_id,
                'size'          => $file->getClientSize(),
            ];
            $result = UploadFile::create($createdFile);

            if ($result->id) {
                return $result->id;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }


}
