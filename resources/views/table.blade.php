<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body>
    {{-- <div class="container mx-auto mt-10">
        <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Report</h1>
            <table id="myTable"
                class="display w-full text-m text-left rtl:text-right text-gray-500 dark:text-gray-600 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
        </div>

    </div> --}}
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
               
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table id="myTable"
                        class="display w-full text-m text-left rtl:text-right text-gray-500 dark:text-gray-600 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>





    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
