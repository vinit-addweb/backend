<?php
   trait Reader{
    public function add($var1,$var2){
       return $var1+$var2;
    }
 }
 trait writer {
    public function multiplication($var1,$var2){
       return $var1*$var2;
    }
 }
 class File {
    use Reader;
    use writer;
    public function calculate($var1,$var2){
       echo "Result is:".$this->add($var1,$var2) ."\n";
       echo "Result is:".$this->multiplication($var1,$var2);
    }
 }
 $o = new File();
 $o->calculate(5,3);
?>