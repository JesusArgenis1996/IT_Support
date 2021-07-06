<div class="w-10/12 h-screen ">
  <div class="grid grid-cols-9" >
    <div class="col-span-9 bg-gray-900 py-5 border-b-2 border-red-500 text-right">
        <p class="mx-3 text-white">Welcome <span class="font-bold">{{Auth::user()->last_name}}</span></p> 
    </div>

    <div class="col-start-1 col-span-9 md:col-start-2 md:col-span-3">
        <div class="bg-white shadow-xl md:my-10 grid grid-cols-3 border-b-2 border-red-500">
            <div class="col-span-1 mx-3 mx-2 px-2 py-2">
                <img src="{{asset('img/panel/all.svg')}}" class="w-full " />
            </div>
            <div class="col-span-2 text-center py-2">
                <p class="font-bold text-red-500">All Tickets</p>
                <p class="font-bold text-2xl">{{$allTickets}} in total</p>
                <button class="text-red-500 font-bold p-1 rounded hover:bg-red-200">See list</button>
            </div>
        </div>
        <div class="bg-white shadow-xl md:my-10 grid grid-cols-3 border-b-2 border-green-400">
            <div class="col-span-1 mx-3 mx-2 px-2 py-2">
                <img src="{{asset('img/panel/your.svg')}}" class="w-full " />
            </div>
            <div class="col-span-2 text-center py-2">
                <p class="font-bold text-green-400">Your Work</p>
                <p class="font-bold text-2xl">{{$yourTickets}} open tickets</p>
                <button class="text-green-400 font-bold p-1 rounded hover:bg-green-200">See list</button>
            </div>
        </div>
    </div>

    <div class="col-span-9 col-start-1 md:col-start-6 md:col-span-3">
        <div class="bg-white shadow-xl md:my-10 grid grid-cols-3 border-b-2 border-yellow-400">
            <div class="col-span-1 mx-3 mx-2 px-2 py-2">
                <img src="{{asset('img/panel/open.svg')}}" class="w-full " />
            </div>
            <div class="col-span-2 text-center py-2">
                <p class="font-bold text-yellow-400">Open Tickets</p>
                <p class="font-bold text-2xl">{{$allOpen}} total</p>
                <button class="text-yellow-400 font-bold p-1 rounded hover:bg-yellow-200">See list</button>
            </div>
        </div>
        <div class="bg-white shadow-xl md:my-10 grid grid-cols-3 border-b-2 border-pink-400">
            <div class="col-span-1 mx-3 mx-2 px-2 py-2">
                <img src="{{asset('img/panel/users.svg')}}" class="w-full " />
            </div>
            <div class="col-span-2 text-center py-2">
                <p class="font-bold text-pink-400">All Users</p>
                <p class="font-bold text-2xl">{{$users}} Users</p>
                <button class="text-pink-400 font-bold p-1 rounded hover:bg-pink-200">See list</button>
            </div>
        </div>
    </div>
  </div>
</div>