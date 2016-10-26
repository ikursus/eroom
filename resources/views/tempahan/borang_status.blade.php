@extends('layouts/app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Borang Status Tempahan</div>
<div class="panel-body">

<form method="POST" action="{{ url('status') }}">

{{ csrf_field() }}

<div class="form-group">
<label>Email Tempahan</label>
<input type="email" name="email" class="form-control">
<span class="help-block">Sila masukkan alamat email yang anda gunakan sewaktu tempahan.</span>
</div>

<button type="submit" class="btn btn-primary">Semak Status</button>

</form>

</div>
</div>
</div>
</div>
</div>

@endsection
