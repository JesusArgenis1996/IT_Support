<div class="w-10/12 h-screen ">
  <div class="grid grid-cols-9" >
    <div class="col-span-9 bg-gray-900 py-5 border-b-2 border-red-500 text-right">
        <p class="mx-3 text-white">Welcome <span class="font-bold">{{Auth::user()->last_name}}</span></p> 
    </div>
    <div class="col-span-9 bg-white shadow-xl">
        <div class="grid grid-cols-7">
            <p class="col-span-7 text-center font-bold text-4xl py-2">Ticket</p>

            <div class="col-start-1 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">ID:</p>
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->id}}" />
            </div>
            <div class="col-start-4 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">Due date:</p>
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->date}}" />
            </div>
            <div class="col-start-1 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">Caller:  </p>
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->createBy->first_name}} {{$ticket->createBy->last_name}}" />
            </div>
            <div class="col-start-4 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">Status:</p>
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->status}}" />
            </div>
            <div class="col-start-1 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">Current Location:</p>
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->current_location}}" />
            </div>
            <div class="col-start-4 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">Urgency: </p>
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->urgency}}" />
            </div>
            <div class="col-start-1 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">Service: </p>
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->service}}" />
            </div>
            <div class="col-start-4 mt-2 col-span-3 grid grid-cols-3 flex">
                <p class="font-bold p-1 col-span-1 text-right">Asign To: </p>
                @if($ticket->user!=null)
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="{{$ticket->user->first_name}} {{$ticket->user->last_name}}" />
                @else
                <input class="border border-gray-200 p-1 mx-2 col-span-2 flex" disabled value="Unasigned" />
                @endif
            </div>
            <div class="col-start-1 mt-2 col-span-6 grid grid-cols-6 flex">
                <p class="font-bold p-1 col-span-1 text-right">Shor Description: </p>
                <input class="border border-gray-200 p-1 mx-2 col-span-5 flex" disabled value="{{$ticket->short_description}}" />
            </div>
            <div class="col-start-1 mt-2 col-span-6 grid grid-cols-6 flex">
                <p class="font-bold p-1 col-span-1 text-right">Description: </p>
                <textarea class="border border-gray-200 p-1 mx-2 col-span-5 flex" disabled>{{$ticket->description}}
                </textarea>
            </div>
        </div>
    </div>
    <div class="col-span-9 bg-white shadow-xl my-5">
        <div class="grid grid-cols-7">
            <p class="col-span-7 text-center font-bold text-4xl py-2">Notes</p>
            <div class="col-start-1 mt-2 col-span-6 grid grid-cols-6 flex">
                <p class="font-bold p-1 col-span-1 text-right">Solution: </p>
                <textarea class="border border-gray-200 p-1 mx-2 col-span-5 flex" placeholder="Example: Reset the pc"></textarea>
            </div>

            <div class="col-span-7 flex mt-2">
                    <button class="flex-1 bg-white mx-3 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Cancel Ticket
                    </button>
                    <button class="flex-1 bg-white mx-3 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Asign to me
                    </button>
                    <button class="flex-1 bg-white mx-3 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        Completed
                    </button>
                </div>
        </div>
    </div>
  </div>
</div>