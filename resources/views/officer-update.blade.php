@extends('shared.navbar')
@section('content')
<div class="flex ">
                <div class="py-6 px-6 lg:px-8 w-1/2 border border-gray-300">
                    <h3 class="mb-3 text-xl font-medium text-black dark:text-black">Update Officer</h3>
                    <form class="space-y-3" action="/updateofficer" method="POST" id="updateOfficer">
                        @csrf
                        <div>
                            <input type="hidden" name="id" id="id">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Officer Name</label>
                            <input type="name" name="name" id="updatename"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="Enter full name" value="" required="">
                        </div>
                        <div>
                            <label for="post"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your
                                Post</label>
                            <input type="text" name="post" id="updatepost" placeholder="Enter your post"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                value="" required="">
                        </div>
                        <div>
                            
                            <label for="#">Work Days: </label><br>                            
                            <input type="checkbox" value="sunday" id="updatesun" class="m-2" name="workday[]">
                            <label for="sun">Sun</label>
                            <input type="checkbox" value="monday" id="updatemon" class="m-2" name="workday[]">
                            <label for="mon">Mon</label>
                            <input type="checkbox" value="tuesday" id="updatetue" class="m-2" name="workday[]">
                            <label for="tue">Tue</label>
                            <input type="checkbox" value="wednesday" id="updatewed" class="m-2" name="workday[]">
                            <label for="wed">Wed</label>
                            <input type="checkbox" value="thursday" id="updatethu" class="m-2" name="workday[]">
                            <label for="thu">Thu</label>
                            <input type="checkbox" value="friday" id="updatefri" class="m-2" name="workday[]">
                            <label for="fri">Fri</label>
                            <input type="checkbox" value="saturday" id="updatesat" class="m-2" name="workday[]">
                            <label for="sat">Sat</label><br>
                            <small name="days"></small>
                        </div>
                        <div class="flex space-x-3">
                            <div>
                                <label for="workstarttime"
                                    class="text-sm font-medium text-gray-900 dark:text-black">Work Start Time</label>
                                    <input type="time" name="workstarttime" id="updateworkstarttime"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 "
                                    required="">
                            </div>
                            <div>
                                <label for="workendtime"
                                    class="mb-2 text-sm font-medium text-gray-900 dark:text-black">Work End Time</label>
                                <input type="time" name="workendtime" id="updateworkendtime"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 "
                                    required="">
                            </div>
                        </div>
                        <div class="flex">
                            <label for="status" class="p-1 block text-sm font-medium text-black">Status:</label>
                            <select name="status" id="updatestatus"  class="block p-2 rounded-md  border border-gray-300 text-gray-300 text-sm focus:ring-blue-500 w-full">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    </form>
                </div>
                </div>
@endsection