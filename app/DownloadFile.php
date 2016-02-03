<?php namespace Cat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DownloadFile extends Model {

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


    public static function file($id) {
        return DownloadFile::find($id);
    }
    
    public static function downloadFiles($file_cd, $resource_id) {
        $files = DownloadFile::where('file_cd', '=', $file_cd)
            ->where('resource_id', '=', $resource_id)
            ->orderBy('updated_at', 'desc')
            ->get();
        return $files;
    }

    public static function downloadUpdateNearlyOneFile($file_cd, $resource_id) {
        $files = DownloadFile::where('file_cd', '=', $file_cd)
            ->where('resource_id', '=', $resource_id)
            ->orderBy('updated_at', 'desc')
            ->get();

        if (isset($files)) {
            return $files[0];
        } else {
            return false;
        }

    }
    
}
