<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {
    }

    //Hiển thị danh sách chuyên mục ( Phương thức GET )
    public function index()
    {
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
    public function addCategory()
    {
        return view('clients/categories/add');
    }
    //Thêm dữ liệu vào chuyên mục ( Phương thức POST)
    public function handleAddCategory()
    {
        return redirect(route('categories.add'));
        // return 'Submit thêm chuyên mục';
    }
    //Xóa dữ liệu (phương thức DELETE)
    public function deleteCategory($id)
    {
        return 'Submit xóa chuyên mục: '.$id;
    }
}