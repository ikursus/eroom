<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// Panggil Model Class Bilik
use App\Bilik;

class BilikController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Dapatkan SEMUA rekod dari table bilik
    // Dan setkan pagination 10 senarai per page
    $bilik = Bilik::paginate(10);

    // Bilik::all() dapatkan semua data dari table bilik
    // Bilik::where('column', 'data')->get(); - dapatkan data berdasarkan kondisi
    // Bilik::take(5)->get(); - ini dapatkan 5 rekod terawal

    return view('bilik/senarai', compact('bilik') );

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('bilik/tambah');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // Validasi input dari borang
      $this->validate( $request, [
        'jenis' => 'required|min:3',
        'lokasi' => 'required',
        'kapasiti' => 'required',
        'fasiliti' => 'required',
      ]);

      // Terima semua Senarai Input Dari Borang
      $inputs = $request->all();

      // Simpan data ke table bilik
      Bilik::create($inputs);

      // Kembali ke halaman senarai users jika berjaya update
      return redirect('bilik')->with('status', 'Bilik baru ditambah!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    // Dapatkan hanya 1 rekod user berdasarkan ID yang dipilih
    $bilik = Bilik::find($id);

    // Paparkan template edit user
    return view('bilik/edit', compact('bilik') );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // Validasi input dari borang
      $this->validate( $request, [
        'jenis' => 'required|min:3',
        'lokasi' => 'required',
        'kapasiti' => 'required',
        'fasiliti' => 'required',
      ]);

      // Terima semua Senarai Input Dari Borang
      $inputs = $request->all();

      // Simpan data ke table bilik
      Bilik::find($id)->update($inputs);

      // Kembali ke halaman sebelum jika berjaya update
      return redirect()->back()->with('status', 'Bilik dikemaskini!');


  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    // Dapatkan data berdasarkan ID dan hapuskan ia
    Bilik::find($id)->delete();
    // Kemudian kembali ke senarai users
    return redirect('bilik')->with('status', 'Bilik telah dihapuskan.');
  }
}
