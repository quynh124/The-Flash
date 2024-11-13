<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Models\MyMatch; // Import model Match
    use App\Models\Club;  // Import model Club



    class FixturesController extends Controller
    {
        public function fixture()
        {
            $matches = MyMatch::all(); // Lấy tất cả dữ liệu từ bảng match
            $clubs = Club::all();     // Lấy tất cả dữ liệu từ bảng club

            return view('client-pages.fixtures.index', [
                'matches' => $matches,
                'clubs' => $clubs,
            ]);
        }
    }




