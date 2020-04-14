
@extends('layouts.master')

@section('content')
<div class="col-md-12">
  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">Categorie</strong>
      <h5 class="mb-0">{{$Product->title}}</h5>
      <p class="mb-auto">{{$Product->description}}</p>
      <strong class="mb-auto font-weight-normal text-secondary">{{$Product->getprice()}}</strong>
    <form action="{{route('cart.store')}}" method="POST">
      @csrf
      <input type="hidden" name="product_id" value="{{$Product->id}}">
      <button type="submit" class="btn btn-dark">Ajouter au panier</button>
    </form>  
    </div>
    <div class="col-auto d-none d-lg-block">
      <img src="{{$Product->image}}" alt="">
    </div>
  </div>
</div>
    
@endsection