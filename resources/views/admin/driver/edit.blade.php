<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Driver
        </h2>
    </x-slot>
    <div class="py-12 px-20">
        <form method="post" action="{{route('driver.update', [$driver->id])}}">
            @csrf
            @method('PUT')
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                DriverName
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="drivername" value="{{$driver->DriverName}}"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 @error('DriverName') border-red-500 @enderror"
                                       placeholder="DriverName">
                            </div>
                            @error('DriverName')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                PermanentNumber
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="permanentnumber" value="{{$driver->PermanentNumber}}"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 @error('PermanentNumber') border-red-500 @enderror"
                                       placeholder="PermanentNumber">
                            </div>
                            @error('PermanentNumber')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                Nationality
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="nationality" value="{{$driver->Nationality}}"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 @error('Nationality') border-red-500 @enderror"
                                       placeholder="Nationality">
                            </div>
                            @error('Nationality')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                DOB
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="dob" value="{{$driver->DOB}}"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 @error('DOB') border-red-500 @enderror"
                                       placeholder="DOB">
                            </div>
                            @error('DOB')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">
                                Information
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="information" value="{{$driver->Information}}"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 @error('Information') border-red-500 @enderror"
                                       placeholder="Information">
                            </div>
                            @error('Information')
                            <div class="text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update Driver
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
