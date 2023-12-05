<div
    class="z-30 flex fixed top-0 left-0 right-0 justify-between lg:justify-center items-center lg:px-12 navbar font-light bg-black backdrop-blur-[2px] bg-opacity-70 text-primary border-0 border-dark">
    <div class="navbar-start">
        <button
            class="btn normal-case bg-transparent hover:bg-transparent text-primary border-0 font-sans font-semibold text-xl">
            <a href="/">Zonefilmku.com</a></button>
    </div>

    <div class="navbar-center hidden lg:block font-sans text-white font-bold">
        <a class="btn btn-ghost normal-case text-md">Film Terbaru</a>
        <a class="btn btn-ghost normal-case text-md">Trending Movies</a>

        {{-- Genre --}}
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost normal-case m-1 border-0 text-center bg-transparent ">Genre<i
                    class="gg-chevron-down"></i>
            </label>
            <ul tabindex="0"
                class="mt-4 dropdown-content bg-black/50 backdrop-blur-[2px] rounded-md font-sans text-white border-1 border-red-200  z-[1] menu p-2 w-52">
                @foreach ($genres as $genre)
                    <li class=""><a class="hover:text-primary"
                            href="/?search={{ $genre->name }}">{{ $genre->name }}</a></li>
                @endforeach
            </ul>
        </div>

        {{-- Negara --}}
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost normal-case m-1 border-0 text-center bg-transparent">Negara<i
                    class="gg-chevron-down"></i>
            </label>
            <ul tabindex="0"
                class="mt-4 dropdown-content bg-black/50 backdrop-blur-[2px] rounded-md font-sans text-white  border-1 border-red-200  z-[1] menu p-2 w-52">
                @foreach ($countries as $country)
                    <li class=""><a class="hover:text-primary"
                            href="/?search={{ $country }}">{{ $country }}</a></li>
                @endforeach
            </ul>
        </div>
        <a class="btn btn-ghost normal-case text-md">Anime</a>
        <a class="btn btn-ghost normal-case text-md">Kontribusi</a>
    </div>

    <div class="navbar-end hidden lg:flex justify-end">
        <button class="btn btn-ghost btn-circle" onclick="my_modal_1.showModal()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <button class="btn btn-ghost btn-circle">
            <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                {{-- <span class="badge badge-xs badge-primary indicator-item"></span> --}}
            </div>
        </button>
    </div>
    <div class="drawer drawer-end block lg:hidden flex justify-end items-center ">
        <div class="block lg:hidden">
            <form action="/" method="/post" class="">
                <input type="text" name="search" placeholder="Cari Film.."
                    class="input input-bordered border-white/80 text-white input-xs md:input-sm bg-transparent w-full max-w-xs" />
            </form>
        </div>
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->
            <label for="my-drawer-4" class="drawer-button btn btn-ghost">
                <i class="gg-menu block "></i>
            </label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-black text-base-content">
                <!-- Sidebar content here -->
                <li class=""><a
                        class="text-white/80 hover:text-primary/80 font-sans font-bold uppercase tracking-wide">Film
                        Terbaru</a></li>
                <li class=""><a
                        class="text-white/80 hover:text-primary/80 font-sans font-bold uppercase tracking-wide">Trending
                        Movies</a></li>
                <li class="">
                    <div class="dropdown">
                        <label tabindex="0"
                            class="text-white/80 hover:text-primary/80 font-sans font-bold uppercase tracking-wide">Genre<i
                                class="gg-chevron-down"></i>
                        </label>
                        <ul tabindex="0"
                            class="mt-4 dropdown-content bg-black/50 backdrop-blur-[2px] rounded-md font-sans text-white  border-1 border-red-200  z-[1] menu p-2 w-52">
                            @foreach ($genres as $genre)
                                <li class=""><a
                                        class="text-white/80 hover:text-primary/80 font-sans font-bold uppercase tracking-wide"
                                        href="/?search={{ $genre->name }}">{{ $genre->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="">
                    <div class="dropdown">
                        <label tabindex="0"
                            class="text-white/80 hover:text-primary/80 font-sans font-bold uppercase tracking-wide">Negara<i
                                class="gg-chevron-down"></i>
                        </label>
                        <ul tabindex="0"
                            class="mt-4 dropdown-content bg-black/50 backdrop-blur-[2px] rounded-md font-sans text-white  border-1 border-red-200  z-[1] menu p-2 w-52">
                            @foreach ($countries as $country)
                                <li class=""><a
                                        class="text-white/80 hover:text-primary/80 font-sans font-bold uppercase tracking-wide"
                                        href="/?search={{ $country }}">{{ $country }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class=""><a
                        class="text-white/80 hover:text-primary/80 font-sans font-bold uppercase tracking-wide">Support
                        Kami</a>
                </li>

            </ul>
        </div>
    </div>
</div>
