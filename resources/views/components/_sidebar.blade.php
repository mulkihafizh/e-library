<div class="navigation">
    <span class="absolute lg:hidden text-white text-4xl top-5 left-10 cursor-pointer side-toggler" onclick="openSidebar()"
        class="z-index:-1;">
    </span>
    <div
        class="sidebar  flex flex-col justify-between fixed h-screen top-0 bottom-0 lg:left-0 pt-2 w-[250px] overflow-y-auto text-center bf-red bas bg-indigo-700 bg-primary-color">
        <div class="wrapping ">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5  mt-1 flex items-center ">
                    <a href="" class="flex items-center text-[18px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                        </svg>
                        <h1 class="   ml-3 font-semibold ">Wikbook</h1>
                    </a>
                </div>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md nav-link active relative px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <a href="/dashboard" class="text-[15px] text-gray-300 flex relative active">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>
                    <span class="ml-4 ">Dashboard</span>
                </a>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md nav-link px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <a href="/dashboard/users" class="text-[15px] text-gray-300 flex relative ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <span class="text-[15px] text-gray-300 ml-4 relative   ">Users</span>
                </a>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md nav-link px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <a href="/dashboard/books" class="text-[15px] text-gray-300 flex relative ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <span class="text-[15px] text-gray-300 ml-4 relative   ">Books</span>
                </a>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md nav-link px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <a href="/dashboard/categories" class="text-[15px] text-gray-300 flex relative ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span class="text-[15px] text-gray-300 ml-4 relative   ">Book Categories</span>
                </a>
            </div>
        </div>
        <div
            class="pb-8 mt-3 flex items-center  px-4 duration-300 cursor-pointer justify-self-end hover:bg-blue-600 bg-indigo-700 text-white">
            <a href="/brand" class="text-[15px] text-gray-300 flex relative ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>



                <span class="text-[15px] text-gray-300 ml-4 relative   ">Logout</span>
            </a>
        </div>
    </div>


    <script src="{{ asset('assets/js/main.js') }}"></script>

</div>
