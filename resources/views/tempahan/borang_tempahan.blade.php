@extends('layouts/app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Borang Tempahan Bilik</div>
<div class="panel-body">

<form method="POST" action="{{ url('tempahan') }}">

<div class="form-group">
<label>Pilih Bilik</label>
<select name="bilik_id" class="form-control">
@foreach( $bilik as $key => $value )
<option value="{{ $key }}">{{ $value }}</option>
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
<input type="text" name="jam" class="form-control">
</div>

<div class="form-group">
<label>Aktiviti</label>
<textarea name="aktiviti" class="form-control"></textarea>
</div>

<div class="form-group">
<label>Nama Penempah</label>
<input type="text" name="nama_penempah" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
<label>Telefon</label>
<input type="text" name="phone" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Tempah Bilik</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
