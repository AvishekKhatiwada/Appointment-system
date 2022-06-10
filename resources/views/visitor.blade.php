@extends('shared.navbar')
@section('content')
<div class="w-full h-full">
    <h2 align="center" class="text-black text-4xl mt-1 font-semibold">Visitor Details</h2>
    <button class="block py-2 px-3.5 mb-1 ml-1 text-center
    text-white bg-blue-800 hover:bg-red-600 rounded-md cursor-pointer"
     type="button" data-modal-toggle="addmodal">Add New</button>
</div>
        <table class="w-full text-sm text-center ">
            <thead class="bg-gray-700 text-white h-9 w-full">
                <th>S.no</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($data as $value)
                <tr class="border-b text-lg ">
                    <td class="px-2 py-4">{{ $value->id}}</td>
                    <td class="px-4 py-4">{{ $value->name}}</td>
                    <td class="px-4 py-4">{{ $value->mobileno}}</td>
                    <td class="px-4 py-4">{{ $value->email}}</td>
                    <td class="px-4 py-4">{{ $value->status}}</td>
                    <td class="px-0 py-3">
                        <a type="button" id="updateVisitor" data-modal-toggle="updatemodal"
                        class="text-white text-sm font-medium inline-flex bg-green-700 px-2.5 py-2.5 rounded-md cursor-pointer">Update</a>
                        <a href=""><button type="button" class="cursor-pointer text-white text-sm font-medium inline-flex bg-red-700 px-2.5 py-2.5 rounded-md ">Appointments</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    <!-- Visitor Add Modal-->
    <div id="addmodal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-slate-200 rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 right-2.5 text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="addmodal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-3 text-xl font-medium text-black dark:text-black">Add New Visitor</h3>
                    <form class="space-y-3" action="/addvisitor" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Visitor Name</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                placeholder="Enter full name" required="">
                        </div>
                        <div>
                            <label for="mobileno"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Mobile No</label>
                            <input type="number" name="mobileno" id="mobileno" placeholder="Enter phone number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                required="">
                        </div>
                        <div>
                            <label for="email"
                                class="text-sm font-medium text-gray-900 dark:text-black">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="Enter E-mail"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- Visitor update Modal-->
    <div id="updatemodal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-slate-200 rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 right-2.5 text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="updatemodal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-3 text-xl font-medium text-black dark:text-black">Update Visitor Detail</h3>
                    <form class="space-y-3" action="/addvisitor" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Visitor Name</label>
                            <input type="name" name="name" id="updatename"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Enter full name" required="">
                        </div>
                        <div>
                            <label for="mobileno"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Mobile No</label>
                            <input type="number" name="mobileno" id="updatemobileno" placeholder="Enter phone number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required="">
                        </div>
                        <div>
                            <label for="email"
                                class="text-sm font-medium text-gray-900 dark:text-black">E-mail</label>
                            <input type="email" name="email" id="updateemail" placeholder="Enter E-mail"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required="">
                        </div>
                        <div class="flex">
                            <label for="status" class="p-1 block text-sm font-medium text-black">Status:</label>
                            <select name="status" id="updatestatus"  class="block p-2 rounded-md border border-gray-300 text-sm focus:ring-blue-500 w-full">
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
</div>
@endsection