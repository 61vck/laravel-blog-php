<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function getResults(Request $request){

        $query = $request->input('query');

        if (!$query){
            redirect()->route('home');
        }

        $users = User::where(DB::raw("CONCAT(full_name, '', email)"), 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();
//        $search_text = $_GET['query'];
//        $people = User::where('fullname', 'login', '%' .$search_text. '%')->get();
//
//        return view('search.results', compact('people'));
        return view('search.results')->with('users', $users);
    }
}
