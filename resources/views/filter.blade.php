@extends('app.main')
@section('body')
    @include('layouts.navbar')
    <div class="mx-auto px-14 py-[5rem]  h-full ">
        <h1 class="text-2xl text-white pb-8 text-center ">- Pilih {{ $judul }} -</h1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 justify-center">
            @foreach ($filters as $filter)
                <a href="/{{ $filter }}" class="group">
                    <button class="card bg-transparent image-full group-hover:scale-95  ">
                        <figure class="rounded-sm"><img src="storage/media/home.jpg" alt="Shoes" /></figure>
                        <div class="card-body flex my-auto  rounded">
                            <h2
                                class="card-title text-2xl text-shadow font-sans bg-gradient-to-r from-primary/70 to-transparent rounded">
                                {{ $filter }}</h2>
                        </div>
                    </button>

                </a>
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
@endsection
