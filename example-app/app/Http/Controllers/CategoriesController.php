<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(Request $request)
    {
        /*
        Nếu là trang danh sách chuyên mục => hiển thị ra dòng chữ: xin chào unicode 
         */
        if ($request->is('categories')) {
            echo '<h3> Xin chào Unicode</h3>';
        }
    }

    //Hiển thị danh sách chuyên mục ( Phương thức GET )
    public function index(Request $request)
    {


        // if(isset($_GET['id'])){
        //     echo $_GET['id'];
        // }

        // //Phương thức của $request 
        // $allData = $request->all();

        // dd($allData);

        // $path = $request->path();
        // echo $path;

        $id = $request->query('id');
        dd($id);
        return view('clients/categories/list');
    }
    public function getCategory($id)
    {
        return 'Chi tiết chuyên mục ' . $id;
    }
    //Sửa 1 chuyên mục ( Phương thức POST)
    public function updateCategory($id)
    {
        return  'Submit sửa chuyên mục: ' . $id;
    }
    //Show form thêm dữ liệu ( Phương thức GET)
    public function addCategory(Request $request)
    {
        $path = $request->path();
        echo $path;
        return view('clients/categories/add');
    }
    //Thêm dữ liệu vào chuyên mục ( Phương thức POST)
    public function handleAddCategory(Request $request)
    {
        // $allData = $request->all();
        // dd($allData);
        // print_r($_POST);

        // return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';

        // $cateName = $request->category_name;
        // dd($cateName);

        if ($request->has('category_name')) {
            $cateName = $request->category_name;
            dd($cateName);
        }else{
            return 'Không có category_name';
        }
    }
    //Xóa dữ liệu (phương thức DELETE)
    public function deleteCategory($id)
    {
        return 'Submit xóa chuyên mục: ' . $id;
    }
}
