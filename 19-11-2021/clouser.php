
<?php
class Ab{
    private $x=1;
}
$getValue=function(){
    return $this->x;
};
$value=$getValue->bindTo(new Ab,'Ab');

print($value());
?>