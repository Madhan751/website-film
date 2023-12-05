<div class="w-full bg-primary-content border border-slate-500 mt-4 p-4 pb-8 shadow-md shadow-slate-900/50 rounded-lg">
    <h1 class=" text-2xl text-center font-sans font-semibold text-slate-800">Tambah Film</h1>
    <hr class="border-1 border-slate-800/50 my-4">
    <form action="/product" method="post" class="" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-2 mx-auto gap-4 p-2 justify-between w-[26rem] lg:w-[40rem] ">
            <div>
                <label class="text-slate-700" for="title">Title :</label>
                <Input type="text"
                    class="input input-bordered @error('title') is-invalid @enderror h-8 text-slate-900 w-[12rem] lg:w-full"
                    name="title" id="title" placeholder="Judul Film">
                @error('title')
                    <div class="invalid-feedback font-sans  text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-slate-700" for="link"><i
                        class="gg-link mr-2 mb-1 scale-[80%] inline-block"></i>Link :</label>
                <Input type="text"
                    class="input input-bordered @error('link') is-invalid @enderror h-8 w-[12rem] lg:w-full "
                    value="https://" name="link" id="link">
                @error('link')
                    <div class="invalid-feedback font-sans  text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-span-2 ">
                <p class="text-slate-700" for="description">Description :</p>
                <textarea type="text" name="description" placeholder="Deskripsi Singkat"
                    class="textarea textarea-bordered  @error('description') is-invalid @enderror w-full" id="description"
                    rows="5" spellcheck="false"></textarea>
                @error('description')
                    <div class="invalid-feedback font-sans  text-red-500">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div>
                <p class="text-slate-700" for="genre">Genre :</p>
                <select name="genre"
                    class="select select-bordered  @error('genre') is-invalid @enderror select-sm w-[12rem] lg:w-full"
                    id="genre">
                    <option value="" selected> - Pilih - </option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
                @error('genre')
                    <div class="invalid-feedback font-sans  text-red-500">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div>
                <p class="text-slate-700" for="negara">Negara :</p>
                <select name="country"
                    class="select select-bordered  @error('country') is-invalid @enderror  select-sm w-[12rem] lg:w-full"
                    id="country">
                    <option value="" selected> - Pilih - </option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Korea">Korea</option>
                    <option value="China">China</option>
                    <option value="Jepang">Jepang</option>
                    <option value="Barat">Barat</option>
                    <option value="Thailand">Thailand</option>
                </select>
                @error('country')
                    <div class="invalid-feedback font-sans  text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <p class="text-slate-700" for="rilis">Rilis :</p>
                <input type="date"
                    class="input input-bordered  @error('release') is-invalid @enderror h-8 text-slate-900 w-[12rem] lg:w-full"
                    name="release" id="release">
                @error('release')
                    <div class="invalid-feedback font-sans  text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <p class="text-slate-700" for="image">Image :</p>
                {{-- <label class="form-control w-full max-w-xs">
                                <div class="label">
                                    <span class="label-text">Pick a file</span>
                                    <span class="label-text-alt">Alt label</span> --}}
                <input type="file"
                    class="file-input file-input-bordered @error('image') is-invalid @enderror w-[12rem] lg:w-full file-input-sm max-w-xs"
                    name="image" id="image" />
                @error('image')
                    <div class="invalid-feedback font-sans  text-red-500">
                        {{ $message }}
                    </div>
                @enderror
                {{-- <div class="label">
                                    <span class="label-text-alt">Alt label</span>
                                    <span class="label-text-alt">Alt label</span> --}}
            </div>
            <div class="col-span-2 ">
                <button type="submit"
                    class="btn btn-neutral bg-gray-800/95 h-4 font-sans text-center rounded-xl w-full">Simpan</button>
                {{-- <button type="submit" class="btn btn-neutral btn-md w-full self-end ">Simpan</button> --}}
            </div>
        </div>
    </form>
</div>
