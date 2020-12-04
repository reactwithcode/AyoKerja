<?php

namespace App\Http\Controllers;
use App\Models\PendaftarModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
      $data = array(
        'pendaftar' => PendaftarModel::inRandomOrder()->take(4)->get()
      );

      return View('home', $data);
    }
}
