@extends('app.main')
@section('body')
    <div class="w-[100%] mx-auto min-h-screen bg-slate-800 px-2 lg:px-8 py-4" id="sidebar">
        <div class="grid grid-cols-3  text-white gap-4">
            <a href="/" class="btn btn-outline btn-info h-4 font-sans text-center  rounded-xl w-full">
                <span class="hidden lg:block"><i class="gg-log-out mr-4"></i></span>
                <h1 class="text-center">Zonefilmku</h1>
            </a>
            <button class=" btn btn-neutral btn-active h-4 font-sans text-center  rounded-xl w-full" id="buttonproduct">
                <h1 class="text-center">Product</h1>
            </button>
            <button class="btn btn-neutral h-4 font-sans text-center rounded-xl w-full" id="buttongenre">
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


        <div id="formproduct">
            @include('components.form_product')
        </div>
        <div id="tableproduct">
            @include('components.table_product')
        </div>
        <div id="formgenre" class="hidden">
            @include('components.form_genre')
        </div>
        <div id="tablegenre" class="hidden">
            @include('components.table_genre')
        </div>

    </div>


    <script>
        const buttonGenre = document.querySelector("#buttongenre")
        const formGenre = document.querySelector("#formgenre")

        const buttonProduct = document.querySelector("#buttonproduct")
        const formProduct = document.querySelector("#formproduct")
        const tableProduct = document.querySelector("#tableproduct")
        const tableGenre = document.querySelector("#tablegenre")

        buttonProduct.addEventListener("click", () => {
            buttonProduct.classList.add("btn-active")
            buttonGenre.classList.remove("btn-active")
            tableGenre.classList.add("hidden")
            formGenre.classList.add("hidden")
            formProduct.classList.remove("hidden")
            tableProduct.classList.remove("hidden")
        })
        buttonGenre.addEventListener("click", () => {
            buttonGenre.classList.add("btn-active")
            buttonProduct.classList.remove("btn-active")
            formProduct.classList.add("hidden")
            tableProduct.classList.add("hidden")
            formGenre.classList.remove("hidden")
            tableGenre.classList.remove("hidden")
        })
    </script>
@endsection
