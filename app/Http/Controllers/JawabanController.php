<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index($id) {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('jawaban.index', compact('pertanyaan'));
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('jawaban.form', compact('pertanyaan'));
    }

    public function store(Request $request) {

        return redirect('/pertanyaan');
    }
}
