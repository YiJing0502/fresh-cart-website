<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //產品列表
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //新增資料
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //新產品儲存功能
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //產品編輯頁
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //資料更新功能
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //刪除資料功能
    }
}
