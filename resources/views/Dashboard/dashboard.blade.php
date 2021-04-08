@extends('template')

@section('content')
<head>
    <style>
        .card-body{
            float: left;
        }
    </style>
</head>
<br>
<br>
<div class="container">
    <h1>Assalamualaikum {{ Session::get('name') }}</h1>
    <h3>Selamat datang di toko Kolangan.id</h3>
    <h6>Terimakasih sudah berkunjung di website kami semoga sehat selalu dan di berikan keberkahan</h6>
</div>
<div class="container">
<div class="card-group">
  <div class="card">
    <img src="image/beras1.jpg" class="card-img-top" alt="image/beras1.jpeg">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="image/daging1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="image/daging2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div>


@stop