@extends('layouts/app')

@section('content')

<div class="container">

  <div class="row">

      <div class="col-md-12">

        <div class="panel panel-default">

          <div class="panel-heading">
            <h2 class="panel-title">Edit Bilik - {{ $bilik->jenis }}</h2>
          </div><!--tutup panel-heading-->

          <div class="panel-body">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ( session('status') )
            <div class="alert alert-info">
              {{ session('status') }}
            </div>
            @endif

            <a href="{{ url('bilik') }}" class="btn btn-primary">Senarai Bilik</a>

            <hr>

            <form method="POST" action="{{ url('bilik') }}/{{ $bilik->id }}">

              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PATCH">

              <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" value="{{ old('jenis', $bilik->jenis) }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" value="{{ old('lokasi', $bilik->lokasi) }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Kapasiti</label>
                <input type="text" name="kapasiti" value="{{ old('kapasiti', $bilik->kapasiti) }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Fasiliti</label>
                <textarea name="fasiliti" class="form-control">{{ old('fasiliti', $bilik->fasiliti ) }}</textarea>
              </div><!-- tutup form-group -->

              <button type="submit" class="btn btn-primary">Kemaskini Maklumat</button>

            </form>


          </div><!--tutup panel-body-->

        </div><!--tutup panel-default-->

      </div><!--tutup col-md-12 -->

  </div><!--tutup row-->

</div><!--tutup container-->



@endsection
