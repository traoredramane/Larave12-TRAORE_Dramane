@extends('layouts.app')

@section('content')
<div class="container">
@if (session()->has('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}
    </div>
@endif
<h1>Monboncoin</h1>

<div class="container">
    @foreach ($ad as $ad)
    <div class="card col-lg-8 mb-2 p-1 co">
        <div class="card-header">

{{ $ad->title }}

        </div>
       
        <div class="card-footer text-muted">
            {{ $ad->description }}
        </div>
        <div class="card-footer text-muted">
            {{ $ad->price }}
        </div>
        <div class="card-footer text-muted">
            {{ $ad->localisation }}
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"> </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div> 

</div>
@endsection