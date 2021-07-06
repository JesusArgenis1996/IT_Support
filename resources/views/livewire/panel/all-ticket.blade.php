<div class="w-10/12 h-screen ">
  <div class="grid grid-cols-9" >
    <div class="col-span-9 bg-gray-900 py-5 border-b-2 border-red-500 text-right">
        <p class="mx-3 text-white">Welcome <span class="font-bold">{{Auth::user()->last_name}}</span></p> 
    </div>
    <!--Filter-->
    <div class="col-span-9 py-5 text-left flex">
        <p class="mx-3">Seach by ID:</p>
        <input class="border-2 border-gray-300 rounded-md pl-2" placeholder="Example: 3" wire:model="searchTerm"/> 
        
    </div>
    <!-- Ticket -->
    <div class="col-span-9 bg-white shadow-xl max-h-60">
        <!--Title table-->
        <div class="col-span-4 border-b">
            <div class="grid grid-cols-8 py-3">
                <div class="pl-2 font-bold">
                    ID
                </div>
                
                <div class="pl-2 font-bold col-span-2 ">
                    Short Description
                </div>
                
                <div class="pl-2 font-bold">
                    Asign to
                </div> 

                <div class="flex items-center ">
                    <div class=" relative inline-block dropdown">
                        <span class="rounded-md"
                        ><button class="font-bold w-full leading-5 transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                            <span>Date</span>
                            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button
                        ></span>
                        <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                    <button tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('date','DESC')">News</button>
                                    <button tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('date','ASC')">Oldets</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>   
                <div class="flex items-center ">
                    <div class=" relative inline-block dropdown">
                        <span class="rounded-md"
                        ><button class="font-bold w-full leading-5 transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                            <span>Urgency</span>
                            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button
                        ></span>
                        <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                    <button tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('urgency','High')">High</button>
                                    <button tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('urgency','Moderate')">Moderate</button>
                                    <button tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('urgency','Low')">Low</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>   
                <div class="flex items-center ">
                    <div class=" relative inline-block dropdown">
                        <span class="rounded-md"
                        ><button class="font-bold w-full leading-5 transition duration-150 ease-in-out hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                        type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                            <span>Status</span>
                            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button
                        ></span>
                        <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                            <div class="py-1">
                                    <button tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('status','New')">New</button>
                                    <button tabindex="0" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('status','In Progress')">In Progress</button>
                                    <button tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('status','Completed')">Completed</button>
                                    <button tabindex="1" class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" wire:click="data('status','Canceled')">Canceled</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>     
                <div class="pl-2 font-bold">
                    See Ticket
                </div>
            </div>
        </div>

        <!--ticket user -->
        <ul class="col-span-4">
        @if($tickets!==null)
            <div>
            @foreach($tickets as $ticket)
            <li class="bg-white grid grid-cols-8 py-2 border-b">
                <div class="pl-2 font-bold text-gray-600">
                    {{$ticket->id}}
                </div>
                <div class="pl-2 col-span-2 ">
                    {{$ticket->short_description}}
                </div>
                 <div class="pl-2">
                    @if($ticket->asign_to !== null)
                        {{$ticket->user->last_name}} {{$ticket->user->first_name}}
                    @else           
                        Not assigned
                    @endif
                    
                </div>
                <div class="pl-2 ">
                    {{\Carbon\Carbon::parse($ticket->date)->diffForHumans() }}
                </div>
                <div class="pl-2 ">
                    {{$ticket->urgency}}
                </div>
                <div class="pl-2">
                    @if($ticket->status=='New')
                        <p class="bg-green-100 text-center rounded-full font-bold text-green-600">New</p>
                    @elseif($ticket->status=="In Progress")
                        <p class="bg-yellow-100 text-center rounded-full font-bold text-yellow-600">In progress</p>
                    @elseif($ticket->status=="Canceled")
                        <p class="bg-red-100 text-center rounded-full font-bold text-red-600">Canceled</p>
                    @elseif($ticket->status=="Completed")
                        <p class="bg-blue-100 text-center rounded-full font-bold text-blue-600">Completed</p>
                    @endif
                </div>
                <a class="text-center modal-open mx-4 px-2 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                type="submit" href="{{route('see.ticket', $ticket->id)}}">
                    See
                </a>
            </li>
            @endforeach
            {{$tickets->links()}}
            </div>
        @else
            <p>Null</p>
        @endif
        </ul>
    </div>
    
  </div>
</div>
<style>
    .dropdown:focus-within .dropdown-menu {
        opacity:1;
        transform: translate(0) scale(1);
        visibility: visible;
    }
</style>