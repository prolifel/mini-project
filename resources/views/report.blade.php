<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body class="bg-gray-100">
    {{-- <x-app-layout> --}}
    @include('layouts.nav')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="">
            {{-- <div
                class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"> --}}
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    Out</a>
            </form> --}}
                        {{-- @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif --}}
                    @endauth
                </div>
            @endif
        </div>
        {{-- </div>  --}}
    </div>
    <div class="container ">
        <div class="">
            <form class="mx-10 py-3" action="{{ route('record.detail') }}" method="POST">

                @csrf
                <label for="periode"
                    class="block mt-20  mb-2 ml-1 mt-10 text-sm font-medium text-gray-900 dark:text-white">Period</label>
                <select id="periode" name="periode"
                    class=" mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected disabled>Select a period</option>
                    <option value="1">Daily</option>
                    <option value="2">Monthly</option>

                </select>
                <div class="mb-2" id="bulan"></div>

                <div class="grid w-full justify-end">
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        type="submit">Show</button>
                </div>
            </form>
            <div class="mx-10 py-3">
                <div
                    class=" w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    @if ($records == '')
                        <div class=" rounded-lg max-w-sm mx-auto p-3">
                            <p class="text-center">No Records Selected</p>
                        </div>
                    @else
                        <table id="myTable"
                            class="display w-full text-m text-left rtl:text-right text-gray-500 dark:text-gray-600 ">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3">ID</th>
                                    <th class="px-6 py-3">Description</th>
                                    <th class="px-6 py-3">Date</th>
                                    <th class="px-6 py-3">Start Time</th>
                                    <th class="px-6 py-3">End Time</th>
                                    <th class="px-6 py-3">Is Late</th>
                                    <th class="px-6 py-3">Category ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $r)
                                    <tr>
                                        <td class="px-6 py-4">{{ $r->id }}</td>
                                        <td class="px-6 py-4">{{ $r->description }}</td>
                                        <td class="px-6 py-4">{{ $r->date }}</td>
                                        <td class="px-6 py-4">{{ $r->start_time }}</td>
                                        <td class="px-6 py-4">{{ $r->end_time }}</td>
                                        <td class="px-6 py-4">{{ $r->is_late }}</td>
                                        <td class="px-6 py-4">{{ $r->category_id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- </x-app-layout> --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $("#periode").on('change', function() {
            var id = $(this).val();
            // alert(id);

            if (id == "1") {
                $("#bulan").html("");
            } else {
                $("#bulan").html(`<label for="bulan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Month</label>
                                    <select name="bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="width:100%; height: 46px;" id="bulan">
                                        <option value="" selected disabled>Select a month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>`);
            }

        });
    </script>
</body>

</html>
