<?php
include Q_PATH.'/application/biznes/Biznes_bet.php';
class Model_bet extends Model {

  	public static $all_bet = array();       
        
        public function set_data() {	
            
	}
	
	public function get_data() {
            
            $file = Q_PATH.'/upload/text.txt';
            $file_open = fopen($file, 'r');
            
            if ($file_open) {
                $file_array = file($file);
            }
            
            for ($i=0;$i<count($file_array);$i++) {
               $result_array[$i] = explode (";",$file_array[$i]);
            }
            return $result_array;
            
	}

}
