<?php 
  class MainController extends BaseController
  {
      private $model;

      function __construct($model)
      {
          $this->model = $model;
      }

      public function sayWelcome()
      {
          return $this->model->welcomeMessage();
      }

      public function home()
      {
          return $this->load_view('pages/main_page');
      }

  }


