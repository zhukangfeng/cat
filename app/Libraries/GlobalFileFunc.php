<?php namespace Cat\Libraries;

use Auth;

/**
* global functions
*/
class GlobalFileFunc 
{

    /**
    *   get the real saving name  
    *
    * 
    * @return service's saving path
    */
    public static function getStorageRealPath()
    {
        $path = storage_path();

        if (Auth::guest()) {
            $tmp = 'guest';
        } else {
            $tmp = Auth::id();
        }
        return $path . DIRECTORY_SEPARATOR . 'uploaded' . DIRECTORY_SEPARATOR . $tmp;
    }

    /**
    *   get the relative saving name  
    *
    * 
    * @return service's saving path
    */
    public static function getStorageRelativePath()
    {
        if (Auth::guest()) {
            $tmp = 'guest';
        } else {
            $tmp = Auth::id();
        }
        return  DIRECTORY_SEPARATOR . 'uploaded' . DIRECTORY_SEPARATOR . $tmp;
    }

    /**
    *   get the saving name  
    *
    * @param  string $realName
    * @return succsee:  service's saving name
    * @return error:    false
    */
    public static function getFileSaveName($realName)
    {
        $timeStr = date('Y-m-d H-i-s');

        if (Auth::guest()) {
            $tmp = 'guest';
        } else {
            $tmp = Auth::id();
        }
        $asciiName = mb_convert_encoding($realName, 'ASCII');
        return $timeStr . '_' . $tmp . '_' .  $asciiName;
    }

    /**
    *   get the saving name  
    *
    * @param  string saving name
    * @return succsee:  get the real name
    * @return error:    false
    */
    public static function getFileRealName($saveName)
    {
        $aryTemp = explode('_', $saveName);
        if (count($aryTemp) < 3) {
            return false;
        }
        $aryReturn = '';
        for ($i = 2; $i < count($aryTemp); $i++) {
            $aryReturn .= $aryTemp[$i];
        }
        return $aryReturn;
    }



    /**
    *   get the saving time  
    *
    * @param  string saving name
    * @return succsee:  get the saving time
    * @return error:    false
    */
    public static function getFileSavedTime($saveName)
    {
        $aryTemp = explode('_', $saveName);
        if (count($aryTemp) < 3) {
            return false;
        }
        return $$aryTemp[0];
    }

}

