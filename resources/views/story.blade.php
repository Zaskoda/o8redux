@extends('layouts.app')

@section('content')
    <div class="bg-gray-500">
        <div  class="px-8 py-8 text-3xl font-bold text-center text-white xl:px-14">
          <h2 class="bg-center w-full py-[130px] bg-o8-purple-500  rounded-3xl bg-cover" style="background-image: url('/img/header-passing-station.png')">The Orbiter 8 Story</h2>
        </div>
    </div>

    @include('content.trailer')

    @include('content.explore-trade-build')

    <div class="py-8 bg-white text-o8-purple-500">
        <div class="max-w-screen-lg px-10 mx-auto md:px-24">

            <a href="/img/orbiter-8-sun-orbit-screenshot.png" class="block md:float-right mx-auto md:w-[270px] md:mx-6 my-4" title="Orbiting a new star."><img src="/img/orbiter-8-sun-orbit-screenshot.png" class="rounded-xl border-[1px] border-black" alt="space"></a>

            <h2 class="pt-4 pb-6 text-3xl">Backstory</h2>

            <p class="py-2 pl-2 pr-4">
            It is the year 2140, just a little more than a century after humans
            began off-world colonization, and civilization has spread to encompass
            the whole of the solar system. Expansion began with a brutal space race,
            and the first colony on Mars had it rough. They lacked the technology,
            resources, and experience to adapt to the rapid and destructive changes
            in gravity and radiation that caused their bones to crumble and their
            muscles to weaken. But while the first generation suffered, the second
            and third adapted faster than even the most optimistic 21st century elder
            could have ever predicted.
            </p>

            <a href="/img/planets-menu.png" class="block md:float-right mx-auto md:w-[270px] md:mx-6 my-4" title="Planets Menu."><img src="/img/planets-menu.png" class="rounded-xl border-[1px] border-black" alt="Planets Menu"></a>

            <p class="py-2 pl-2 pr-4">
            As soon as we found ways to exploit the natural resources available in
            space, we expanded our colonies to Earth’s own moon and the moons of Jupiter,
            then Venus and the larger asteroids. As genetic engineering advanced to the
            stage where we could take control of our evolution and proactively create
            bodies that were better adapted to the harsh environment of space and the
            physical challenges of interplanetary travel, humanity was not just surviving
            in space; we were thriving.
            </p>


            <p class="py-2 pl-2 pr-4">
            As the initial surge of colonization faded into decades of vicious trade wars,
            progress slowed, then stalled. This time became known as The Great Regrettion,
            tied to the lingering feeling of regret that we couldn’t quite articulate.
            Human expansion wouldn’t burst again until the next great “land rush” in the
            early 2090’s when a new line of gravity assist ships, known as "Orbiters",
            opened new trade routes to the outer worlds. Thanks to the Orbiter ships, the
            human frontier pushed further outward, all the way to the edge of the solar
            system. But that was as far as we could go.
            </p>

            <a href="/img/orbiter-8-jump-ui-screenshot.png" class="block md:float-right mx-auto md:w-[270px] md:mx-6 my-4" title="Orbital Jump Menu"><img src="/img/orbiter-8-jump-ui-screenshot.png" class="rounded-xl border-[1px] border-black" alt="space"></a>

            <p class="py-2 pl-2 pr-4">
            Yet again, it seemed that another plateau was reached. We worried that a second
            Regrettion was imminent and that maybe we were just too fragile to expand past
            the barrier of our sun, which, after all, provides all the energy that sustains
            every form of life we know. Leaving our planet was the tiniest of steps compared
            with leaving our sun. Once again it seemed that there were no new worlds to
            explore and no new empires to build. That is no longer true today.
            </p>

            <p class="py-2 pl-2 pr-4">
            In just the last few decades, we’ve seen rapid improvements in Obiter technology,
            drastically reducing travel times between planets. This technology recently
            crossed a whole new threshold with the successful interstellar test of the Orbiter
            8 spacecraft. We are no longer confined to our solar system, the whole of the galaxy
            now awaits our arrival. The first line of interstellar Orbiters are being assembled
            right now and will be on sale soon.
            </p>
            <p class="py-2 pl-2 pr-4">
            <a href="https://twitter.com/search?q=%2523LibertaGalactica" target="_blank" class="underline hover:text-yellow-600">Liberta Galactica!</a>
            </p>
        </div>
    </div>
@endsection
