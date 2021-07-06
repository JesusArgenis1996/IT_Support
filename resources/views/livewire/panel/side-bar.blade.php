<div class="flex flex-row min-h-screen">
    <div class="flex flex-col w-64 text-gray-700 bg-black bg-gray-900">
        <div class="flex-shrink-0 px-8 py-1 flex flex-row items-center justify-between border-b-2 border-red-500">
            <!--Logo-->
            <a href="{{route('home')}}">
                <div class="flex">
                    <div class="bg-white my-3 mx-3 rounded-full">
                        <img src="{{ asset('img/logo.svg') }}" class="w-8 p-1"/>
                    </div>
                    <p class="text-white my-4">IT Support</p>
                </div>
            </a>
    </div>
     <!--Menu-->
    <div class="pt-2">
        <div class='text-white flex py-1 border-b-2 border-gray-800'>
            <p class="font-bold mx-3">Dashboard</p> 
        </div>
        <a href="{{route('home')}}" class='text-white flex py-1 border-b-2 border-gray-800 hover:bg-red-500'>
            <img src="{{asset('img/panel/back.svg')}}" class="w-1/12 mx-3 mx-2" />
            <p> Back home</p> 
        </a>
        <a href="{{route('panel')}}" class='text-white flex py-1 border-b-2 border-gray-800 hover:bg-red-500'>
            <img src="{{asset('img/panel/home.svg')}}" class="w-1/12 mx-3 mx-2" />
            <p> Panel</p> 
        </a>
        <a href="{{route('show.all')}}" class='text-white flex py-1 border-b-2 border-gray-800 hover:bg-red-500'>
            <img src="{{asset('img/panel/all.svg')}}" class="w-1/12 mx-3 mx-2 " />
            <p> All Work</p> 
        </a>
        <a href="{{route('your.ticket')}}" class='text-white flex py-1 border-b-2 border-gray-800 hover:bg-red-500'>
            <img src="{{asset('img/panel/your.svg')}}" class="w-1/12 mx-3 mx-2" />
            <p> Your Work</p> 
        </a>
        <a href="{{route('open.ticket')}}" class='text-white flex py-1 border-b-2 border-gray-800 hover:bg-red-500'>
            <img src="{{asset('img/panel/open.svg')}}" class="w-1/12 mx-3 mx-2" />
            <p> Open Work</p> 
        </a>
        <a href="{{route('show.user')}}" class='text-white flex py-1 border-b-2 border-gray-800 hover:bg-red-500'>
            <img src="{{asset('img/panel/users.svg')}}" class="w-1/12 mx-3 mx-2" />
            <p> Users</p> 
        </a>
    </div>
</div>


