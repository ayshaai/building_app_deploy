<?php

namespace App\Http\Controllers;
// new add
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
//
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
