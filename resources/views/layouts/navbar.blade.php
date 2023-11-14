<div class="flex justify-center px-14 navbar bg-slate-900 text-white border-b-2 border-dark">
    <div class="navbar-start">
        <a class="normal-case font-sans font-semibold text-xl">Zonefilmku.com</p>
    </div>

    <div class="navbar-center">
        <a class="btn btn-ghost normal-case text-md">Film Terbaru</a>
        <a class="btn btn-ghost normal-case text-md">Rekomendasi</a>

        <div class="dropdown">

            <label tabindex="0" class="btn normal-case m-1 border-0 text-white bg-transparent">Genre<i
                    class="gg-chevron-down"></i>
            </label>
            <ul tabindex="0" class="dropdown-content rounded-md bg-white border-1 z-[1] menu p-2 w-52">
                <li><a>Action</a></li>
                <hr class="border-1">
                <li><a>Adventure</a></li>
            </ul>
        </div>

        <a class="btn btn-ghost normal-case text-md">Negara<i class="gg-chevron-down"></i></a>
        <a class="btn btn-ghost normal-case text-md">Anime</a>
        <a class="btn btn-ghost normal-case text-md">Support Kami</a>
    </div>

    <div class="navbar-end">
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
                <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
        </button>
        <dialog id="my_modal_1" class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Hello!</h3>
                <p class="py-4">Press ESC key or click the button below to close</p>
                <div class="modal-action">
                    <form method="dialog">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn">Close</button>
                    </form>
                </div>
            </div>
        </dialog>
    </div>
</div>
