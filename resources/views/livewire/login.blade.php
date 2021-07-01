<div class="grid sm:grid-cols-1 md:grid-cols-3">
    <!--Back-->
    <a class="absolute rounded-full h-14 w-14 flex items-center justify-center shadow-xl mx-5 bg-white hover:bg-gray-100" href="{{route('home')}}">
        <img src="{{asset('img/back.svg')}}" class="w-6/12" />
    </a>
    
    
    
    <div class="mt-5 md:col-start-2 bg-white shadow-2xl">
        <!--Title-->
        <div class="grid grid-cols-3 gap-4">
            <img src="{{ asset('img/user.svg') }}" class="col-start-2 w-full pt-2"/>
        </div>
        <p class="text-center font-bold">Sign In</p>
        <hr class="mx-10 my-2 w-4/5">

        <!-- Register message -->
        @if (session()->has('message'))
            <div class="px-1 py-2 mx-10 my-1 w-4/5 h-auto text-center flex items-center h-16 bg-green-200 text-green-500 p-2 border border-green-500">
                {{session('message')}}
            </div>
        

        <!-- Error login -->
        @elseif (session()->has('error'))
            <div class="px-1 py-2 mx-10 my-1 w-4/5 h-auto text-center flex items-center h-16 bg-red-200 text-red-500 p-2 border border-red-500">
                {{session('error')}}
            </div>
        

        <!-- Guest login -->
        @elseif (session()->has('warning'))
            <div class="px-1 py-2 mx-10 my-1 w-4/5 h-auto text-center flex items-center h-16 bg-gray-200 text-gray-500 p-2 border border-gray-500">
                {{session('warning')}}
            </div>
        @endif
        <!--input user and password-->
        <input class="px-1 py-2 mx-10 my-1 w-4/5 h-auto border border-gray-300 bg-gray-100" wire:model="email" type="text" placeholder="example@company.com"/>
        @error('email') <span class="text-red-500 px-1 py-2 mx-10 my-1 w-4/5">{{ $message }}</span>@enderror
        <input class="px-1 py-2 mx-10 my-1 w-4/5 h-auto border border-gray-300 bg-gray-100" wire:model="password" type="password" placeholder="Password"/>
        @error('password') <span class="text-red-500 px-1 py-2 mx-10 my-1 w-4/5">{{ $message }}</span>@enderror
        <!--button cancel or login-->
        <button class="px-1 py-2 mx-10 my-5 w-4/5 h-auto border border-gray-300 bg-gray-100" wire:click="login">Sign In</button>
        
        <hr class="mx-10 my-2 w-4/5">
        <p class="text-center my-3">Don't have a account? <a class="text-blue-600" href="{{route('register')}}" >Register here</a></p>
    </div>
</div>