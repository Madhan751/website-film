<div class="w-full bg-primary-content border border-slate-500 mt-4 p-4 shadow-md shadow-slate-900/50 rounded-lg">
    <div class="overflow-x-auto lg:mx-4 py-4">
        <h1 class=" text-2xl text-center font-sans font-bold text-slate-800">Daftar Film</h1>
        <hr class="border-1 w-full border-slate-800/50 my-4">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Description</th>
                    <th>Genre</th>
                    <th>Country</th>
                    <th>Image</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ Str::limit($product->title, 35) }}</td>
                        <td>{{ Str::limit($product->link, 20) }}</td>
                        <td>{{ Str::limit($product->description, 20) }}</td>
                        @forelse ($product->genres as $item)
                            <td>{{ $item->name }}</td>
                        @empty
                            <td>-</td>
                        @endforelse
                        <td>{{ $product->country }}</td>
                        <td>{{ Str::limit($product->image, 20) }}</td>
                        <td class="min-w-[8rem] px-0">
                            <a class="btn bg-amber-500 hover:bg-amber-700 border-0 text-black btn-xs mx-0 font-sans"
                                href="/product/{{ $product->slug }}/edit">Edit</a>
                            <form action="/product/{{ $product->slug }}" method="post" class="inline">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="btn bg-red-600 hover:bg-red-800  border-0 text-white btn-xs font-sans mx-0">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $products->links() }}
    </div>
</div>
