<?php

namespace App\Http\Controllers;

use App\Models\PendaftarModel;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index() {
      $data = array(
        'pendaftar' => PendaftarModel::all()
      );
      return View('pendaftar', $data);
    }

    public function detail($id) {
      $pendaftar = PendaftarModel::find($id);
      if(count((array) $pendaftar) > 0) {
        $data = array (
          'pendaftar' => $pendaftar
        );
        return View('detailpendaftar', $data);
      } else {
        return redirect('/pendaftarkerja');
      }
    }
}
