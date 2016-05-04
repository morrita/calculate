<?php
 
// filename calculate.php
 
class addResponseObject {
    public $out;
}
 
class subtractResponseObject {
    public $out;
}
 
function subtract($receivedinput) {
 
    $firstNum = $receivedinput->inputRecord->firstNum;
    $secondNum = $receivedinput->inputRecord->secondNum;
    $result = $firstNum - $secondNum;
     
    $response = new subtractResponseObject;
    $response->out = $result;
    return  $response;
}
 
function add($receivedinput) {
     
    $firstNum = $receivedinput->inputRecord->firstNum;
    $secondNum = $receivedinput->inputRecord->secondNum;
    $result = $firstNum + $secondNum;
     
    $response = new addResponseObject;
    $response->out = $result;
    return  $response;    
}
 
$classmap = array ('addResponseObject' => 'addResponse',
                    'subtractResponseObject' => 'subtractResponse');
 
ini_set("soap.wsdl_cache_enabled",0);
$server = new SoapServer ( "/var/www/calculate/calculate.wsdl", array('classmap'=>$classmap));
$server->addFunction (array("add","subtract"));
$server->handle ();
?>
