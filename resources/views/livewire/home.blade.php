<div class="grid sm:grid-cols-1 md:grid-cols-8 pt-5">
     <!-- login message -->
        @if (session()->has('message'))
            <div class="md:col-start-4 sm:col-span-1 mx-10 my-5 py-2 md:col-span-2 text-center font-bold bg-white text-black border border-gray-50 shadow-xl">
                {{session('message')}}
            </div>
        @endif
        
    <!--Button for tutorial-->
    <div class="bg-white mx-2 border-b-2 border-fuchsia-600 sm:col-span-1 md:col-start-2 md:col-span-2 shadow-xl">
        <p class="text-center font-bold py-3">Tutorial</p>
        <hr class="mx-5">
        <div class="grid grid-cols-3">
            <img src="{{ asset('img/tuto.svg') }}" class="w-full p-1 col-start-2"/>
        </div>
        <div class="grid grid-cols-4">
            <p class="text-center col-start-1 col-span-4 my-3"><span class="font-bold">Don't know how the system works?</span><br>Click here to see step by step</p>
            <a class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded col-start-2 col-span-2" href="{{route('tutorial')}}">Click HERE!</a>
        </div>
    </div>

    <!--Button for create ticket -->
    <div class="bg-white mx-2  bg-white border-b-2 border-fuchsia-600 sm:col-span-1 md:col-span-2 shadow-xl">
        <p class="text-center font-bold py-3">Make a Ticket</p>
        <hr class="mx-5">
        <div class="grid grid-cols-3">
            <img src="{{ asset('img/pencil.svg') }}" class="w-full p-1 col-start-2"/>
        </div>  
        <div class="grid grid-cols-4">
            <p class="text-center col-start-1 col-span-4 my-3"><span class="font-bold">Do you need help?</span><br> Click here to create a ticket</p>
            <a class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded col-start-2 col-span-2" href="{{route('ticket')}}">Click HERE!</a>
        </div>
    </div>

    <!--Button for list of tickets -->
    <div class="bg-white mx-2 bg-white border-b-2 border-fuchsia-600 sm:col-span-1 md:col-span-2 shadow-xl">
        <p class="text-center font-bold py-3">Your tickets</p>
        <hr class="mx-5">
        <div class="grid grid-cols-3">
            <img src="{{asset('img/list.svg')}}" class="w-full p-1 col-start-2" />
        </div>
        <div class="grid grid-cols-4">
            <p class="text-center col-start-1 col-span-4 my-3"><span class="font-bold">Do you want to see the status of your tickets?</span> Click here</p>
            <a class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded col-start-2 col-span-2" href="{{route('show.ticket')}}">Click HERE!</a>
        </div>
    </div>
</div>

