@extends('app.main')
@section('body')
    <div class="mx-auto h-full bg-gray-800">
        <div class="w-[100%] flex  h-full" id="sidebar">
            <div></div>
            <div class="flex flex-col bg-gray-800 h-screen  text-white gap-4 min-w-[40%]">
                {{-- <a href="/" class="btn btn-ghost my-8  text-xl font-bold text-white">Zonefilmku</a> --}}
                <button class=" btn btn-neutral h-4 font-sans text-center mx-8 mt-8 rounded-xl" id="buttonproduct">
                    <h1 class="text-center">Product</h1>
                </button>
                <button class="btn btn-neutral h-4 font-sans text-center mx-8 rounded-xl" id="buttongenre">
                    <h1 class="text-center">Genre</h1>
                </button>
                <a href="/" class="btn btn-outline btn-info h-4 font-sans text-center mx-8 rounded-xl">
                    <h1 class="text-center">Kembali ke Halaman Home</h1>
                </a>
            </div>


            {{-- <div class="w-80 h-20  bg-gray-200 mt-20 mx-auto rounded-lg group-hover/is-on:hidden" id="selamatdatang"> --}}
            {{-- <div class="w-full" id="selamatadmin">
                <h1 class="text-2xl text-white text-center mt-40 font-sans text-2xl">Selamat Datang, Admin!</h1>
            </div> --}}
            <div class="w-full bg-gray-200 border border-slate-500 shadow-md shadow-slate-900/50  m-8  rounded-lg"
                id="formproduct">
                <form action="/product" method="post" class="pt-14">
                    @csrf
                    <div class="grid grid-cols-2 mx-auto gap-4 justify-between   w-[40rem] ">
                        <div>
                            <label class="text-slate-700" for="title">Title :</label>
                            <Input type="text" class="input input-bordered h-8 text-slate-900" name="title"
                                id="title" placeholder="Judul Film">
                        </div>
                        <div>
                            <label class="text-slate-700" for="link">Link :</label>
                            <Input type="text" class="input input-bordered h-8" value="https://" name="link"
                                id="link">
                        </div>
                        <div class="col-span-2 ">
                            <p class="text-slate-700" for="description">Description :</p>
                            <textarea type="text" name="description" placeholder="Deskripsi Singkat" class="textarea textarea-bordered w-full"
                                id="description" rows="5"></textarea>
                        </div>
                        <div>
                            <p class="text-slate-700" for="genre">Genre :</p>
                            <select name="genre" class="select select-bordered  select-sm w-[12rem]" id="genre">
                                <option value="" selected> - Pilih - </option>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <p class="text-slate-700" for="negara">Negara :</p>
                            <select name="country" class="select select-bordered  select-sm w-[12rem]" id="country">
                                <option value="" selected> - Pilih - </option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Korea">Korea</option>
                                <option value="China">China</option>
                                <option value="Jepang">Jepang</option>
                                <option value="Barat">Barat</option>
                                <option value="Thailand">Thailand</option>
                            </select>
                        </div>
                        <div>
                            <p class="text-slate-700" for="rilis">Rilis :</p>
                            <input type="date" class="input input-bordered h-8 text-slate-900 w-[12rem]" name="release"
                                id="rilis">
                        </div>
                        <div>
                            <p class="text-slate-700" for="image">Image :</p>
                            <input type="text" class="input input-bordered h-8 text-slate-900" placeholder="contoh.jpg"
                                name="image" id="image">
                        </div>
                        <div class="col-span-2 ">
                            <button type="submit" class="btn btn-neutral btn-active w-20 mx-auto ">Simpan</button>
                        </div>
                    </div>
                </form>


            </div>
            <div class="w-full  bg-gray-200  m-8 hidden border border-slate-500 shadow-md shadow-slate-900/50 rounded-lg group-hover/is-on:hidden"
                id="formgenre">
                <form action="/genre" method="post" class="pt-14">
                    @csrf
                    <div class="flex flex-col mx-auto gap-2 w-[40rem] ">
                        <label class="text-slate-700" for="title">Genre :</label>
                        <Input type="text" class="input input-bordered h-8 text-slate-900" name="name" id="title">
                        {{-- <input type="date" class="input input-bordered h-8 font-sans" name="rilis" id="rilis"> --}}
                        <button type="submit" class="btn btn-neutral btn-active btn-sm w-20 self-end ">Simpan</button>
                    </div>
                </form>
                @include('components.table')

            </div>
        </div>


    </div>

    <script>
        // const sideBar = document.querySelector("#sidebar")

        const buttonGenre = document.querySelector("#buttongenre")
        const formGenre = document.querySelector("#formgenre")

        const buttonProduct = document.querySelector("#buttonproduct")
        // const welcomeAdmin = document.querySelector("#selamatadmin")
        const formProduct = document.querySelector("#formproduct")

        // sideBar.addEventListener("click", () => {
        //     formProduct.classList.add("hidden")
        //     formGenre.classList.add("hidden")
        // })
        buttonProduct.addEventListener("click", () => {
            formProduct.classList.remove("hidden")
            // welcomeAdmin.classList.add("hidden")
            formGenre.classList.add("hidden")
        })
        buttonGenre.addEventListener("click", () => {
            formProduct.classList.add("hidden")
            // welcomeAdmin.classList.add("hidden")
            formGenre.classList.remove("hidden")
        })
    </script>
@endsection
