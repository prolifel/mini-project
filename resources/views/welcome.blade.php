<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script> -->
    <!-- <script src="/resources/js/app.js"></script> -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
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
                    @endif @endauth
                </div>
            @endif

            @auth
                <div class="grid grid-cols-3 gap-8 w-full mx-10">
                    <div class="bg-gray-200 col-span-2">
                        Testing 1

                        <form class="mx-5 py-3" action="{{ route('record.store') }}" method="POST">
                            @csrf
                            <div class="mb-6">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Activity</label>

                                <label for="category_label"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Label</label>
                                <select id="category_label" name="category_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Choose a ...</option>
                                    <option value="1">Project</option>
                                    <option value="2">Meeting</option>
                                    <option value="3">Unproductive Hour</option>
                                </select>

                            </div>
                            <div class="mb-6">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea style="resize: none" id="description" name="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </textarea>
                            </div>
                            <div class="mb-6">

                                <div class="relative max-w-sm">

                                    <!-- <input type="text"  id="datepicker"> -->
                                    <p>Date: <input type="tezt" id="datepicker"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Select date" name="date"></p>

                                </div>

                            </div>
                            <div class="mb-6">
                                <div class="relative max-w-sm">
                                    <label for="start"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start time</label>
                                    
                                    <input type="time" id="start" name="start" min="09:00" max="18:00">

                                    <label for="end"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End time</label>
                                    
                                    <input type="time" id="end" name="end" min="09:00" max="18:00">
                                </div>
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>

                    </div>
                    <div class="bg-red-300 col-span-1">Testing 2</div>
                </div>
            @else
                <div
                    class="w-50 p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-96 mb-5 m-auto">
                        <img src="{{ asset('images/wongko.svg') }}" alt="wonki" class="h-auto w-full">
                    </div>
                    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Hola!</h5>
                    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Welcome to Employee Activity Tracker.
                        Please <a href="{{ route('register') }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">register</a> or <a
                            href="{{ route('login') }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">login</a> to
                        continue
                    </p>
                    {{-- <div
                class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="currentColor"
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                        </path>
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Download on the</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
                    </div>
                </a>
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                        </path>
                    </svg>
                    <div class="text-left rtl:text-right">
                        <div class="mb-1 text-xs">Get in on</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                    </div>
                </a>
            </div> --}}
                </div>
            @endauth

        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                                    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
            integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            // const datepickerEl = document.getElementById('datepickerId');
            // let isOpen = false;

            // const datepicker = new Datepicker(datepickerEl, {
            //     maxDate: new Date(),
            //     minDate: calculateMinDate(), // Define this function to calculate minDate
            //     isOpen: isOpen,
            //     autohide: true,
            // });

            // datepickerEl.addEventListener('click', () => {
            //     console.log('click inside');
            //     isOpen = !isOpen;
            //     console.log(isOpen);

            //     // Directly control visibility using isOpen
            //     datepicker.isOpen = isOpen;
            //     if (!isOpen) {
            //         console.log('hide');
            //         datepicker.hide();
            //     }
            // });

            // document.body.addEventListener('click', (event) => {
            //     if (!datepickerEl.contains(event.target) && !document.querySelector('.datepicker').contains(event.target)) {
            //         console.log('click outside');
            //         isOpen = false;
            //         console.log(isOpen);
            //         datepicker.isOpen = isOpen;
            //         if (!isOpen) {
            //             console.log('hide');
            //             datepicker.hide();
            //         }
            //     }
            // });

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
            // const startTime = document.getElementById('start').value;
            // document.getElementById('end').min = startTime;
        </script>
    </body>



    </html>
