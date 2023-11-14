@extends('app.main')


@section('body')
    @include('layouts.navbar')

    @include('layouts.about')
    @include('components.ads')

    <div class="flex justify-center my-8">
        <h1 class="text-2xl font-bold">Update Terbaru</h1>
    </div>
    @include('components.card')

    @include('layouts.about')
    @include('components.ads')


    <div class="flex justify-center my-8">
        <h1 class="text-2xl font-bold">REKOMENDASI</h1>
    </div>
    @include('components.card')

    @include('layouts.footer')
@endsection
