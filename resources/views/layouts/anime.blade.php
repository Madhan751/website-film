<div class="flex flex-wrap justify-center md:justify-start gap-3 lg:gap-6 max-w-full mt-4 font-sans mb-12">
    @foreach ($products_anime as $product)
        <div
            class="flex-col justify-center items-center ring-slate-800 ring-1  drop-shadow-lg shadow-white card bg-white scale-100 lg:scale-110 group overflow-hidden">
            @if ($product->image)
                <a href="/product/{{ $product->slug }}">
                    <div class="w-[100px] h-[140px]  relative bg-cover"
                        style="background-image: url('{{ asset('storage/' . $product->image) }}')">
                    </div>
                </a>
            @else
                <a href="/product/{{ $product->slug }}">
                    <div class="w-[100px] h-[140px]  relative bg-cover"
                        style="background-image: url('/storage/media/home1.jpg')">
                    </div>
                </a>
            @endif
            <div
                class="flex-row drop-shadow-lg bg-black/50 w-full justify-center text-center card-actions absolute bottom-0 pb-2 mt-2">
                <p class="text-[10px] md:text-[11px] text-gray-200">{{ $product->title }}</p>
            </div>
            {{-- <div class="w-full h-full bg-slate-200/30 absolute content-center hidden group-hover:block focus:block">
                <div
                    class="flex-row gap-2 text-center card-actions absolute hidden group-hover:block transition bottom-1 mt-2">
                    <button
                        class="btn btn-primary bg-primary hover:bg-primary border-2 border-primary hover:border-white rounded-full mb-1">
                        <a href="/product/{{ $product->slug }}">Tonton</a></button>
                    <button class="btn hover:border-black text-black border-2 rounded-full"> <a
                            href="">Download</a></button>
                </div>
            </div> --}}
            {{-- <div class="card-body items-center text-center mb-0">
                <h2 class="card-title">Film 1</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
            </div> --}}
        </div>
    @endforeach
</div>
{{-- <div class="flex justify-end bg-transparent">{{ $products_anime->links() }}</div> --}}
