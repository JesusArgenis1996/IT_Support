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
            <div class="grid grid-cols-6 py-3">
                <div class="pl-2 font-bold">
                    ID
                </div>
                
                <div class="pl-2 font-bold">
                    First Name
                </div>
                
                <div class="pl-2 font-bold">
                    Last Name
                </div> 
              
                <div class="pl-2 font-bold">
                    Email 
                </div>
                <div class="pl-2 font-bold">
                    Number
                </div>
                <div class="pl-2 font-bold">
                    Job
                </div>

            </div>
        </div>

        <!--ticket user -->
        <ul class="col-span-4">
        @if($users!==null)
            <div>
            @foreach($users as $user)
            <li class="bg-white grid grid-cols-6 py-2 border-b">
                <div class="pl-2 font-bold text-gray-600">
                    {{$user->id}}
                </div>
                <div class="pl-2 ">
                    {{$user->first_name}}
                </div>
                <div class="pl-2 ">
                    {{$user->last_name}}
                </div>
                <div class="pl-2 ">
                    {{$user->email}}
                </div>
                <div class="pl-2 ">
                    {{$user->number}}
                </div>
                <div class="pl-2 ">
                    {{$user->job}}
                </div>
                
                
            </li>
            @endforeach
            {{$users->links()}}
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