@extends('layouts/app')

@section('content')

<div class="container">

  <div class="row">

      <div class="col-md-12">

        <div class="panel panel-default">

          <div class="panel-heading">
            <h2 class="panel-title">Senarai Users</h2>
          </div><!--tutup panel-heading-->

          <div class="panel-body">

            @if ( session('status') )
            <div class="alert alert-info">
              {{ session('status') }}
            </div>
            @endif

            <a href="{{ url('users') }}/add" class="btn btn-primary">Tambah User</a>

            @if ( count( $users ) )

              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Unit</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>

                <tbody>

                  @foreach( $users as $key )

                  <tr>

                    <td>{{ $key->id }}</td>
                    <td>{{ $key->name }}</td>
                    <td>{{ $key->email }}</td>
                    <td>{{ $key->unit }}</td>
                    <td>{{ $key->phone }}</td>
                    <td>{{ $key->status }}</td>
                    <td>
                      <a href="{{ url('users') }}/{{ $key->id }}" class="btn btn-xs btn-primary">Edit</a>



                      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#user-{{ $key->id }}">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="user-{{ $key->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sah Hapus</h4>
      </div>
      <div class="modal-body">

        <p>Adakah anda bersetuju untuk menghapuskan data ID: {{ $key->id }}</p>

        <form method="POST" action="{{ url('users') }}/{{ $key->id }}">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger">Sah Hapus</button>
        </form>

      </div>
    </div>
  </div>
</div>

                    </td>

                  </tr>

                  @endforeach

                </tbody>

              </table>

            @endif

          </div><!--tutup panel-body-->

        </div><!--tutup panel-default-->

      </div><!--tutup col-md-12 -->

  </div><!--tutup row-->

</div><!--tutup container-->



@endsection
