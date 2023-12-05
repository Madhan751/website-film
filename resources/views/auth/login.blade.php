@extends('app.main')

@section('body')
    <div class="w-full h-screen bg-gray-800 pt-40">
        <form action="/login" method="post"
            class="flex-col bg-white gap-2 card w-96 shadow-xl mx-auto h-[50%] justify-center items-center border-t-4 rounded-none border-slate-700">
            @csrf
            <h1 class="text-slate-600 font-sans uppercase text-xl font-bold">Login dulu gak sih</h1>
            <input type="email" placeholder="Username" name="email" class="input input-bordered w-full max-w-xs" required
                autofocus value="{{ old('email') }}" />
            <input type="password" placeholder="Password" name="password" class="input input-bordered w-full max-w-xs"
                required />
            <button class="btn bg-slate-700 hover:bg-slate-700 w-full max-w-xs  text-white font-sans font-semibold"
                type="submit">Masuk<span><i class="gg-log-in ml-2"></i></span></button>
        </form>
    </div>
@endsection
