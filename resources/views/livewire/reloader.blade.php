<div>
    <button wire:click="reload" class="float-right px-6 py-2 text-white border-2 border-black rounded-lg bg-o8-purple-500 hover:bg-o8-purple-200 hover:text-yellow-400">Reload</button>

    <h2 class="pb-4 text-xl">The Networks:</h2>
    <div wire:loading class="p-4">

        Scanning the network for avatars...

    </div>

    <div x-data="{showing: []}" wire:loading.remove>
    @foreach($networks as $key => $network)
        <p x-data="{showing[{{ $key }}]: true}"
            @click="showing[{{ $key }}] = !showing[{{ $key }}]"
            class="hover:cursor-pointer hover:text-yellow-600"><b >{{ $network->name }} ({{ $network->avatars->count() }} Gamers) <span x-show="showing[{{ $key }}]"> &minus; </span><span x-show="!showing[{{ $key }}]"> &plus; </span></b></p>
        <div class="p-4" x-show="showing[{{ $key }}]" x-data="{ avatars: {{ $network->avatars }}}" >
        <template  x-for="(avatar, index) in avatars">
            <p x-text="avatar.name"></p>
        </template>
        </div>
    @endforeach
    </div>
</div>