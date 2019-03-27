@extends('layouts.master')

@section('title')
{{$product->name}}
@endsection

@section('banner')
<div class="productbanner h-50">
  <div class="full-bg-img flex-center">
    <div class="container text-center white-text">
      <div class="white-text text-center wow fadeInUp">
        <h1 class="display-3">{{$product->name}}</h1>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid w-75 py-4 my-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">Model</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <img class="img-fluid" src="https://placehold.it/1000" alt="">
    </div>
    <div class="col-md-4">
    <div class="inline-flex-center flex-center">
      <div class="text-left">
      <h4 class="mt-4">Camera</h4>
      <select class="browser-default custom-select">
        <option value="" disabled selected>Default</option>
        <option value="1">Front</option>
        <option value="2">Back</option>
        <option value="3">Left</option>
        <option value="4">Right</option>
        <option value="5">Top</option>
        <option value="6">Bottom</option>
      </select>
      <h4 class="mt-4">Animation</h4>
      <select class="browser-default custom-select">
        <option value="" disabled selected>no animation</option>
        <option value="1">Rotation X</option>
        <option value="2">Rotation Y</option>
        <option value="3">Rotation Z</option>
      </select>
      <h4 class="mt-4">Render</h4>
      <select class="browser-default custom-select">
        <option value="" disabled selected>Default</option>
        <option value="1">Poly</option>
        <option value="2">Wire</option>
        <option value="3">Headlight</option>
      </select>
      <h4 class="mt-4">Light</h4>
      <select class="browser-default custom-select">
        <option value="" disabled selected>Default</option>
        <option value="1">Omni</option>
        <option value="2">Target</option>
        <option value="3">Headlight</option>
      </select>
      </div>
    </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">Gallery</h2>

    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">History</h2>
      <h4>Lorem</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>

@endsection
