@extends('app.main')
@section('body')
    <div class="mx-auto min-h-screen bg-gray-800">
        <div class="w-[100%] bg-gray-800 px-2 lg:px-8 py-4" id="sidebar">
            <div class="grid grid-cols-3  text-white gap-4">
                <a href="/admin" class="btn btn-outline btn-info h-4 font-sans text-center  rounded-xl w-full">
                    <span class="hidden lg:block"><i class="gg-log-out mr-4"></i></span>
                    <h1 class="text-center">Kembali</h1>
                </a>
                <button class=" btn btn-neutral btn-active h-4 font-sans text-center  rounded-xl w-full" id="buttonproduct">
                    <h1 class="text-center">Product</h1>
                </button>
                <button class="btn btn-disabled h-4 font-sans text-center rounded-xl w-full" id="buttongenre">
                    <h1 class="text-center">Genre</h1>
                </button>
            </div>

            @if (session()->has('success'))
                <div role="alert" class="alert alert-success my-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{-- <span>Berhasil Menambahkan!</span> --}}
                    <span>{{ Session::get('success') }}</span>
                </div>
            @endif


            <div id="">
                @include('components.edit_product')
            </div>


        </div>


    </div>
@endsection
