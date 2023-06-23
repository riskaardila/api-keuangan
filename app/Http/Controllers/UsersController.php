<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();

            return datatables()->of($query)
                ->addIndexColumn()
                ->editColumn('action', function ($item) {
                    return '
                    <div class="d-flex">
                        <a href="' . route('users.show', $item->id) . '" class="btn btn-info btn-sm mb-3 mx-1">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="' . route('users.edit', $item->id) . '" class="btn btn-warning btn-sm mb-3 mx-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.user.index');
    }
}
