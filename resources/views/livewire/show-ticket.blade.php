<div class="grid grid-cols-4 lg:grid-cols-6 my-4">
    <a class="absolute rounded-full h-14 w-14 flex items-center justify-center shadow-xl mx-5 bg-white hover:bg-gray-100" href="{{route('home')}}">
        <img src="{{asset('img/back.svg')}}" class="w-6/12" />
    </a>
    <div class="lg:col-start-2 col-span-4 bg-white shadow-xl">
        <!--Title table-->
        <div class="col-span-4 border-b">
            <div class="grid grid-cols-6 py-3">
                <div class="pl-2 font-bold">
                    ID
                </div>
                <div class="pl-2 font-bold col-span-2 ">
                    Short Description
                </div>
                <div class="pl-2 font-bold ">
                    Date
                </div>
                <div class="pl-2 font-bold">
                    Status
                </div>
                <div class="pl-2 font-bold">
                    Cancel Ticket
                </div>
            </div>
        </div>

        <!--ticket user -->
        <ul class="col-span-4">
            @foreach($tickets as $ticket)
            <li class="bg-white grid grid-cols-6 py-2 border-b">
                <div class="pl-2 font-bold text-gray-600">
                    {{$ticket->id}}
                </div>
                <div class="pl-2 col-span-2 ">
                    {{$ticket->short_description}}
                </div>
                <div class="pl-2 ">
                    {{$ticket->date}}
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
                <button class="modal-open mx-4 px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded"
                  type="submit" wire:click="select({{$ticket->id}})">
                    Cancel
                </button>
            </li>
            @endforeach
        </ul>
    </div>
    <!--modal-->
    @if($show)
    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                Cancel Ticket
                </h3>
                <div class="mt-2">
                <p class="text-sm text-gray-500">
                    Are you sure you want to cancel this ticket?
                    {{$selectedTicket}}
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="button" wire:click="cancel" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            Yes
            </button>
            <button type="button" wire:click="$set('show', false)" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            No
            </button>
        </div>
        </div>
    </div>
    </div>
    @endif
</div>
