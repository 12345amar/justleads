<?php

include('include/header.php');

include('include/left_side_bar.php');


if ($this->router->fetch_class() == 'telecaller') {  
   
    include('talle_caller/'.$page.'.php'); 
}

if ($this->router->fetch_class() == 'admin') {   
  
    include('admin/'.$page.'.php');
}

if ($this->router->fetch_class() == 'user') {    
    include('user/'.$page.'.php'); 
}


include('include/footer.php'); 


