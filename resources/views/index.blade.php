@extends('layout.main')

@section('content')
    <div id="landing">
        <nav id="navbar" class="fixed w-full  z-50 flex justify-between items-center  text-white container py-8 ">
            <div class="nav-brand font-semibold text-lg flex items-center gap-3"><i
                    class="fa-solid fa-book text-neutral-200"></i>
                <h1> WikBook</h1>
            </div>
            <div class="navlinks">
                <ul class="flex gap-4">
                    <li> <a href="/home">Home</a></li>
                    <li><a href="/login"
                            class="font-semibold login-nav text-xs border-purple-500 hover:bg-purple-500 duration-200 border px-3 rounded-full py-2">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header class="bg-indigo-700 h-screen grid grid-cols-2 container pt-5">
            <div class="left flex flex-col font-poppins justify-center">
                <h1 class="title text-4xl sm:text-lg pt-5 text-white font-bold">
                    Better Solutions For Your Choice Book
                </h1>
                <p class="text-lg sm:text-sm text-neutral-300">With Online Reading Makes it Easy!</p>
                <button class="py-5">
                    <a href="/register"
                        class="bg-purple-500 text-xs float-left duration-200 hover:duration-200 px-5 hover:bg-transparent hover:outline hover:outline-purple-400 py-2 rounded-full text-white">Register</a>
                </button>
            </div>
            <div class="right relative flex items-center">
                <svg class="absolute z-0 -right-16 sm:right-0" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 500 500" width="100%" id="blobSvg" style="opacity: 1;">
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color: rgb(217, 186, 238);"></stop>
                            <stop offset="100%" style="stop-color: rgb(87, 76, 230);"></stop>
                        </linearGradient>
                    </defs>
                    <path id="blob" fill="url(#gradient)" style="opacity: 1;">
                        <animate attributeName="d" dur="10s" repeatCount="indefinite"
                            values="M419.06254,317.79517Q411.11118,385.59033,349.66843,425.59894Q288.22568,465.60755,228.34547,428.45831Q168.46526,391.30906,120.24124,353.19622Q72.01722,315.08338,69.86103,249.40801Q67.70483,183.73263,103.47221,120.73263Q139.23958,57.73263,215.36631,36.75347Q291.49305,15.77432,346.41495,69.35242Q401.33686,122.93051,414.17538,186.46526Q427.0139,250,419.06254,317.79517Z;M433.0232,309.9192Q393.01281,369.83841,338.3352,406.40881Q283.6576,442.97921,221.7752,424.49281Q159.8928,406.0064,119.2384,358.9864Q78.584,311.9664,70.5304,246.7752Q62.4768,181.584,97.7552,114.4464Q133.0336,47.3088,206.208,64.61119Q279.3824,81.91359,342.208,100.8192Q405.0336,119.7248,439.0336,184.8624Q473.0336,250,433.0232,309.9192Z;M402.96858,305.89372Q383.43068,361.78743,330.92976,387.4658Q278.42884,413.14418,202.60721,438.39372Q126.78558,463.64325,93.53789,391.42791Q60.29021,319.21257,78.64603,256.64233Q97.00185,194.07209,128.64418,144.10813Q160.28651,94.14418,219.21534,92.06839Q278.14418,89.9926,343.5342,103.10536Q408.92421,116.21812,415.71534,183.10906Q422.50647,250,402.96858,305.89372Z;M425.57934,323.79599Q426.22734,397.59197,355.10104,419.41516Q283.97474,441.23834,222.29242,423.00907Q160.6101,404.77979,95.49644,367.33031Q30.38277,329.88083,44.58128,255.13536Q58.77979,180.3899,99.7419,120.41159Q140.70401,60.43329,214.57221,45.49287Q288.44042,30.55246,350.61367,72.29792Q412.78692,114.04339,418.85914,182.0217Q424.93135,250,425.57934,323.79599Z;M428.39652,310.63781Q395.12039,371.27562,337.58607,396.3189Q280.05174,421.36219,204.00896,441.94775Q127.96619,462.5333,107.32787,385.81839Q86.68955,309.10348,96.33581,253.18955Q105.98207,197.27562,134.68904,148.26665Q163.396,99.25769,224.43929,74.05174Q285.48258,48.8458,334.83632,93.40548Q384.19006,137.96516,422.93135,193.98258Q461.67264,250,428.39652,310.63781Z;M404.21696,312.89783Q400.5999,375.79567,344.18719,420.60848Q287.77447,465.42129,222.25959,438.51488Q156.7447,411.60848,114.36806,363.06382Q71.99143,314.51917,65.98083,247.80853Q59.97023,181.09788,105.72982,130.10217Q151.4894,79.10645,216.18088,77.25959Q280.87235,75.41272,335.88295,103.82341Q390.89355,132.2341,399.36378,191.11705Q407.83401,250,404.21696,312.89783Z;M419.06254,317.79517Q411.11118,385.59033,349.66843,425.59894Q288.22568,465.60755,228.34547,428.45831Q168.46526,391.30906,120.24124,353.19622Q72.01722,315.08338,69.86103,249.40801Q67.70483,183.73263,103.47221,120.73263Q139.23958,57.73263,215.36631,36.75347Q291.49305,15.77432,346.41495,69.35242Q401.33686,122.93051,414.17538,186.46526Q427.0139,250,419.06254,317.79517Z">
                        </animate>
                    </path>
                </svg>
                <img src="{{ asset('assets/images/reading.png') }}" class="z-10 absolute" alt="">
            </div>
        </header>
        <section id="top" class=" relative py-12 font-poppins">
            <div class="custom-shape-divider-top bg-neutral-100 absolute top-0 w-full ">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="fill-indigo-700"></path>
                </svg>
            </div>
            <div class="container relative z-10">
                <h1 class=" text-3xl sm:text-lg text-white">Top <span class="font-bold">Three</span> Books This Week</h1>
                <div class="grid-cols-3 grid gap-8 py-8 sm:grid-cols-1">
                    <div class="top-1  flex flex-col items-center text-left gap-2" data-aos="fade-up"
                        data-aos-duration="1000"data-aos-once="true" data-aos-delay="100">
                        <i class="fa-solid fa-crown text-yellow-500"></i>
                        <img src="{{ asset('assets/images/cover/komi-23.webp') }}" class="w-4/5 shadow-lg" alt="">
                        <h1 class="text-xl text-center">Komi Can't Communicate Vol. 23</h1>
                        <p class="text-sm text-gray-600 text-center">Valentine’s Day has arrived, and everywhere throughout
                            the school chocolates are given and
                            feelings are overflowing. Even for Komi, Hitohito, and Rumiko, the day is bound to be
                            unforgettable. Will Komi be able to take a step forward and communicate her feelings?</p>
                    </div>
                    <div class="top-2 flex flex-col items-center gap-2 sm:pt-0 pt-20" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                        <i class="fa-solid fa-crown text-gray-300"></i>
                        <img src="{{ asset('assets/images/cover/komi-24.webp') }}" class="w-4/5 shadow-lg" alt="">
                        <h1 class="text-xl text-center">Komi Can't Communicate Vol. 24</h1>
                        <p class="text-sm text-gray-600 text-center">Komi and Tadano have finally started dating, but the
                            two are more awkward around each other than
                            ever. It’s the first time either one of them has been in an actual relationship, and Komi wants
                            to convey her overflowing feelings to Tadano, but she’s having trouble even holding his hand!
                        </p>

                    </div>
                    <div class="top-3 flex flex-col items-center gap-2 sm:pt-0 pt-40" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-once="true" data-aos-delay="900">
                        <i class="fa-solid fa-crown text-amber-600 "></i>
                        <img src="{{ asset('assets/images/cover/komi-1.webp') }}" class="w-4/5 shadow-lg" alt="">
                        <h1 class="text-xl text-center">Komi Can't Communicate Vol. 1</h1>
                        <p class="text-sm text-gray-600 text-center">
                            Socially anxious high school student Shoko Komi’s greatest dream is to make some friends, but
                            everyone at school mistakes her crippling social anxiety for cool reserve! With the whole
                            student body keeping their distance and Komi unable to utter a single word, friendship might be
                            forever beyond her reach.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        @include('components._footer')
    </div>
@endsection
