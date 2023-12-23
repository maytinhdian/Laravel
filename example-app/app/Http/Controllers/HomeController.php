<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Học lập trình web tại UNICODE VN';
        $content = "Học lập trình Laravel 9.x tại Unicode vn ";
        // $dataView = [
        //     'titleData' => $title,
        //     'contentData' => $contentData,
        // ];
        // return view('home', $dataView); //Load view home.php --> Cách 1 

        // return view('home',compact('title','content')); --> Cách 2 
        // return view('home')->with(['title'=>$title, 'content'=>$content]); //Cách 3 
        // return view('home', compact('title','content'));

        $contentView = view('home');
        echo $contentView;
    }

    //Action getNews()
    public function getNews()
    {
        return 'Danh sách tin tức';
    }
    public function getCategories($id)
    {
        return 'Chuyên mục: ' . $id;
    }
}
