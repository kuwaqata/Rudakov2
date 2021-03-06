<?php

namespace rudakov;

use core\LogAbstract;
use core\LogInterface;


Class MyLog extends LogAbstract implements LogInterface {

    public function _log(String $str){
        $this->log[]=$str;
    }

    /**
     * @param String $str строка для записи в массив лога
     */
    public static function log(String $str):void {
        self::Instance()->_log($str);
	}
    
    public function _write(){
        $date = date('d-m-Y\_H.i.s.u');
        foreach($this->log as $value){
            echo $value."\n";
            if(!is_dir("log")) {
                mkdir("log", 0700);
            }
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "log\\$date.log", trim($value."\r\n") . PHP_EOL, FILE_APPEND);
        }
        
    }
    
    public static function write():void{
        self::Instance()->_write();
    }

}

?>