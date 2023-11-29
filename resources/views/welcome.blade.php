@extends('app.main')


@section('body')
    @include('layouts.navbar')

    @include('layouts.hero')

    @include('components.ads')
    @include('layouts.about')



    <div class="flex justify-between my-8 mx-14 items-start">
        <div class="w-full h-[40rem]">
            <h1 class="text-xl text-center mb-4 text-white ">Update Terbaru</h1>
            @include('components.card')
        </div>
        <div class="w-1/4 ml-6">
            @include('layouts.top')
        </div>
    </div>

    @include('layouts.about')
    @include('components.ads')

    <hr class="border-t border-primary mx-14 my-8 opacity-50">
    <div class="mx-14">
        <h1 class="text-xl text-white text-center my-4 ">Trending Movies</h1>
        @include('components.card')
    </div>

    <hr class="border-t border-primary mx-14 my-8 opacity-50">
    <div class="my-8 mx-14">
        <h1 class="text-xl text-white text-center my-4 ">Anime</h1>
        @include('components.card')
    </div>

    @include('layouts.footer')
@endsection
