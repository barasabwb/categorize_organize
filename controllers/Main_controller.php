<?php 
  class MainController extends BaseController
  {
      private $model;

      function __construct()
      {
          $this->model = $this->load_model('Main');
      }

      public function sayWelcome()
      {

          $rows = $this->model->retrieve_all('tbl_users', '*');
          print_r($rows);
      }

      public function home()
      {
          return $this->load_view('pages/main_page');
      }

      public function add_category(){
        
      }

  }


