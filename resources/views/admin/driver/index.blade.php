<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Drivers
        </h2>
    </x-slot>
    <div class="py-12 px-20">
        @if(Session::has('message'))
            <div class="bg-green-300 text-green-700 rounded px-2 py-3">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="grid justify-items-stretch my-3">
            <a href="{{route('driver.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 flex justify-self-end">Create Driver</a>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DriverName</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PermanentNumber</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nationality</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DOB</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Information</th>
                <th class="relative px-6 py-3"></th>
                <th class="relative px-6 py-3"></th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @forelse($drivers as $driver)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{$driver->id}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$driver->DriverName}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$driver->PermanentNumber}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$driver->Nationality}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$driver->DOB}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$driver->Information}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{route('driver.edit', [$driver->id])}}" class="text-blue-500">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form method="post" action="{{route('driver.destroy', [$driver->id])}}" id="deleteForm{{$driver->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="event.preventDefault(); if(confirm('Are you sure to delete?')) {document.getElementById('deleteForm{{$driver->id}}').submit();} else {return false;} ">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="px-6 py-4 whitespace-nowrap">No drivers to display</td></tr>
            @endforelse
            </tbody>
        </table>
        <div class="my-3">
            {{$drivers->links()}}
        </div>
    </div>
</x-app-layout>
