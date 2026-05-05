{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Dapoer Pipin')

@section('content')
  @include('partials.hero')
  @include('partials.about')
  @include('partials.menu')
  @include('partials.contact')
@endsection
