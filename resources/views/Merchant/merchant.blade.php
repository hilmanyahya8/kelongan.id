@extends('template')

@section('content')

<br>
<br>
    <div class="container">
    <h1>Merchant</h1>
    @if (session('alert_pesan'))
        <div class="alert alert-success">
            {{ session('alert_pesan') }}
        </div>
    @endif
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Merchant</th>
                <th>id_user</th>
                <th>nama_merchant</th>
                <th>address</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- @php $no = 1; @endphp -->
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->nama_merchant}}</td>
                <td>{{ $dt->address}}</td>
                <td>{{ $dt->id_user}}</td>
                <td>{{ $dt->name}}</td>
                <td>

                  <form action="{{ url('merchant_destroy', $dt->id )}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('merchant_edit', $dt->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        <a href="{{url('merchant_create')}}" class="btn btn-sm btn-success">Tambah data merchant</a>
    </div>

@stop