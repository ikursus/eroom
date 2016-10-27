<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bilik;
use App\Tempahan;
use Mail;

class TempahanController extends Controller
{
    public function borangTempahan()
    {
        // Variable data bilik
        $bilik = Bilik::all();

        return view('tempahan/borang_tempahan', compact('bilik') );
    }

    public function hantarTempahan( Request $request )
    {
      // Validation rules. Semak data dari borang
      $this->validate( $request, [
          'bilik_id' => 'required|integer',
          'tarikh_mula' => 'required|date',
          'tarikh_tamat' => 'required|date',
          'masa' => 'required',
          'jumlah_jam' => 'required|integer',
          'aktiviti' => 'required|min:3',
          'nama_tempahan' => 'required|min:3',
          'email_tempahan' => 'required|email',
          'telefon_tempahan' => 'required',
      ]);

      // Dapatkan semua data dari borang yang dihantar
      $inputs = $request->all();

      // Simpan data ke dalam Database
      Tempahan::create( $inputs );

      // Data yang nak di pass ke dalam template
      $data = [
        'email' => 'test@gmail.com',
      ];

      // Hantar email
      Mail::send('emails.template_email', $data, function($message) use($data) {
        $message->to($data['email']);
        $message->subject('Email Contoh');
      });

      // Redirect user ke halaman utama.
      return redirect('/')->with('status', 'Tempahan berjaya dihantar!');

    }

    public function borangStatus()
    {
        return view('tempahan/borang_status');
    }

    public function semakStatus( Request $request )
    {
      // Validation rules. Semak data dari borang
      $this->validate( $request, [
          'email_tempahan' => 'required|email'
      ]);

      // Paparkan hasil
      return $request->input('email_tempahan');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
