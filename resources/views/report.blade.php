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
                    <option value="1">Current day</option>
                    <option value="2">Monthly</option>

                </select>
                <div class="mb-2" id="bulan"></div>

                <div class="grid w-full justify-end">
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
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
                                    <th class="px-6 py-3">No</th>
                                    <th class="px-6 py-3">Activity</th>
                                    <th class="px-6 py-3">Description</th>
                                    <th class="px-6 py-3">Date</th>
                                    <th class="px-6 py-3">Start Time</th>
                                    <th class="px-6 py-3">End Time</th>
                                    <th class="px-6 py-3">Is Late</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $r)
                                    <tr>
                                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4">{{ $r->category->name }}</td>
                                        <td class="px-6 py-4">{{ $r->description }}</td>
                                        <td class="px-6 py-4">{{ $r->date }}</td>
                                        <td class="px-6 py-4">{{ $r->start_time }}</td>
                                        <td class="px-6 py-4">{{ $r->end_time }}</td>
                                        <td class="px-6 py-4">{{ $r->is_late == 1 ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>

            <div>
                @if ($graph == [])
                    <!-- <p>Ini kosong</p> -->
                @else
                    <!-- <p>Ini Grafik</p> -->
                    <div class="mx-10 py-3">
                        <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-3">Summary Chart</h1>
                        <div
                            class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <div class="max-w-sm mx-auto">
                                <canvas id="chart"></canvas>
                            </div>
                        </div>
                    </div>
                @endif
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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

    <script>
        //get data for graph
        let graph = <?php echo json_encode($graph); ?>;

        //get periode
        //periode 1: current day
        //periode 2: monthly
        let periode = <?php echo $periode; ?>;

        if (periode == 1) {
            //get data
            let data = [0, 0, 0, 0];
            graph.forEach(t => {
                data[t.category_id] = t.total_time;
            });
            data[0] = 8 - data.reduce((acc, curr) => acc + curr, 0);

            new Chart(document.getElementById("chart"), {
                type: "doughnut",
                data: {
                    labels: ["Unlabelled", "Project", "Meeting", "Unproductive"],
                    datasets: [{
                        label: "Today's Task Summary",
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
        } else {
            //mapping data for graph
            const testData = {
                projectTime: [0, 0, 0, 0, 0],
                meetingTime: [0, 0, 0, 0, 0],
                unproductiveTime: [0, 0, 0, 0, 0],
            };
            graph.forEach((d) => {
                let category = "";
                switch (d.category_id) {
                    case 1:
                        category = "projectTime";
                        break;
                    case 2:
                        category = "meetingTime";
                        break;
                    case 3:
                        category = "unproductiveTime";
                        break;

                    default:
                        break;
                }
                testData[category][d.week] = d.total_time_week;
            });
            console.log({
                testData
            });
            const labels = ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5"]
            new Chart(document.getElementById("chart"), {
                type: "line",
                data: {
                    labels: labels,
                    datasets: [{
                            label: "Projects",
                            data: testData['projectTime'],
                            borderColor: 'rgb(255, 99, 132)',
                        },
                        {
                            label: "Meeting",
                            data: testData['meetingTime'],
                            borderColor: 'rgb(54, 162, 235)',
                        },
                        {
                            label: "Unproductive",
                            data: testData['unproductiveTime'],
                            borderColor: 'rgb(255, 205, 86)'
                        },
                    ],
                },
            });
        }
    </script>
</body>

</html>
