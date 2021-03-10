<?php
namespace App\Libs;

class Common {
  public static function data () {
    return date("Y-m-d H:i:s");
  }
    
  public function say_goodbye () {
    return 'Good bye.';
  }
}
?>