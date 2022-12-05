<?php 
  class BaseController
  {
        
      public function load_view($view, $data=null)
      {
        if($data!==null){
          $data= (object)$data;
        }
        require_once BASE.'../views/inc/header.php';
        require_once BASE.'../views/inc/navigation_bar.php';
        require_once BASE.'../views/'.$view.'.php';
        require_once BASE.'../views/inc/modals.php';
        require_once BASE.'../views/inc/footer.php';
      }

      public function load_model($model){
        require_once BASE.'../Models/'.$model.'_model.php';
        $model = ucfirst($model).'Model';
        return new $model();

      }

  }


