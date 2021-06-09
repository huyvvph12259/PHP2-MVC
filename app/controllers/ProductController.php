<?php
    namespace App\Controllers;
    use App\Models\Category;

class ProductController extends BaseController{
        public function detail(){
            $this->render('clients.detail');
        }
        public function uploadForm(){
            // render có 2 tham số
            // ts1: hiển thị ra ở view nào
            // ts2: truyeenf du lieu hien thi ngoai view
            $this->render('admin.product.upload-form');
        }
        public function saveImage(){
            $files = $_FILES['image'];
            var_dump($files);die;
            $names = $files['name'];
            $tmp_names = $files['tmp_name'];
            $imgs = [];
            foreach($names as $index =>$imgName){
                $filename = 'public/uploads/'. uniqid(). '-' .$imgName;
                move_uploaded_file($tmp_names[$index], './' .$filename);
                $imgs[] = $filename;
            }
            
            
        }
        public function addForm(){
            $categories = Category::all();
            $this->render('admin.product.add-form', compact('categories'));
        }
    }

?>