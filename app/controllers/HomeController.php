<?php 

session_start();


require BASE_CONTROLLER;

function index(){
  
    
    viewSite('home/index');

}
function test(){
    viewSite('home/test');
}


?>