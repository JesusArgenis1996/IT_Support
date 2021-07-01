<div class="grid sm:grid-cols-3 md:grid-cols-7 mt-5">
    <a class="absolute rounded-full h-14 w-14 flex items-center justify-center shadow-xl mx-5 bg-white hover:bg-gray-100" href="{{route('home')}}">
        <img src="{{asset('img/back.svg')}}" class="w-6/12" />
    </a>
    <div class="sm:col-span-1 sm:col-start-2 md:col-start-3 md:col-span-3">
        <p class="text-center font-bold text-4xl my-4">Tutorial</p>
        <hr class="mb-3">
    </div>
    <div class="sm:col-span-1 sm:col-start-1 md:col-start-2 md:col-span-2 bg-white-400 shadow-xl px-10 py-10 bg-white">
        <div class="grid grid-rows-5">
            <button class="text-left border-b-4 focus:border-red-500" wire:click="$set('step','register')">How to register?</button>
            <button class="text-left border-b-4 focus:border-red-500" wire:click="$set('step','login')">How to login?</button>
            <button class="text-left border-b-4 focus:border-red-500" wire:click="$set('step','ticket')">How to make a ticket?</button>
            <button class="text-left border-b-4 focus:border-red-500" wire:click="$set('step','status')">How to see status of your ticket?</button>
            <button class="text-left border-b-4 focus:border-red-500" wire:click="$set('step','logout')">How to logout?</button>
        </div>
    </div>
    @if($step=='register')
        <div class="sm:col-span-2 md:col-span-3 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white py-10">
            <p class="font-bold">Register</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab hic cumque impedit dolore aliquam ipsa nemo minima natus esse repellat ratione maxime, voluptatum ducimus saepe accusamus placeat possimus dicta assumenda!</p>
        </div>
    @elseif($step=='login')
        <div class="sm:col-span-2 md:col-span-3 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white py-10">
            <p class="font-bold">Login</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab hic cumque impedit dolore aliquam ipsa nemo minima natus esse repellat ratione maxime, voluptatum ducimus saepe accusamus placeat possimus dicta assumenda!</p>
        </div>
    @elseif($step=='ticket')
        <div class="sm:col-span-2 md:col-span-3 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white py-10">
            <p class="font-bold">Ticket</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab hic cumque impedit dolore aliquam ipsa nemo minima natus esse repellat ratione maxime, voluptatum ducimus saepe accusamus placeat possimus dicta assumenda!</p>
        </div>
    @elseif($step=='status')
        <div class="sm:col-span-2 md:col-span-3 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white py-10">
            <p class="font-bold">Status</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab hic cumque impedit dolore aliquam ipsa nemo minima natus esse repellat ratione maxime, voluptatum ducimus saepe accusamus placeat possimus dicta assumenda!</p>
        </div>
    @elseif($step=='logout')
        <div class="sm:col-span-2 md:col-span-3 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white py-10">
            <p class="font-bold">Logout</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab hic cumque impedit dolore aliquam ipsa nemo minima natus esse repellat ratione maxime, voluptatum ducimus saepe accusamus placeat possimus dicta assumenda!</p>
        </div>
    @endif
</div>
