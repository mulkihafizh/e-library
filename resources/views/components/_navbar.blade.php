<nav id="navbar"
    class="fixed font-poppins bg-indigo-900 w-full  z-50 grid grid-cols-3 items-center  text-white container py-4 ">
    <div class="nav-brand font-semibold text-lg flex items-center gap-3"><i class="fa-solid fa-book text-neutral-200"></i>
        <h1> WikBook</h1>
    </div>
    <div class="searchbar flex justify-center">
        <form action="" class="flex items-end gap-2">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" name="search" id="search" placeholder="Search"
                class="bg-transparent border-b-2 border-gray-200 focus:outline-none focus:border-indigo-500">
        </form>
    </div>
    <div class="navlinks flex justify-end">
        <ul class="flex gap-4">
            <li>Categories</li>
            <li>|</li>
            <li class="text-gray-200">Hi, {{ Auth::user()->name }}</li>
            </li>
        </ul>
    </div>
</nav>
