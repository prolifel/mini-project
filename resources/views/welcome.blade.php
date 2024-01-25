<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
        integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/theme.min.css"
        integrity="sha512-hbs/7O+vqWZS49DulqH1n2lVtu63t3c3MTAn0oYMINS5aT8eIAbJGDXgLt6IxDHcWyzVTgf9XyzZ9iWyVQ7mCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body class="font-sanse antialiased bg-gray-100">
    @include('layouts.nav')
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="mt-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

                @auth
                    <div class=" grid w-full  sm:grid-cols-2 mt-10 sm:gap-4 lg:grid-cols-3 lg:gap-5 ">
                        @if (session('error'))
                            <div id="alert-2"
                                class="col-span-3 flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        @endif
                        @if (session('sukses'))
                            <div id="alert-3"
                                class=" mt-10 flex=none col-span-2 p-4 mx-5 rounded-lg shadow sm:p-4 col-span-3 flex items-center mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                role="alert">
                                <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        @endif
                        <div id="alertQuote"
                            style="display: none;"
                            class="mt-5 flex-none col-span-2 p-4 mx-5 rounded-lg shadow sm:p-4 col-span-3 flex items-center text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Quotes for you 💋</span>
                            <div>
                                <span class="font-medium" id="quotesAuthor"></span> said "<span id="quotesContent"></span>"
                            </div>
                        </div>
                        @if (!is_null($recordOngoing))
                            <div class=" col-span-2" id="ongoing">
                                <div
                                    class="mx-5 mt-0 flex-none w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                    <h5
                                        class="justify-center mb-7 text-3xl font-bold text-gray-900 dark:text-white text-center ">
                                        Ongoing Activity</h5>
                                    <hr>

                                    <div class="flex mt-5">
                                        <div class="">
                                            <svg class="w-[29px] h-[29px] text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M15 4h3c.6 0 1 .4 1 1v15c0 .6-.4 1-1 1H6a1 1 0 0 1-1-1V5c0-.6.4-1 1-1h3m0 3h6m-3 5h3m-6 0h0m3 4h3m-6 0h0m1-13v4h4V3h-4Z" />
                                            </svg>
                                        </div>
                                        <div class="mt-0.5 text-xl">
                                            <p>{{ $recordOngoing->category->name }} </p>
                                        </div>
                                    </div>
                                    <p class="text-justify text-sm text-gray-500 ml-0.5 mt-1">{{ $recordOngoing->date }}</p>
                                    <p class="text-wrap text-justify mt-2 ml-0.5">{{ $recordOngoing->description }}</p>
                                    <br>
                                    <div class="flex mt-3">
                                        <div class="">
                                            <p class="mt-1.5"> Start Time: {{ $recordOngoing->start_time }}</p>
                                        </div>
                                        <div class="mt-0.5 ml-5">
                                            <button type="button" id="endButton" data-record-id="{{ $recordOngoing->id }}"
                                                class="ml-2 px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">End</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div
                                class="col-span-2">
                                <div class="mx-5 my-3 flex-none w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                    <form class="mx-5 py-3" action="{{ route('record.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="category_label"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                a Label</label>
                                            <select id="category_label" name="category_id"
                                                class="bg-gray-50 border border-gray-3 00 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                required>
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
                                                    <input id="autoRadioButton" type="radio" value="auto" name="type"
                                                        checked
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Auto</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input id="manualRadioButton" type="radio" value="manual"
                                                        name="type"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="inline-2-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manual</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="manualRadio" style="display: none;">
                                            <div class="mb-6">
                                                <div class="relative max-w-sm">
                                                    <label for="date"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                                    <div
                                                        class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 mt-7"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
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
                                                            <input type="time" id="start" name="start"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-7 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-1"
                                                                min="{{ $manualStartTime }}" max="17:00">
                                                        </div>
                                                        <script>
                                                            console.log("manual startTime:{{ $manualStartTime }}");
                                                        </script>
                                                        <div class="flex items-center me-2">
                                                            <label for="end"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-2">End
                                                                time</label>
                                                            <input type="time" id="end" name="end"
                                                                min="09:00" max="18:00"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-7 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ml-1">
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
                            </div>
                        @endif
                        <div class="lg:col-span-1 flex-none justify-center col-span-2">
                            <div class=" block lg:max-w-sm px-6 py-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-5 mt-0 md:max-w-full">
                                <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white ml-0.5">
                                    Hi, {{ auth()->user()->name }}
                                </h5>
                                <p class="font-normal text-gray-700 text-sm dark:text-gray-400 mb-1.5 m-0.5">
                                    Here is your today time. Happy working 👋
                                </p>
                                <canvas id="chart"></canvas>
                            </div>
                            @forelse ($records as $record)
                                <div
                                    class=" block lg:max-w-sm px-6 py-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mx-5 my-3 md:max-w-full">
                                    <h5 class=" text-xl font-bold tracking-tight text-gray-900 dark:text-white ml-0.5">
                                        {{ $record->category->name }}
                                    </h5>
                                    <p class="font-normal text-gray-700 text-sm dark:text-gray-400 mb-2 m-0.5">
                                        {{ $record->description }}
                                    </p>
                                    <!-- properties -->
                                    <div class="flex items-stretch lg:justify-center justify-between">
                                        <div class=" p-2 pb-2 b border-t-2 w-full">
                                            <p class="text-sm lg:text-xs lg:text-center">Start Time</p>
                                            <p class="text-md text-center">{{ $record->start_time }}</p>
                                        </div>
                                        <div class="p-2 pb-2 border-x-2 b border-t-2 w-full">
                                            <p class="text-sm lg:text-xs lg:text-center">End Time</p>
                                            <p class="text-md text-center">{{ $record->end_time }}</p>
                                        </div>
                                        <div class="p-2 pb-2 border-t-2 w-full">
                                            <p class="text-sm lg:text-xs lg:text-center text-nowrap">Input Late?
                                            </p>
                                            <p class="text-md text-center">
                                                {{ $record->is_late == 1 ? 'Yes' : 'No' }}</p>
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
                            @if ($isMore)
                                {{-- <div class="block lg:max-w-sm px-6 py-3 mx-5 my-3 md:max-w-full">
                                    <a href="{{ route('record.report') }}"
                                        class="w-full text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                        <span
                                            class="text-center w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Show more...
                                        </span>
                                    </a>
                                </div> --}}
                                <div class="block lg:max-w-sm px-6 py-3  my-3 md:max-w-full">
                                    <a href="{{ route('record.report') }}"
                                        class="w-full block text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Show
                                        more</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @else
                @endauth
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- DatePicker Validation -->
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


    <!-- TimePicker Validation -->
    <script>
        let temp = ("{{ $manualStartTime }}").split(":");
        const minStartTime = temp[0] + ":" + temp[1];
        console.log(minStartTime);


        let maxStartTime = minStartTime > "16:00" ? minStartTime : "16:00";
        let minEndTime = "10:00";
        const maxEndTime = "17:00";

        const startTimer = document.getElementById('start');
        const endTimer = document.getElementById('end');

        const isDayDone = minStartTime >= maxEndTime;

        if ($('#start').length > 0) {
            startTimer.addEventListener('change', function() {
                if (startTimer.value < minStartTime) {
                    alert("Please enter valid start time");
                    startTimer.value = minStartTime;
                }
                if (startTimer.value > maxStartTime) {
                    alert("Please enter valid start time");
                    startTimer.value = maxStartTime;
                }
                minEndTime = startTimer.value;
            });
        }
        if ($('#end').length > 0) {
            endTimer.addEventListener('change', function() {
                if (endTimer.value < minEndTime) {
                    alert("Please enter valid end time");
                    endTimer.value = minEndTime;
                }
                if (endTimer.value > maxEndTime) {
                    alert("Please enter valid end time");
                    endTimer.value = maxEndTime;
                }
            });
        }
    </script>


    <!-- Chart generation -->
    <script>
        let total = <?php echo json_encode($total) ?>;
        let data = [0, 0, 0, 0];
        total.forEach(t => {
            data[t.category_id] = t.total_time;
        });
        data[0] = 8 - data.reduce((acc, curr) => acc + curr, 0);

        new Chart(document.getElementById("chart"), {
            type: "doughnut",
            data: {
                labels: ["Unlabelled", "Project", "Meeting", "Unproductive"],
                datasets: [{
                    label: "Today's Task Summary (in hours)",
                    data: data,
                    backgroundColor: [
                        'rgb(220,220,220)',
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ]
                }, ],
            },
        });
    </script>

    <!-- input validation -->
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

            $.get("https://api.quotable.io/quotes/random", function (data) {
                if (typeof data === 'object' && data !== null) {
                    let quotes = data[0]
                    if (quotes.content == "") {
                        return
                    }

                    $('#quotesAuthor').html(quotes.author)
                    $('#quotesContent').html(quotes.content)
                    $("#alertQuote").slideDown(500);
                }
            })
        });

        $('#endButton').on('click', function(event) {
            Swal.fire({
                title: "Do you want to end this current record?",
                showDenyButton: true,
                confirmButtonText: "Yes",
                denyButtonText: `No`
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post("/api/record/end", {
                        'id': $(this).data('record-id')
                    }, function(data) {
                        if (data.status == 'success') {
                            Swal.fire({
                                title: "Success!",
                                text: data.message,
                                icon: "success"
                            }).then(location.reload());
                            return
                        }

                        Swal.fire({
                            title: "An error occured!",
                            text: data.message,
                            icon: "error"
                        });
                    });
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });

        })

        $('#submitButton').on('click', function(event) {
            event.preventDefault();
            if ($('#category_label').val() == "" || $('#category_label').val() == null) {
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
