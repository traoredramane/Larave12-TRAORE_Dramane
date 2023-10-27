@extends('layouts.app')

@section('content')
<div class="container">
<h1>Déposer une annonce</h1>
<hr>

<form method="POST" action="{{ route('ad.store') }}">
@csrf
    
<div class="mb-3">
  <label for="title" class="form-label">Titre de l'annonce</label>
  <input type="texte" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title">
  @if ($errors->has('title'))
  <span class="invalid-feedback">{{ $errors->first('title') }}</span>
      
  @endif
</div>
<div class="form-group">
<label for="description">Description de l'annonce</label>
<textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
</div>


<div class="mb-3">
    <label for="localisation" class="form-label">Localisation</label>
    <input type="texte" class="form-control" id="localisation" name="localisation">
  </div>
  

<div class="mb-3">
  <label for="price" class="form-label">Prix</label>
  <input type="texte" class="form-control" id="price" name="price">
</div>




<br>
<button type="submit" class="btn btn-primary">Soumettre notre annonce</button>


</form>
</div>
@endsection 