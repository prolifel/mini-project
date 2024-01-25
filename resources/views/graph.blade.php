<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - Report Graph</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            </h2>
        </x-slot>


            <div class="flex-none justify-center py-3  ">
                <div style="width: 800px" class=" mx-auto">
                    <canvas id="acquisitions"></canvas>
                </div>
            </div>
            <div class="flex-none justify-center py-3 ">
                <div style="width: 200px" class="mx-auto">
                    <canvas id="chart2"></canvas>
                </div>
            </div>
    </x-app-layout>


    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @if ($records!=[])
        <script>
            (async function () {
                const projectData = [
                    { year: 2010, count: 11 },
                    { year: 2011, count: 23 },
                    { year: 2012, count: 50 },
                    { year: 2013, count: 24 },
                    { year: 2014, count: 33 },
                    { year: 2015, count: 67 },
                    { year: 2016, count: 57 },
                ];
                const meetingData = [
                    { year: 2010, count: 14 },
                    { year: 2011, count: 20 },
                    { year: 2012, count: 17 },
                    { year: 2013, count: 97 },
                    { year: 2014, count: 21 },
                    { year: 2015, count: 37 },
                    { year: 2016, count: 75 },
                ];
                const unproductiveData = [
                    { year: 2010, count: 89 },
                    { year: 2011, count: 78 },
                    { year: 2012, count: 90 },
                    { year: 2013, count: 39 },
                    { year: 2014, count: 91 },
                    { year: 2015, count: 65 },
                    { year: 2016, count: 2 },
                ];

                new Chart(document.getElementById("acquisitions"), {
                    type: "line",
                    data: {
                        labels: projectData.map((row) => row.year),
                        datasets: [
                            {
                                label: "Projects",
                                data: projectData.map((row) => row.count),
                            },
                            {
                                label: "Meeting",
                                data: meetingData.map((row) => row.count),
                            },
                            {
                                label: "Unproductive",
                                data: unproductiveData.map((row) => row.count),
                            },
                        ],
                    },
                });
                new Chart(document.getElementById("chart2"), {
                    type: "doughnut",
                    data: {
                        labels: ["Project", "Unproductive", ],
                        datasets: [
                            {
                                label: "Projects",
                                data: projectData.map((row) => row.count),
                            },
                        ],
                    },
                });
            })();
        </script>
        @endif
</body>

</html>
