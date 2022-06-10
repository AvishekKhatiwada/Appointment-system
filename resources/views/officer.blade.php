@extends('shared.navbar')
@section('content')
    <div class="h-full w-full">
        <h2 align="center" class="text-black text-4xl mt-1 font-semibold">Officer Details</h2>
        <div class="mt-3">
            <button
                class="block py-2 px-3.5 mb-1 ml-1 text-center text-white bg-blue-800 hover:bg-red-700 
                    hover:border-black border-black rounded-md cursor-pointer"
                type="button" data-modal-toggle="add-officer-modal">Add Officer</button>
            <table class="w-full text-sm text-center ">
                <thead class="bg-gray-700 text-white h-9 w-full">
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Post</th>
                        <th>Status</th>
                        <th>WorkStartTime</th>
                        <th>WorkEndTime</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr class="border-b text-lg font-normal">
                            <td class="px-4 py-4"></td>
                            <td class="px-4 py-4"></td>
                            <td class="px-4 py-4"></td>
                            <td class="px-4 py-4"></td>
                            <td class="px-4 py-4"></td>
                            <td class="px-4 py-4"></td>
                            <td class="px-4 py-4 ">
                                <a type="button" id="updateOfficer" href="{{route('update-officer')}}"
                                class="text-white text-sm font-medium inline-flex bg-green-700 px-2.5 py-2.5 rounded-md cursor-pointer">Update</a>
                                <a href="/appointments"><button type="button" class="cursor-pointer text-white text-sm font-medium inline-flex bg-red-700 px-2.5 py-2.5 rounded-md ">Appointments</button></a>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Officer Add Modal-->
    <div id="add-officer-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-slate-200 rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 right-2.5 text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="add-officer-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-3 text-xl font-medium text-black dark:text-black">Add New Officer</h3>
                    <form class="space-y-3" action="/addofficer" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Officer Name</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Enter full name" required="">
                        </div>
                        <div>
                            <label for="post"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your
                                Post</label>
                            <input type="text" name="post" id="post" placeholder="Enter your post"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required="">
                        </div>
                        <div>
                            <label for="#">Work Days: </label><br>
                            <input type="checkbox" value="sunday" id="sun" class="m-2" name="workday[]">
                            <label for="sun">Sun</label>
                            <input type="checkbox" value="monday" id="mon" class="m-2" name="workday[]">
                            <label for="mon">Mon</label>
                            <input type="checkbox" value="tuesday" id="tue" class="m-2" name="workday[]">
                            <label for="tue">Tue</label>
                            <input type="checkbox" value="wednesday" id="wed" class="m-2" name="workday[]">
                            <label for="wed">Wed</label>
                            <input type="checkbox" value="thursday" id="thu" class="m-2" name="workday[]">
                            <label for="thu">Thu</label>
                            <input type="checkbox" value="friday" id="fri" class="m-2" name="workday[]">
                            <label for="fri">Fri</label>
                            <input type="checkbox" value="saturday" id="sat" class="m-2" name="workday[]">
                            <label for="sat">Sat</label><br>
                            <small name="days"></small>
                        </div>
                        <div class="flex space-x-3">
                            <div>
                                <label for="workstarttime"
                                    class="text-sm font-medium text-gray-900 dark:text-black">Work Start Time</label>
                                <input type="time" name="workstarttime" id="workstarttime"
                                    class=" border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required="">
                            </div>
                            <div>
                                <label for="workendtime"
                                    class="mb-2 text-sm font-medium text-gray-900 dark:text-black">Work End Time</label>
                                <input type="time" name="workendtime" id="workendtime"
                                    class=" border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required="">
                            </div>
                        </div>
                        <div class="flex">
                            <label for="status" class="p-1 block text-sm font-medium text-black">Status:</label>
                            <select name="status" id="status"  class="block p-2 rounded-md  border border-gray-300  text-sm focus:ring-blue-500 w-full">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
