<?php
function generator(){
    yield "hi";
    yield "hello";
    yield "hola";
}
function generator1(){
    yield "hyeee";
    yield "hellowww";
    yield "hollo...";
}
function generator2(){
    yield "heloooooo";
    yield "hiiiiiiiii";
    yield "byee";
    yield from generator();
    yield "tata";
    yield from generator1();
    yield "exit";
}
foreach(generator() as $value){
    echo $value,PHP_EOL;
}
foreach(generator2() as $value){
    echo $value,PHP_EOL;
}
?>