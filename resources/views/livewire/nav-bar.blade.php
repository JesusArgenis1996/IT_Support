<nav class="bg-gray-900 border-b border-red-500">
    <div class='flex justify-between'>
        <!--logo-->
        <a href="{{route('home')}}">
            <div class="flex">
                <div class="bg-white my-3 mx-3 rounded-full">
                    <img src="{{ asset('img/logo.svg') }}" class="w-8 p-1"/>
                </div>
                <p class="text-white my-4">IT Support</p>
            </div>
        </a>
        <!--User area -->
        @guest
        <div class="flex">
            <a class="text-white my-3 mx-2 p-1 hover:bg-gray-700 rounded-lg" href="{{route('login')}}">Sign In</a>
            <a class="text-white my-3 mx-2 p-1 hover:bg-gray-700 rounded-lg" href="{{route('register')}}">Register</a>
        </div>
        @endguest

        @auth 
        <div class="flex items-center justify-center">
        <div class=" relative inline-block text-left dropdown">
            <span class="rounded-md shadow-sm"
            ><button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
            type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                <span>Welcome Back {{Auth::user()->last_name}}</span>
                <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button
            ></span>
            <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                <div class="py-1">
                    @if(Auth::user()->job=='IT Support'||Auth::user()->job=='Maintenance')
                        <a tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >PANEL</a>
                    @else
                        <a tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >New Ticket</a>
                        <a tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Your Ticket</a>
                    @endif
                </div>
                <div class="py-1">
                    <button tabindex="3" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  wire:click="logout" role="menuitem" >Sign out</button>
                </div>
            </div>
            </div>
        </div>
        </div>              
        

        @endauth
    </div>
</nav>
<style>
    .dropdown:focus-within .dropdown-menu {
        opacity:1;
        transform: translate(0) scale(1);
        visibility: visible;
    }
</style>
