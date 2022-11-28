<?php 
  class BaseController
  {
        
      public function load_view($view)
      {
        require_once BASE.'../views/inc/header.php';
        require_once BASE.'../views/inc/navigation_bar.php';
        require_once BASE.'../views/'.$view.'.php';
        require_once BASE.'../views/inc/footer.php';
    }

  }


