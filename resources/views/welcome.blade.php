@extends('layouts.app')

@section('content')
<div class="container">
@if ($request->session()->has('success'))
    <div class="alert alert-success">
    {{ $request->session()->first('success') }}
    </div>
@endif
<h1>Monboncoin</h1>
</div>
@endsection