<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Dapatkan SEMUA rekod dari table users
      $users = DB::table('users')->get();

      return view('users/senarai', compact('users') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      $user = DB::table('users')->where('id', $id)->first();

      // Die and Dump
      // dd( $user );

      // Paparkan template edit user
      return view('users/edit', compact('user') );
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
          'name' => 'required|min:3',
          'email' => 'required|email|unique:users,email,'.$id,
          'unit' => 'required',
          'status' => 'required',
          'phone' => 'required',
          'password' => 'min:3'
        ]);

        // Terima semua Senarai Input Dari Borang kecuali yang dinyatakan
        // dalam bentuk array
        $inputs = $request->except('password', '_token', '_method');
        // Cek jika input password tidak kosong
        if ( ! empty( $request->input('password') ) )
        {
          // Jika password tidak kosong, bcrypt password dan attach ke $inputs
          $inputs['password'] = bcrypt( $request->input('password') );
        }
        // Update table users dengan ID yang dipilih ($id)
        DB::table('users')->where('id', $id)->update($inputs);
        // Kembali ke halaman sebelum jika berjaya update
        return redirect()->back()->with('status', 'Profile dikemaskini!');


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
      DB::table('users')->where('id', $id)->delete();
      // Kemudian kembali ke senarai users
      return redirect('users')->with('status', 'User telah dihapuskan.');
    }
}
