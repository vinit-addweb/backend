

<?php

interface logger{
    public function log(string $msg);
}
class application{
    private $logger;

    public function getLogger(): logger{
        return $this->logger;
    }

    public function setLogger(logger $logger){
        $this->logger=$logger;
    }
}

$app=new application;
$app->setLogger(new class implements logger{
    public function log(string $msg){
        print($msg);
    }
});

$app->getLogger()->log("Hello my name is vinit");
?>
