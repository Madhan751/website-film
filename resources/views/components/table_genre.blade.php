<div class="w-full bg-primary-content border border-slate-500 mt-4 p-4 shadow-md shadow-slate-900/50 rounded-lg">
    <div class="overflow-x-auto lg:mx-4 py-4">
        <h1 class=" text-2xl text-center font-sans font-bold text-slate-800">Daftar Genre</h1>
        <hr class="border-1 border-slate-800/50 my-4">
        {{-- <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($genres as $genre)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $genre->name }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table> --}}

        <div class="grid grid-cols-4 lg:grid-cols-8 gap-2 lg:gap-6 place-items-center">
            @foreach ($genres as $genre)
                <a class="inline-flex items-center">
                    <p>{{ $genre->name }}</p>
                    <form action="/genre/{{ $genre->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit"
                            class="btn btn-xs border-0 bg-red-600 hover:bg-red-800 ml-1 normal-case text-white text-[8px]">Hapus</button>
                    </form>
                </a>
            @endforeach
        </div>
    </div>
</div>
