<?php
/***
   Shailesh Singh PHP Developer
***/
  
  // COde in your Function which will be hit to show the page
  // Include the File view.php 
    include_once "./auto/view.php";
   // Create the Object of the class
    $view = new View();
    // Data Which is to be send to the view page
    $data=array('foo' => 'bar');
     // Call to render () function to show the view page in view.php
    echo $view->render('/var/www/html/auto/viewfile.php', array('foo' => 'bar','data'=>$data));

?>
