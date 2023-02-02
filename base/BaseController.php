<?php 
  class BaseController
  {
        
      public function load_view($view,$meta=null, $data=null)
      {
        if($meta!==null){
          $meta= (object)$meta;
        }
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

      public function redirect($url){
        $url= ROOT.$url;
        header("Location: $url");
        die();
      }

      public function checkLogin(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
          return true;
        }
        return false;
      }

      public function parse_body_tags($body, $array){
        $repl = preg_replace_callback('/{{([^}]+)}}/', function ($m) use ($array) {
          return $array[$m[1]]; }, $body);
        return $repl;
      }

  }


