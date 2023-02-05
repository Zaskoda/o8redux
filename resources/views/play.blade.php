@extends('layouts.app')

@section('content')
    <div class="bg-gray-500">
        <div  class="px-8 py-8 text-3xl font-bold text-center text-white xl:px-14">
          <h2 class="bg-center w-full py-[130px] bg-o8-purple-500  rounded-xl bg-cover" style="background-image: url('/img/header-distant-planets.png')">Orbiter 8 Alpha Demo 3 Now Online!</h2>
        </div>
    </div>

    @include('content.explore-trade-build')

    <div class="py-6 text-center bg-gray-500">
        <a class="inline-block px-10 py-2 lg:px-28 bg-o8-purple-450 rounded-xl border-[1px] border-black hover:text-yellow-400 hover:border-yellow-400" href="https://orbiter8.com/demo3"> &#128377; Play Demo 3 Now <img id="headership" src="/img/header-ship.png" class="inline-block rotate-90" > </a><br />
    </div>



    <div class="grid gap-10 p-4 text-center bg-white lg:p-14 lg:grid-cols-2 text-o8-purple-400">
        <div class="">
            <a href="https://www.youtube.com/watch?v=Cno77-YOcUM?autoplay=1" class="inline-block hover:text-yellow-500" data-toggle="lightbox">
                <img src="/img/trailer-video.png" border="0" alt="Watch On Youtube" class="inline-block border-2 border-black rounded-lg"><br />
                <b class="p-2 text-dark">Watch Promo Trailer</b>
            </a>
        </div>
        <div class="">
            <a href="https://www.youtube.com/watch?v=cL30sFMYi6A?autoplay=1" class=" hover:text-yellow-500" data-toggle="lightbox">
                <img src="/img/tutorial-video.png" border="0" alt="Watch On Youtube" class="inline-block border-2 border-black rounded-lg"><br />
                <b class="p-2 text-dark">Watch Our Tutorial</b>
            </a>
        </div>
    </div>
    <div class="bg-white text-o8-purple-500">

        <div class="max-w-screen-lg mx-auto">
            <h2 class="px-2 py-4 text-3xl text-center text-black">Demo 3 has tons of new features!</h2>
            <p class="max-w-screen-md px-2 py-4 mx-auto">Building on the dynamically generating star systems introduced in Demo 1 and the claimable celestrial bodies of Demo 2, we're
                excited to announce new features in Demo 3:
            </p>

            <div class="grid gap-4 p-10 md:grid-cols-2 ">
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-move-goods.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Trading System:</b> Move goods between space ports and earn credits.</div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-send-broadcast.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Galactic Chat:</b> Broadcast in-game messages to the entire galaxy.</div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-build-station.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Planet Upgrades:</b> Build your own space station and earn passive credits on every trade.</div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-upgrade-ship.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Ship Upgrades:</b> Modify your ship for greater cargo capacity.</div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-sushi-swap.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>ERC 20 Support:</b> Exchange your game credits on open exchanges like <a class="text-dark" href="https://sushi.com" target="_blank">SushiSwap</a>.</div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-open-sea.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>ERC 721 Support:</b> Trade your planets on open NFT markets like <a class="text-dark" href="https://opensea.io" target="_blank">OpenSea</a>.</div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-new-ui.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Snazzy Interface:</b> Enjoy a refreshed UI with new menus, settings, and quick links galore.</div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-go-mobile.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Responsive Design:</b> Play on the go in portrait mode for mobile devices. </div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-new-music.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Great Tunes:</b> Enjoy new music and sound effects from <a class="text-dark" href="StockMusic.net" target="_blank">StockMusic.net</a></div>
                </div>
                <div class="h-[340px]">
                    <div class="text-center "><img class="inline-block border-[1px] border-black rounded-xl" src="/img/feature-play-anywhere.png" /></div>
                    <div class="py-2 px2 md:px-10"><b>Network Mobility:</b> Play on any EVM networks: Ropsten, Rinkeby, Polygon, or Binance </div>
                </div>

            </div>
        </div>
    </div>

        @include('content.partners')
@endsection
