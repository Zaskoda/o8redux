


<div class="">
        <div class="text-center text-gray-400">
        @foreach ([
            ['url' => 'https://discord.gg/DQaQWxE',
            'image' => '/img/discord.png',
            'desc' => 'Join Us On Discord'
            ],
            ['url' => 'https://twitter.com/orbiter8game',
            'image' => '/img/twitter.png',
            'desc' => 'Follow Us On Twitter'
            ],
            ['url' => 'https://www.youtube.com/channel/UCLKh1bhgRdAkvngsulH6Zpg',
            'image' => 'img/youtube.png',
            'desc' => 'Subscribe On Youtube'
            ],
            ['url' => 'https://reddit.com/r/orbiter8',
            'image' => 'img/reddit.png',
            'desc' => 'Upvote Us On Reddit'
            ],
            ['url' => 'https://docs.google.com/forms/d/e/1FAIpQLSc0NaGN25BGpyy_TyY3RyGMtY-FGRz5Im2VbYMkhTBHn3vnuw/viewform?usp=pp_url&entry.1108695699=WEB',
            'image' => 'img/bug-icon.png',
            'desc' => 'Join our testing team.'
            ],
        ] as $icon)

            <a href="{{ $icon['url'] }}" class="inline-block w-[200px] py-4 m-2 rounded-2xl bg-white border-2 border-gray-400 text-o8-purple-500 hover:border-o8-purple-500">
                <img src="{{ $icon['image'] }}" class="inline-block h-[64px]"><br>
               {!! $icon['desc'] !!}
            </a>


        @endforeach
    </div>


</div>