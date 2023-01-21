


<div class=" bg-o8-purple-550">
    <div class="">
        <div class="grid gap-5 p-10 text-gray-400 md:grid-cols-2 xl:grid-cols-3">
        @foreach ([
            ['title' => 'Ethereum',
            'image' => './img/EthereumLogo.svg',
            'desc' => 'Runs on <a class="text-white underline hover:text-yellow-300" href="https://ethereum.org/" target="_blank">Ethereum Virtual Machine</a> compatible networks.'
            ],
            ['title' => 'MetaMask',
            'image' => './img/MetamaskLogo.svg',
            'desc' => 'Works best with the <a class="text-white underline hover:text-yellow-300" href="https://metamask.io/" target="_blank">Metamask</a> wallet plugin.'
            ],
            ['title' => 'OpenSea',
            'image' => './img/OpenseaLogo.svg',
            'desc' => 'Trade planets and ships as NFTs on the <a class="text-white underline hover:text-yellow-300" href="https://opensea.io/" target="_blank">OpenSea</a> marketplace.'
            ],
            ['title' => 'Sushi Swap',
            'image' => './img/SushiswapLogo.svg',
            'desc' => 'Swap game credits on the <a class="text-white underline hover:text-yellow-300" href="https://sushi.com/" target="_blank">Sushi Swap</a> exchange.'
            ],
            ['title' => 'Binance',
            'image' => './img/BinanceLogo.svg',
            'desc' => 'Available on the <a class="text-white underline hover:text-yellow-300" href="https://binance.com/" target="_blank">Binance Smartchain</a> test network.'
            ],
            ['title' => 'Polygon',
            'image' => './img/PolygonLogo.svg',
            'desc' => 'Available on the <a class="text-white underline hover:text-yellow-300" href="https://polygon.technology/" target="_blank">Polygon</a> Mumbai test network.'
            ],
        ] as $partner)
            <div class="p-3">
                <div class="float-left w-[80px] text-center">
                    <img src="{{ $partner['image'] }}" class="inline-block h-[64px]">
                </div>
                <div class="col text-start" style="margin-left: 100px">
                    <h4 class="pb-2 text-2xl">{{ $partner['title'] }}</h4>
                    {!! $partner['desc'] !!}
                </div>
            </div>
        @endforeach
        </div>
    </div>


</div>