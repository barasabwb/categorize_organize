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
        $where= [
            'user_id'=>0
        ];
        $row = $this->model->retrieve_row('tbl_categories', '*', $where);
        $data['categories'] = $row;
        return $this->load_view('pages/main_page', $data);
      }

      public function add_category(){
        $i=1;
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $categories = [];
            foreach($_POST['category_name'] as $category){
                $categories[] =  [
                    'name' => $category,
                    'position' => $i
                ];  
            }
            $categories = json_encode($categories);
           $data = [
            'category_name' =>$categories
            ];
           $this->model->insert_data('tbl_categories',$data);
        }
      }

  }


