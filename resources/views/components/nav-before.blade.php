<nav
    class="navbar md:flex md:items-center w-full md:justify-around bg-white rounded-bl-2xl rounded-br-2xl shadow-md
            h-24 md:h-auto
            ">
    <div class="flex justify-between items-center md:flex-none">
        <span class="h-24 flex items-center pl-5 md:pl-0">
            <img class="w-32 h-12 object-cover pt-1 cursor-pointer" src="{{ asset('assets/images/goker-cerah.png') }}"
                alt="">
        </span>

        <span class="text-5xl cursor-pointer md:hidden block pr-6">
            <ion-icon name="menu-outline" onclick="DropDown(this)"></ion-icon>
        </span>
    </div>


    <div
        class="nav-right md:flex md:justify-around md:gap-16 md:opacity-100 opacity-0 
            top-[-200px] transition-all ease-in duration-500 bg-white md:static absolute
            w-full md:w-auto z-[-1] md:z-auto pt-7 md:pt-0 rounded-bl-2xl rounded-br-2xl md:rounded-b-0">
        <ul class="md:flex md:items-center md:justify-between md:gap-14">
            <div class="w-full flex justify-center">
                <a href="#" class="nav-list font-britHeavy text-lg">Beranda</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="#" class="nav-list font-britHeavy text-lg">Karir</a>
            </div>
            <div class="w-full flex justify-center">
                <a href="#" class="nav-list font-britHeavy text-lg">Life@Gojek</a>
            </div>

        </ul>

        <div class="button-login flex justify-center gap-3 mt-3 pb-6 md:mt-0 md:pb-0">
            <button
                class="font-britHeavy text-lg pl-5 pr-5 p-1 md:pt-0 md:pb-0 bg-kuningGojek text-white rounded-3xl duration-300 hover:bg-unguGojek">
                <a href="#" class="">Masuk</a>
            </button>
            <button
                class="font-britHeavy text-lg pl-5 pr-5 bg-ijoGojek text-white rounded-3xl duration-300 hover:bg-unguGojek"><a
                    href="">Daftar</a></button>
        </div>
    </div>

</nav>
