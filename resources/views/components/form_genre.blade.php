<div class="w-full bg-primary-content border border-slate-500 mt-4 p-4 shadow-md shadow-slate-900/50 rounded-lg">
    <h1 class=" text-2xl text-center font-sans font-bold text-slate-800">Tambah Genre</h1>
    <hr class="border-1 border-slate-800/50 my-4">
    <form action="/genre" method="post" class="">
        @csrf
        <div class="flex flex-col mx-auto gap-2 max-w-[40rem] ">
            <label class="text-slate-700" for="title">Genre :</label>
            <Input type="text" class="input input-bordered @error('name') is-invalid @enderror h-8 text-slate-900"
                name="name" id="title">
            @error('name')
                <div class="invalid-feedback font-sans text-red-500">
                    {{ $message }}
                </div>
            @enderror
            {{-- <input type="date" class="input input-bordered h-8 font-sans" name="rilis" id="rilis"> --}}
            <button type="submit" class="btn btn-neutral btn-active btn-sm w-20 self-end ">Simpan</button>
        </div>
    </form>
</div>
