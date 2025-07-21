@extends('layouts.base')

@section('title', 'Christian David Moreno - Portfolio')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.skills')
    @include('partials.experience')
    @include('partials.projects')
    {{-- @include('partials.contact') --}}
@endsection
