<?php

include('include/header.php');

include('include/left_side_bar.php');

<<<<<<< HEAD
include('talle_caller/'.$page.'.php'); 
=======

if ($this->router->fetch_class() == 'telecaller') {  
   
    include('talle_caller/'.$page.'.php'); 
}

if ($this->router->fetch_class() == 'admin') {   
  
    include('admin/'.$page.'.php');
}

if ($this->router->fetch_class() == 'user') {    
    include('user/'.$page.'.php'); 
}
>>>>>>> 2febd8fdedcb36f18aede72f1f7cab1cd2979e7d

include('include/footer.php'); 


