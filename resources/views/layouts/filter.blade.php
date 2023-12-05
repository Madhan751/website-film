<div class="w-full max-h-[40rem] mt-4 bg-transparent">
    <h1 class="text-xl mb-4 text-white ">Cari : {{ request('search') }}</h1>
    <div class="flex flex-wrap justify-start gap-2 lg:gap-6 max-w-full mt-4 font-sans mb-12">
        @foreach ($products_filtered as $product)
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
                    class="flex-row drop-shadow-lg bg-black/50 w-full justify-center text-center card-actions absolute  bottom-0 pb-2 mt-2">
                    <p class="text-[10px] md:text-[11px] text-gray-200">{{ $product->title }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <hr class="border-t border-primary  my-4 opacity-50">
</div>
{{-- <div class="flex justify-end bg-transparent">{{ $products_filtered->links() }}</div> --}}
