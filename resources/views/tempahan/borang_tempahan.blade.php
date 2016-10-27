@extends('layouts/app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Borang Tempahan Bilik</div>
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

{!! Form::open( [ 'method' => 'POST', 'action' => 'TempahanController@hantarTempahan' ] ) !!}

<div class="form-group">
<label>Pilih Bilik</label>
<select name="bilik_id" class="form-control">

@foreach( $bilik as $key )
<option value="{{ $key->id }}">{{ $key->jenis }} ({{ $key->lokasi }})</option>
@endforeach

</select>
</div>

<div class="form-group">
<label>Tarikh Mula</label>
<input type="date" name="tarikh_mula" class="form-control">
</div>

<div class="form-group">
<label>Tarikh Tamat</label>
<input type="date" name="tarikh_tamat" class="form-control">
</div>

<div class="form-group">
<label>Masa</label>
<input type="text" name="masa" class="form-control">
</div>

<div class="form-group">
<label>Jumlah Jam</label>
<input type="text" name="jumlah_jam" class="form-control">
</div>

<div class="form-group">
<label>Aktiviti</label>
<textarea name="aktiviti" class="form-control"></textarea>
</div>

<div class="form-group">
<label>Nama Penempah</label>
<input type="text" name="nama_tempahan" class="form-control" value="{{ old('nama_tempahan') }}">
</div>

<div class="form-group">
<label>Email</label>
{!! Form::email('email_tempahan', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
<label>Telefon</label>
<input type="text" name="telefon_tempahan" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Tempah Bilik</button>

{!! Form::close() !!}

</div>
</div>
</div>
</div>
</div>
@endsection
