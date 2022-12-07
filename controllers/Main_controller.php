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

        $row = $this->model->retrieve_row('tbl_categories', 'category_name', ['user_id'=>0]);
        $data['categories'] = $row;
        return $this->load_view('pages/main_page', $data);
    }

    public function add_category()
    {
        $i = 1;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categories = [];
            if($this->model->check_if_exists('tbl_categories', '*', ['user_id'=>0])){
                $category = $this->model->retrieve_row('tbl_categories', 'category_name', ['user_id' => 0]);
                $categories = json_decode($category->category_name, true);
                $size = sizeof($categories)+1;
                foreach ($_POST['category_name'] as $add_cat) {
                    $categories[$add_cat] = [
                        'name' => $add_cat,
                        'position' => $size,
                    ];
                    $size++;
                }
                $data = [
                    'category_name' => json_encode($categories),
                ];
                $this->model->update_row('tbl_categories', $data, ['user_id'=>0]);

            }else{
                foreach ($_POST['category_name'] as $category) {
                    $categories[$category] = [
                        'name' => $category,
                        'position' => $i,
                    ];
                    $i++;
                }
                $categories = json_encode($categories);
                $data = [
                    'category_name' => $categories,
                ];
                $this->model->insert_data('tbl_categories', $data);
            }
            echo json_encode('added');
        }
    }

    public function get_category_mods()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $where = [
                'user_id' => 0,
            ];
            $category = $this->model->retrieve_row('tbl_categories', 'category_name', $where);
            $category = json_decode($category->category_name);
            $name = $_POST['category'];
            if (!isset($category->$name->mods)) {
                $html = '  <tr class="border-b bg-gray-50 border-gray-200 no_mods">
            <td class="text-md text-center text-gray-900 font-medium px-6 py-4 whitespace-nowrap">NO DATA SET </td></tr>';
                echo json_encode($html);
            } else {
                $html = '';
                foreach ($category->$name->mods as $mod) {
                    $html .= '  <tr class="border-b bg-gray-50 border-gray-200 mod_section">
                                    <td class="text-md text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        <input class="w-full mod_input" type="text" value="'.$mod->name.'" readonly />
                                    </td>
                                      <td class="text-md text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                        <button type="button" id="'.$mod->name.'" class="delete_item_btn delete_mod_btn px-3 py-1.5 bg-red-600 text-white font-medium text-lg leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>';

                }

                echo json_encode($html);
            }
        }
    }

    public function add_mod_to_category()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $category = $this->model->retrieve_row('tbl_categories', 'category_name', ['user_id' => 0]);
            $category = json_decode($category->category_name, true);
            $mod_name = $_POST['mod'];
            $category_name = $_POST['category_name'];
            $size=0;
            if(isset($category[$category_name]['mods'])){
                $size= sizeof( $category[$category_name]['mods']);
            }

            $mod = [
                "name" => $mod_name,
                'position' => $size+1,
            ];
            $category[$category_name]['mods'][$mod_name] = $mod;
            $where = [
                'user_id' => 0,
            ];
            $data = [
                'category_name' => json_encode($category),
            ];
            $this->model->update_row('tbl_categories', $data, $where);
            echo json_encode('added');
        }
    }

    public function delete_property($args){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $category = $this->model->retrieve_row('tbl_categories', 'category_name', ['user_id' => 0]);
            $category = json_decode($category->category_name);
            $category_name = $_POST['category_name'];

            if($args[0]=="category"){
                if(property_exists($category, $category_name)){

                    unset($category->$category_name);

                }else{
                    echo json_encode('not deleted');
                    return false;
                }
            }else if($args[0]=="mod"){
                $mod_name = $_POST['mod_name'];
                if(!empty($category->$category_name->mods)){
                    if(property_exists($category->$category_name->mods, $mod_name)){
                        unset($category->$category_name->mods->$mod_name);
                    }else{
                        echo json_encode('not deleted');
                        return false;
                    }
                }else{
                    echo json_encode('empty');
                    return false;
                }
                
            }
            $data = [
                'category_name' => json_encode($category),
            ];
            $this->model->update_row('tbl_categories', $data, ['user_id'=>0]);
            echo json_encode('deleted');
        }else{
            echo "no";
        }
    }


}
