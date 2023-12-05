@extends('app.main')

@section('body')
    <div class="w-full bg-black px-4 lg:px-14 overflow-hidden">
        @include('layouts.navbar')
        @include('layouts.hero')

        @include('components.ads')
        @include('components.about')

        @isset($products_filtered)
            @include('layouts.filter')
        @endisset

        <div class="flex lg:justify-between my-4  items-start">
            <div class="w-full ">
                <h1 class="text-xl text-center mb-8 text-white ">Update Terbaru</h1>
                @include('layouts.update')
            </div>
            {{-- <div class="w-1/4 ml-6 hidden lg:block"> @include('layouts.top') </div> --}}
        </div>

        @include('components.about')
        @include('components.ads')

        <hr class="border-t border-primary  my-4 opacity-50">
        <div class="my-8">
            <h1 class="text-xl text-center text-white mb-4 ">Anime</h1>
            @include('layouts.anime')
        </div>
    </div>

    @include('layouts.footer')
@endsection
