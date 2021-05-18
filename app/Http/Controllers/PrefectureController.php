<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prefecture;

class PrefectureController extends Controller {

  public function all() {
    return $prefectures = Prefecture::all();
  }

  public function create(Request $request) {
    $newPrefecture = new Prefecture();
    $newPrefecture->name = $request->name;
    $newPrefecture->description = $request->description;

    $newPrefecture->save();

    return $this->listView();
  }

  public function listView() {
    $allPrefectures = $this->all();
    return view('prefectures', ['prefectures' => $allPrefectures]);
  }
}
?>