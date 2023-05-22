<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index(){
        $jadwal = DB::table('tb_jadwal')->get();
        return view('jadwal', compact('jadwal'));
    }
}
