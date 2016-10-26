@extends('layouts/app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-default">
          <div class="panel-heading">Sistem Tempahan Bilik</div>
            <div class="panel-body">

              <p>Selamat datang!</p>
              <ol>
                <li>Untuk membuat tempahan bilik seminar, <a href="{{ url('tempahan') }}">sila klik sini</a>.</li>
                <li>Untuk menyemak status tempahan bilik seminar, <a href="{{ url('status') }}">sila klik sini</a>.</li>
              <ol>

            </div>
      </div>

    </div>

  </div>
</div>

@endsection
