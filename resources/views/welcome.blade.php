@extends('app.main')


@section('body')
    @include('layouts.navbar')

    @include('components.ads')

    @include('layouts.about')

    @include('components.card')
@endsection
