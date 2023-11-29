<div class="flex flex-wrap justify-start gap-6 max-w-full mt-4 font-sans mb-12">

    @foreach ($products as $product)
        <div
            class="flex-col justify-center content-start items-center drop-shadow-lg shadow-white card bg-white hover:scale-105 group overflow-hidden">
            <div class="min-w-[130px] min-h-[180px]  relative bg-cover"
                style="background-image: url('/storage/media/home1.jpg')">
                {{-- url('/storage/media/{{ $product->image }} --}}
                {{-- <img src="https://dummyimage.com/150x200&text=+" alt="Shoes" class="rounded-xl" /> --}}
            </div>
            <div class="w-full h-full bg-slate-200/30 absolute content-center hidden group-hover:block">
            </div>
            <div
                class="flex-row drop-shadow-lg w-full justify-center bg-gradient-to-t from-primary/30 from-30% to-transparent text-center card-actions absolute group-hover:hidden transition bottom-0 pb-2 mt-2">
                <p class="text-sm text-white ">{{ $product->title }}</p>
            </div>
            <div
                class="flex-row gap-2 text-center card-actions absolute hidden group-hover:block transition bottom-1 mt-2">
                <button
                    class="btn btn-primary bg-primary hover:bg-primary border-2 border-primary hover:border-white rounded-full mb-1">
                    <a href="/product/{{ $product->slug }}">Tonton</a></button>
                <button class="btn hover:border-black text-black border-2 rounded-full"> <a
                        href="">Download</a></button>
            </div>
            {{-- <div class="card-body items-center text-center mb-0">
                <h2 class="card-title">Film 1</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
            </div> --}}
        </div>
    @endforeach

</div>
