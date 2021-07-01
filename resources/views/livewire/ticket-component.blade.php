<div class="grid sm:grid-cols-1 md:grid-cols-8 my-5">
    <!--Back-->
    <a class="absolute rounded-full h-14 w-14 flex items-center justify-center shadow-xl mx-5 bg-white hover:bg-gray-100" href="{{route('home')}}">
        <img src="{{asset('img/back.svg')}}" class="w-6/12" />
    </a>
    <!--title-->
    <div class="sm:col-start-2 col-span-6 bg-white shadow-xl">
        <p class="text-center font-bold text-4xl my-2">Support</p>
    
        <!--Form-->
        <div class="grid grid-cols-2 grid-rows-2 my-4">
            <div class="grid col-span-2 sm:col-span-1 grid-cols-3 pr-2">
                <p class="sm:text-right text-center font-bold pr-2 my-2">Caller: </p>
                <input class="col-span-2 my-2 border border-gray-300 bg-gray-100 px-2" disabled value="{{Auth::user()->first_name}} {{Auth::user()->last_name}}" />
                <p class="sm:text-right text-center font-bold pr-2 my-2">Current Location: </p>
                <input class="col-span-2 my-2 border border-gray-300 bg-gray-100 px-2" placeholder="Los Angeles, California" wire:model="currentLocation"/>
                @error('currentLocation') <span class="text-red-500 col-span-3 text-right">{{ $message }}</span>@enderror
                <p class="sm:text-right text-center font-bold pr-2 my-2">Service: </p>
                <select class="col-span-2 my-2 px-2 border border border-gray-300 bg-gray-100" wire:model="job">
                    <option value="Everyone">All</option>
                    <option value="IT Support">IT Support</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Human Resources">Human Resources</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Floor Employee">Floor Employee</option>
                </select>

            </div>
            <div class="grid col-span-2 sm:col-span-1 grid-cols-3 pr-2">
                <p class="sm:text-right text-center font-bold pr-2 my-2">Due date: </p>
                <input type="date" class="col-span-2 my-2 border border-gray-300 bg-gray-100 px-2" wire:model="date" />
                @error('date') <span class="text-red-500 col-span-3 text-right">{{ $message }}</span>@enderror
                <p class="sm:text-right text-center font-bold pr-2 my-2">Urgency: </p>
                <select class="col-span-2 my-2 px-2 border border border-gray-300 bg-gray-100" wire:model="urgency">
                    <option value="Low">Low</option>
                    <option value="Moderate">Moderate</option>
                    <option value="High">High</option>  
                </select>
                
                <p class="sm:text-right text-center font-bold pr-2 my-2">Asign to: </p>
                <select class="col-span-2 my-2 px-2 border border border-gray-300 bg-gray-100" wire:model="asignTo">
                    <option value="Everyone" selected>Everyone</option>
                    @foreach($workers as $employee)    
                        <option value="{{$employee->id}}">{{$employee->last_name}} -- {{$employee->job}}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="row-span-2 col-span-2 mt-10 pr-2">
                <div class="grid grid-cols-6">
                    <p class="text-center col-span-2 sm:col-span-1 sm:text-right font-bold pr-2 my-2">Short Description </p>
                    <input class="col-start-3 col-span-4 sm:col-span-5 my-2 border border-gray-300 bg-gray-100 px-2" wire:model="shortDescription" placeholder="Escribe algo" />
                    @error('shortDescription') <span class="text-red-500 col-span-3 text-right">{{ $message }}</span>@enderror
                </div>
                <div class="grid grid-cols-6">
                    <p class="text-center col-span-2 sm:col-span-1 sm:text-right font-bold pr-2 my-2">Descripcion </p>
                    <textarea class="col-start-3 col-span-4 sm:col-span-5 my-2 border border-gray-300 bg-gray-100 px-2" wire:model="description" placeholder="Escribe algo"></textarea>
                    @error('description') <span class="text-red-500 col-span-3 text-right">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <!--Send-->
        <div class="grid grid-cols-2 sm:grid-cols-8 my-10 pr-2">
            <button class="col-span-1 sm:col-start-5 sm:col-span-2 px-4 py-1 hover:bg-gray-100"
                  type="submit" href="{{route('home')}}">Cancel</button>
            <button class="col-span-1 sm:col-start-7 sm:col-span-2 px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                  type="submit" wire:click="newTicket">Send</button>
        </div>
    </div>
</div>
