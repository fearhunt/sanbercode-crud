<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
  public static function get_all() {
    $pertanyaan = DB::table('pertanyaan')->get();
    return $pertanyaan;
  }

  public static function save($data) {
    unset($data["_token"]);
    $pertanyaan_baru = DB::table('pertanyaan')->insert($data);
    return $pertanyaan_baru;
  }

  public static function find_by_id($id) {
    $data = DB::table('pertanyaan')->where('id', $id)->first();
    return $data;
  }

  public static function update($id, $request) {
    $data = DB::table('pertanyaan')->where('id', $id)->update(['jawaban_benar' => $request["jawaban_benar"]]);
    return $data;
  }

  public static function delete($id) {
    $deleted = DB::table('pertanyaan')->where('id', $id)->delete();
    return $deleted;
  }
}