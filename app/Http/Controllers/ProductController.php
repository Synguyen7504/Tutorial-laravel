<?php

namespace App\Http\Controllers;

class productcontroller extends Controller
{
    private $name;
    private $age;
    public function index()
    {
        $title = "This is laravel";
        $arr = [
            $x = 18,
            $y = 20
        ];
        $object = [
            'a' => 1,
            'z' => 2
        ];
        // xuất xuất dữ liệu ra trang blade bằng compact or
        // return view('viewClass', compact('title', 'arr'));
        // xuất bằng mảng
        return view('viewClass', [
            'title' => $title,
            'arr' => $arr,
            'object' => $object
        ]);
    }
    // chi tiết sản phẩm lấy id
    public function detail($id)
    {
        $listFood = [
            'food1' => 'Check pass 1',
            'food2' => 'Check pass 2',
        ];
        return view('list.detail', [
            'detail' => $listFood[$id] ?? 'Undefine Food'
        ]);
    }
}
