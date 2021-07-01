<div class="grid sm:grid-cols-1 md:grid-cols-4">
    <a class="absolute rounded-full h-14 w-14 flex items-center justify-center shadow-xl mx-5 bg-white hover:bg-gray-100" href="{{route('home')}}">
        <img src="{{asset('img/back.svg')}}" class="w-6/12" />
    </a>
    <div class="mt-5 md:col-start-2 col-span-2 bg-white shadow-2xl px-10 pt-3">
        <!--Title-->
        <p class="text-center font-bold">REGISTER</p>
        <hr class="my-2 w-full">
        
        <!--Form-->
        <div class="flex justify-between w-full">
            <input class="px-1 py-2 mt-1 mr-1 w-9/12  border border-gray-300 bg-gray-100" wire:model="first_name" type="text" placeholder="Name"/>
           
            <input class="px-1 py-2 mt-1 ml-1 w-9/12  border border-gray-300 bg-gray-100" wire:model="last_name" type="text" placeholder="Last Name"/>
            
        </div>    
         @error('first_name') <span class="text-red-500">{{ $message }}</span>@enderror
         @error('last_name') <span class="text-red-500">{{ $message }}</span>@enderror
        <input class="px-1 py-2 mt-2 w-full h-auto border border-gray-300 bg-gray-100" wire:model="email" type="text" placeholder="Email"/>
        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
        <input class="px-1 py-2 mt-2 w-full h-auto border border-gray-300 bg-gray-100" wire:model="number" type="text" placeholder="Number"/>
        @error('number') <span class="text-red-500">{{ $message }}</span>@enderror
        <select class="px-1 py-2 mt-2 w-full h-auto border border-gray-300 bg-gray-100" wire:model="job">
            <option value="IT Support">IT Support</option>
            <option value="Maintenance">Maintenance</option>
            <option value="Human Resources">Human Resources</option>
            <option value="Engineering">Engineering</option>
            <option value="Floor Employee">Floor Employee</option>
        </select>
        @error('job') <span class="text-red-500">{{ $message }}</span>@enderror
        <input class="px-1 py-2 mt-2 w-full h-auto border border-gray-300 bg-gray-100" id="password" type="password" wire:model="password" name="password" type="text" placeholder="Password"/>
        @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
        <input class="px-1 py-2 mt-2 w-full h-auto border border-gray-300 bg-gray-100" id="password" type="password" wire:model="password_confirmation" required placeholder="Confirm Password"/>

        <!--Input-->
        <button class="px-1 py-2 my-5 w-full h-auto border border-gray-300 bg-gray-100" wire:click="register">Register</button>
        
        <hr class="my-2 w-full">
        <p class="text-center my-3">Already have a account? <a class="text-blue-600" href="{{route('login')}}" >Sign here</a></p>
    </div>
</div>