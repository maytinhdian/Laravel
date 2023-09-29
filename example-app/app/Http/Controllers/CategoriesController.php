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
        return view('client/categories/list')
    }
    public function getCategory($id)
    {
        return 'Chi tiết chuyên mục ' . $id;
    }
    //Sửa 1 chuyên mục ( Phương thức POST)
    public function updateCategory($id)
    {
    }
    //Show form thêm dữ liệu ( Phương thức GET)
    public function addCategory(){
        return 'Form thêm chuyên mục ';
    }
    
    //Show form thêm dữ liệu  
    public function showCategory()
    {
    }
    //Thêm dữ liệu vào chuyên mục ( Phương thức POST)
    public function handleAddCategory()
    {
    }
    //Xóa dữ liệu (phương thức DELETE)
    public function deleteCategory()
    {
    }
}