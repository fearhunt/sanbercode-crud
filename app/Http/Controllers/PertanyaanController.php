<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request) {
        $request['created_at'] = date("Y-m-d H:i:s");
        $request['updated_at'] = date("Y-m-d H:i:s");
        $request['likes'] = 0;
        $request['dislikes'] = 0;
        $request['votes'] = 0;
        // dd($request->all());
        $pertanyaan_baru = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
    }

    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }
}
