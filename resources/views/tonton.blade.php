@extends('app.main')


@section('body')
    @include('layouts.navbar')
    <div class="mx-auto px-14">
        <div class="pt-[4rem] ">
            @include('components.ads')
        </div>
        <div class=" bg-transparent md:bg-gray-700/50 mt-4 md:p-8 sm:p-4  overflow-hidden w-full shadow-md bg-opacity-50">
            <div class="flex">
                <iframe class="aspect-video h-[15rem] lg:h-[28rem] shadow-lg  " src="{{ $product->link }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
                <div class="font-sans text-justify text-white/80 p-4 hidden lg:block">
                    {{-- ads --}}
                </div>
            </div>
            <div class="flex justify-start gap-2 font-sans text-sm items-center mt-2 ">
                <button class="btn btn-neutral btn-sm">Server 1</button>
                <button class="btn btn-neutral btn-sm">Server 2</button>
                <button class="btn btn-info btn-sm " onclick="window.location.reload()">Refresh</button>
            </div>
        </div>

        @include('components.ads')


        <div class="bg-primary/50 mt-4 rounded-lg flex justify-between py-8 px-8">
            <div class="font-sans text-justify text-white/80">
                <h1 class="text-2xl text-white uppercase font-bold">{{ $product->title }}</h1>
                <div>
                    <span class="badge badge-primary mt-4 mb-2">{{ $product->country }}</span>
                    @foreach ($product->genres as $item)
                        <span class="badge badge-primary">{{ $item->name }}</span>
                    @endforeach
                </div>
                <p class="">Sinopsis : {{ $product->description }}</p>
                <span class="">Rilis : {{ $product->release }}</span>

                <button
                    class="btn btn-default rounded-full block mt-4 font-sans font-bold mr-2 md:mr-[4rem] lg:mr-[0px] xl:mr-[8rem] px-4 ">DOWNLOAD</button>
            </div>
        </div>

        @include('components.ads')

        <div class="my-8">
            <h1 class="text-xl text-white text-center ">Trending Movies</h1>
            <div class="flex justify-start  ">
                @include('components.card')
            </div>
        </div>
    </div>


    @include('layouts.footer')
@endsection
