<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function create()
    {
        $title = "Thêm danh mục mới";
        return view('admin.menu.add', compact('title'));
    }
}
