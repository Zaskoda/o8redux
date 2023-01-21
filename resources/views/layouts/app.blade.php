@extends('layouts.base')

@section('body')
    <nav class="fixed h-[64px] top-0 left-0 right-0 navbar-background">
        <div class="flex w-full max-w-screen-xl mx-auto px-2 lg:px-14 md:px-6 h-[64px]">
            <div class="flex-2 h-[64px]">
                <a href="/#" class="inline-block lg:hidden"><img id="headership" src="/img/header-ship.png"></a>
                <a href="/#" class="hidden lg:inline-block"><img id="headerfull" src="/img/header-orbiter8.png"></a>
            </div>
            <div class="flex-1 inline-block pr-1 text-base text-right md:text-xl lg:text-2xl h-[64px]">
                <a class="inline-block px-2 pt-4 pb-1 md:px-3 lg:px-4 hover:bg-o8-purple-100" href="/">About</a>
                <a class="inline-block px-2 pt-4 pb-1 md:px-3 lg:px-4 hover:bg-o8-purple-100" href="/community">Community</a>
                <a class="inline-block px-2 pt-4 pb-1 md:px-3 lg:px-4 hover:bg-o8-purple-100" href="/story">Story</a>
                <a class="inline-block px-2 pt-4 pb-1 md:px-3 lg:px-4 hover:bg-o8-purple-100" href="/play">Play</a>
                <a class="inline-block px-2 pt-4 pb-1 md:px-3 lg:px-4 hover:bg-o8-purple-100" href="/login">Login</a>
            </div>
        </div>
    </nav>

    <div class="max-w-screen-md lg:max-w-screen-md xl:max-w-screen-lg 2xl:max-w-screen-xl mx-auto mt-[64px]">
        <div class="px-4">

            @yield('content')

            @isset($slot)
                {{ $slot }}
            @endisset

            <div class="bg-o8-purple-300">
                <div class="grid max-w-screen-md gap-5 px-1 py-10 mx-auto md:grid-cols-2 md:px-20 ">
                    <div class="text-center md:text-left">
                    <a href="/" class="inline-block"><img class="footerlogo" src="/img/Orbiter8_logo_boxed.png" alt="Orbiter 8: A Decentralized Space Trading Game." title="Orbiter 8: A Decentralized Space Trading Game." class="inline-block"></a>
                    </div>

                    <div class="py-4 text-center md:text-right">
                        <div>

                            <a href="https://twitter.com/orbiter8game" class="extroicon">
                            <img src="img/twitter.png" class="h-[42px] bg-white rounded-full inline-block m-2">
                            </a>

                            <a href="https://reddit.com/r/orbiter8" class="extroicon">
                            <img src="img/reddit.png" class="h-[42px] bg-white rounded-full inline-block m-2">
                            </a>

                            <a href="https://discord.gg/DQaQWxE" class="">
                            <img src="img/discord.png" class="h-[42px] bg-white rounded-full  inline-block m-2">
                            </a>

                            <a href="https://www.youtube.com/channel/UCLKh1bhgRdAkvngsulH6Zpg" class="extroicon">
                            <img src="img/youtube.png" class="h-[42px] bg-white rounded-full  inline-block m-2">
                            </a>

                        </div>


                        <p class="py-2 underline">
                        <a class="py-2 hover:text-yellow-400" href="/">About Obiter 8 Game</a><br />
                        <a class="py-2 hover:text-yellow-400" href="/story">The Story So Far</a><br />
                        <a class="py-2 hover:text-yellow-400" href="/community">Welcome To Our Community</a><br />
                        <a class="py-2 hover:text-yellow-400" href="/play">Play The Latest Demo</a>
                        </p>

                        <p><small>by <a class="underline hover:text-yellow-400" href="http://partavate.com">Partavate Studios</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
