<?php 

Blade::if('test',function(){

if(auth()->check()){
return false;
}else{
return true;
}


});

?>