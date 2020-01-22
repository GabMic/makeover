@extends('layouts.app')
@section('content')
       <div class="columns is-centered" style="margin-top: 2rem">
           @foreach($categories as $category)
              @include('partials.select')
           @endforeach
       </div>
@endsection
