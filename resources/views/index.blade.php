@extends('layouts.master')

@section('title')
Home
@endsection

@section('extra-css')
<link rel="stylesheet" href="{{asset('css/timeline.css')}}">
@endsection

@section('banner')
<div class="productbanner h-75">
  <div class="full-bg-img flex-center">
    <div class="container text-center white-text">
      <div class="white-text text-center wow fadeInUp">
        <h1 class="display-3">Nintendo Gameboy History</h1>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
    <ul class="timeline">
      @foreach($products as $product)
        <li class={{$product->id%2 ? "timeline-left" : "timeline-right" }}>
          <div class="timeline-node danger-color"><small>
            {{$product->presentYear()}}
          </small></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">{{$product->name}}</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{$product->details}}</small></p>
            </div>
            <div class="timeline-body">
              <p>{{$product->description}}</p>
              <hr>
              <div class="text-right">
                <button class="btn btn-outline-grey" type="button">read more...</button>
              </div>
            </div>
          </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection
