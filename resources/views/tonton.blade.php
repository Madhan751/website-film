@extends('app.main')


@section('body')
    @include('layouts.navbar')

    <div class="mx-auto px-14 pt-[5rem]  ">
        <div class="bg-cover bg-slate-500 bg-opacity-20  md:p-8 sm:p-4  overflow-hidden w-full shadow-md bg-opacity-50">
            <div class="flex justfiy-center">
                {{-- <img src="https://dummyimage.com/100x40&text=+" class="hidden md:block" alt=""> --}}
                <iframe class="mx-auto aspect-video sm:h-[15rem] lg:h-[28rem] shadow-lg  "
                    src="https://www.youtube.com/embed/dTf2ysBk1RI?si=ozJOffxSQ2p-Nzxu" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                {{-- <img src="https://dummyimage.com/100x40&text=+" class="hidden md:block" alt=""> --}}
            </div>



            <div class="flex justify-between">
                <div class="mt-4 text-white">
                    <h1 class="text-2xl text-white font-bold mb-4">{{ $product->title }}</h1>

                    <p class="text-gray-700 mb-4">Deskripsi {{ $product->description }}</p>
                    <p class="text-gray-700 mb-4">Rilis : {{ $product->release }}</p>
                </div>
                <div class="mt-4 ">
                    <button
                        class="btn btn-neutral  font-semibold text-sm text-white mr-2 md:mr-[4rem] lg:mr-[0px] xl:mr-[8rem] px-4 md:py-[3px] lg:py-[6px] rounded-full border-2 border-white">DOWNLOAD</button>
                </div>
            </div>
        </div>
    </div>

    <div class="my-8 mx-14">
        <h1 class="text-xl text-white text-center ">Trending Movies</h1>
        <div class="flex justify-start  ">
            @include('components.card')
        </div>
    </div>


    @include('layouts.footer')
@endsection
