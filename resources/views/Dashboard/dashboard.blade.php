@extends('template')

@section('content')

<br>
<br>
<div class="container">
    <h1>Assalamualaikum {{ Session::get('name') }}</h1>
    <h3>Selamat datang di toko Kolangan.id</h3>
    <h6>Terimakasih sudah berkunjung di website kami semoga sehat selalu dan di berikan keberkahan</h6>
</div>
<div class="container mt-4">
<div class="row">
    <div class="card" style="width: 18rem;">
        <img src="image/daging1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <img src="image/daging1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> 
    </div>    
</div>


@stop