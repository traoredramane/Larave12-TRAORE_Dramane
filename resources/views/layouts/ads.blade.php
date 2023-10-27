@extends('layouts.app')

@section('content')
<div class="container">
@foreach ( $ads as $ad )
    <div class="d-flex justify-content-center">
<div class="card mb-3" style="width: 50%;">
<div class="card-body">
<h5 class="card-title">{{ $ad->title }}</h5>
<h6 class="card-sublitle mb-2 text-muted">{{ $ad->localisation }}</h6>
<p class="card-text">{{ $ad->description }}</p>
<a href="#" class="card-link">Voir l'annonce</a>
<a href="{{ route('message.create', ['seller_id' =>$ad->user_id, 'ad_id' => $ad->id ]) }}" class="card-link">Contacter le vendeur</a>
</div>
</div>
    </div>
@endforeach
{{ $ads->links() }}
</div>
@endsection