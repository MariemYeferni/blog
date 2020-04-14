@extends('layouts.master')

@section('content')
@foreach ($products as $Product)
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Catégorie</strong>
          <h5 class="mb-0">{{$Product->title}}</h5>
          <p class="mb-auto">{{$Product->subtitle}}</p>
          <strong class="mb-auto">{{$Product->getprice()}}</strong>

          <a href="{{route('products.show',$Product->slug)}}" class="stretched-link btn btn-info">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{$Product->image}}" alt="">
        </div>
      </div>
    </div>
        
    @endforeach
    
@endsection