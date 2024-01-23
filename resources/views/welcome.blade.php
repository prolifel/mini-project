<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->
    <!-- <script src="/resources/js/app.js"></script> -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- <link href="
    https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.2.6/dist/css/datepicker.min.css" rel="stylesheet"> -->
    <!-- Styles -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.2.6/dist/js/datepicker-full.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
        integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/theme.min.css"
        integrity="sha512-hbs/7O+vqWZS49DulqH1n2lVtu63t3c3MTAn0oYMINS5aT8eIAbJGDXgLt6IxDHcWyzVTgf9XyzZ9iWyVQ7mCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>

<body class="antialiased">
    <!-- @dump($records) -->
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="">
                    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            Out</a>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        @auth
            <div class="grid grid-cols-3 gap-8 w-full">
                @if (session('error'))
                    <div id="alert-2"
                        class="col-span-3 flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="text-sm font-medium">Oops!</span>
                        <div class="ms-3 text-sm font-medium">
                            {{ session('error') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                @if (session('sukses'))
                    <div id="alert-3"
                        class="col-span-3 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="text-sm font-medium">Success!</span>
                        <div class="ms-3 text-sm font-medium">
                            {{ session('sukses') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                <div class="col-span-2 w-full p-4 bg-white mx-5 my-3 border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <form class="mx-5 py-3" action="{{ route('record.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="category_label"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Label</label>
                            <select id="category_label" name="category_id"
                                class="bg-gray-50 border border-gray-3 00 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>Choose an activity ...</option>
                                <option value="1">Project</option>
                                <option value="2">Meeting</option>
                                <option value="3">Unproductive Hour</option>
                            </select>

                        </div>
                        <div class="mb-6">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="3" style="resize:none"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your description here..." required></textarea>

                            </textarea>
                        </div>

                        <div class="mb-6">

                            <div class="flex">
                                <div class="flex items-center me-4">
                                    <input id="autoRadioButton" type="radio" value="auto" name="type" checked
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Auto</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="manualRadioButton" type="radio" value="manual" name="type"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manual</label>
                                </div>
                            </div>

                        </div>
                        <div id="manualRadio">
                            <div class="mb-6">
                                <div class="relative max-w-sm">
                                    <label for="date"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 mt-7" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="datepicker"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date" name="date"></p>

                                </div>

                            </div>
                            <div class="mb-6">
                                <div class="relative max-w-sm">
                                    <div class="flex">
                                        <div class="flex items-center me-2">
                                            <label for="start"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-2">Start
                                                time</label>
                                            <input type="time" id="start" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-7 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-1"
                                                min="09:00" max="17:00">
                                        </div>
                                        <div class="flex items-center me-2">
                                            <label for="end"

                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-2">End
                                                time</label>
                                            <input type="time" id="end" name="end" min="09:00"
                                                max="18:00" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-7 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="autoRadio">
                        </div>
                        <button type="submit" id="submitButton"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>
                <div class=" ml-12 col-span-1 flex-none justify-center ">
                    @forelse ($records as $record)
                        {{-- @dump($record) --}}
                        <div
                            class=" block max-w-sm px-6 pt-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-5 my-3">
                            <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white ml-0.5">
                                {{ $record->category->name }}
                            </h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400 mb-3 m-0.5">
                                {{ $record->description }}
                            </p>
                            <!-- properties -->
                            <div class="flex items-stretch justify-center">
                                <div class="  p-2 pb-2 b border-t-2">
                                    <p class="text-sm">Start Time</p>
                                    <p class="text-md text-center">{{ $record->start_time }}</p>
                                </div>
                                <div class="p-2 pb-2 border-x-2 b border-t-2">
                                    <p class="text-sm">End Time</p>
                                    <p class="text-md text-center">{{ $record->end_time }}</p>
                                </div>
                                <div class="p-2 pb-2 border-t-2">
                                    <p class="text-sm">Input Late?</p>
                                    <p class="text-md text-center">{{ $record->is_late == 1 ? 'Yes' : 'No' }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div
                            class=" block max-w-sm px-6 pt-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-5 my-5">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hooray! Your task is empty 😀
                            </h5>
                        </div>
                    @endforelse
                </div>
                {{-- ini halaman untuk ketika klik submit yang auto akan diganti dengan ongoing --}}
                <div class=" col-span-2" id="ongoing">
                    <div
                        class=" mx-5 my-3 flex-none justify-center w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white text-center">Ongoing Project</h5>
                        <p class="mb-14 text-base text-gray-500 sm:text-lg dark:text-gray-400 text-center">Your ongoing
                            project Nama</p>
                            <hr>
                        <div class="flex mt-10">
                            <svg class="w-[50px] h-[50px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-3 5h3m-6 0h0m3 4h3m-6 0h0m1-13v4h4V3h-4Z"/>
                              </svg>
                              <p class="text-center text-gray-500 dark:text-gray-400 text-xl mt-2 ml-3" >Ongoing Project</p>
                              <button type="button" name="" class=" ml-3 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">End</button>

                        </div>   
                        

                    </div>



                </div>
            </div>
        @else
            <div
                class="w-50 p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="w-96 mb-5 m-auto">
                    <img src="{{ asset('images/wongko.svg') }}" alt="wonki" class="h-auto w-full">
                </div>
                <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Hola!</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Welcome to Employee Activity
                    Tracker.
                    Please <a href="{{ route('register') }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">register</a> or <a
                        href="{{ route('login') }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">login</a> to
                    continue
                </p>
            </div>
        @endauth
    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    
    

    
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                                                                <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
        function calculateMinDate() {
            const today = new Date();
            const minDay = new Date();
            switch (today.getDay()) {
                case 1:
                    minDay.setDate(today.getDate() - 3);
                    break;
                default:
                    minDay.setDate(today.getDate() - 1);
                    break;
            }
            return minDay;
        }


        $(function() {
            $("#datepicker").datepicker({
                maxDate: new Date(),
                minDate: -1
            });
        });
    </script>
    <script>
        document.getElementById('start').addEventListener('change', function() {
            const startTime = document.getElementById('start').value;
            console.log(startTime);
            document.getElementById('end').min = startTime;
        });
    </script>
    <script>
        $("#manualRadio").hide();
        $(document).ready(function() {
            $("#autoRadioButton").on('click', function() {
                $("#autoRadio").show();
                $("#manualRadio").hide();
            });
            $("#manualRadioButton").on('click', function() {
                $("#manualRadio").show();
                $("#autoRadio").hide();
            });
        });

        $('#submitButton').on('click', function(event) {
            event.preventDefault();
            if ($('#category_label').val() == "") {
                alert('Please fill the category')
                return
            }

            if ($('#description').val() == "") {
                alert('Please fill the description')
                return
            }

            if ($('#manualRadioButton').is(':checked')) {
                if ($('input[name=date]').val() == "") {
                    alert('Please fill the date')
                    return
                }
                if ($('input[name=start]').val() == "") {
                    alert('Please fill the start time')
                    return
                }
                if ($('input[name=end]').val() == "") {
                    alert('Please fill the end time')
                    return
                }
            }

            $('form').submit();
        })
    </script>
</body>



</html>
