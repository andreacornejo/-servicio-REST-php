<?php
echo $_SERVER["REQUEST_METHOD"];

switch($_SERVER["REQUEST_METHOD"]){
    case 'GET':
        #READ code...
        echo " llamada GET";
        echo $_SERVER["QUERY_STRING"];
        echo $_SERVER["REQUEST_URI"];
    break;
    case 'POST':
        #CREATE...
        echo " llamada POST";
        echo $_SERVER["QUERY_STRING"];
        echo $_SERVER["REQUEST_URI"];
    break;
    case 'PUT':
        #UPDATE code...
        echo " llamada PUT";
        echo $_SERVER["QUERY_STRING"];
        echo $_SERVER["REQUEST_URI"];
    break;
    case 'DELETE':
        #DELETE code...
        echo " llamada DELETE";
        echo $_SERVER["QUERY_STRING"];
        echo $_SERVER["REQUEST_URI"];
    break;
    default:
        #code...
    break;            
}
?>