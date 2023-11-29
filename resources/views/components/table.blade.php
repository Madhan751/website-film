<div class="overflow-x-auto mx-10">
    <table class="table table-zebra">
        <!-- head -->
        <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Link</th>
                <th>Descritionr</th>
                <th>Genre</th>
                <th>Country</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @foreach ($genres as $genre)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $genre->name }}</td>
                    {{-- <td>{{ $product->link }}</td>
                    <td>{{ $product->description }}</td>
                    @foreach ($product->genres as $item)
                        <td>{{ $item->name }}</td>
                    @endforeach
                    <td>{{ $product->country }}</td>
                    <td>{{ $product->image }}</td> --}}
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
