<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;

class Search extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = product::where('name', 'like', '%'.$search.'%')
            ->orWhere('long_description', 'like', '%'.$search.'%')
            ->get();
            // dd($results);
        return view('publicUser.search', ['results' => $results]);
    }
}
