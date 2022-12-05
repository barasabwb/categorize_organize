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
        $row = $this->model->retrieve_row('tbl_categories', 'category_name', $where);
        $data['categories'] = $row;
        return $this->load_view('pages/main_page', $data);
      }

      public function add_category(){
        $i=1;
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $categories = [];
            foreach($_POST['category_name'] as $category){
                $categories[$category] =  [
                    'name' => $category,
                    'position' => $i,
                    'mods'=>''
                ];  
            }
            $categories = json_encode($categories);
           $data = [
            'category_name' =>$categories
            ];
           $this->model->insert_data('tbl_categories',$data);
        }
      }

      public function get_category_mods(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $where= [
                'user_id'=>0
            ];
            $category = $this->model->retrieve_row('tbl_categories', 'category_name', $where);
            $category = json_decode($category->category_name);
            $name = $_POST['category'];
            if(empty($category->$name->mods)){
                $html = '  <tr class="border-b bg-gray-50 border-gray-200 no_mods">
            <td class="text-md text-center text-gray-900 font-medium px-6 py-4 whitespace-nowrap">NO DATA SET </td></tr>';
                echo json_encode($html);
            }else{
                $html = '  <tr class="border-b bg-gray-50 border-gray-200 mod_section">
            <td class="text-md text-center text-gray-900 font-medium px-6 py-4 whitespace-nowrap">';
            }

        }
      }

      public function add_mod_to_category(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $where= [
                'user_id'=>0
            ];
            $category = $this->model->retrieve_row('tbl_categories', 'category_name', $where);
            $category = json_decode($category->category_name);
            $mod = $_POST['mod'];
            $name = 'SFSFSF';
            $mod = [
                "name"=> $mod,
                'position'=>1
            ];
            $category->$name->mods = (object)$mod;
            $data = [
                'category_name' =>json_encode($category)
               
            ];
            $this->model->update_row('tbl_categories', $data, $where);

        }
      }


  }


