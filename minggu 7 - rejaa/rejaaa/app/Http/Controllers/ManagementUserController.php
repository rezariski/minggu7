<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{  
    public function index()
    {
       return "Ini metode index dalam controller ManagementUser,";
       //  return "Metode ini digunakan untuk mengambil semua data user";
    }
public function create()
{
    return "Metode ini digunakan untuk menampilkan form untuk menambah data user";
}

public function store(Request $request)
{
    return "Metode ini digunakan untuk menciptakan data user yang baru";
}

public function show($id)
{
    return "Metode ini digunakan untuk mengambil satu data user dengan id=" . $id;
}

public function edit($id)
{
    return "Metode ini digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
}

public function update(Request $request, $id)
{
    return "Metode ini digunakan untuk mengubah data user dengan id=" . $id;
}

public function destroy($id)
{
    return "Metode ini digunakan untuk menghapus data user dengan id=" . $id;
}
}