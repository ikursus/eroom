@extends('layouts/app')

@section('content')

<div class="container">

  <div class="row">

      <div class="col-md-12">

        <div class="panel panel-default">

          <div class="panel-heading">
            <h2 class="panel-title">Tambah User</h2>
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

            <a href="{{ url('users') }}" class="btn btn-primary">Senarai Users</a>

            <hr>

            <form method="POST" action="{{ url('users') }}/add">

              {{ csrf_field() }}

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Unit</label>
                <input type="text" name="unit" value="{{ old('unit') }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" value="{{ old('status') }}" class="form-control">
              </div><!-- tutup form-group -->

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block">Minima 6 huruf.</span>
              </div><!-- tutup form-group -->

              <button type="submit" class="btn btn-primary">Simpan Maklumat</button>

            </form>


          </div><!--tutup panel-body-->

        </div><!--tutup panel-default-->

      </div><!--tutup col-md-12 -->

  </div><!--tutup row-->

</div><!--tutup container-->



@endsection
