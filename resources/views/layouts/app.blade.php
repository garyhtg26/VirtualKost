<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/main.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

           <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}

                    {{-- check if there is a notif.success flash session --}}
                    @if (Session::has('notif.success'))
                    <div class="bg-blue-300 mt-2 p-4">
                        {{-- if it's there then print the notification --}}
                        <span class="text-white">{{ Session::get('notif.success') }}</span>
                    </div>
                    @endif
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
        <script>
            // All javascript code in this project for now is just for demo DON'T RELY ON IT

const random = (max = 100) => {
  return Math.round(Math.random() * max) + 20
}

const randomData = () => {
  return [
    random(),
    random(),
    random(),
    random(),
    random(),
    random(),
    random(),
    random(),
    random(),
    random(),
    random(),
    random(),
  ]
}

const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

const cssColors = (color) => {
  return getComputedStyle(document.documentElement).getPropertyValue(color)
}

const getColor = () => {
  return window.localStorage.getItem('color') ?? 'cyan'
}

const colors = {
  primary: cssColors(`--color-${getColor()}`),
  primaryLight: cssColors(`--color-${getColor()}-light`),
  primaryLighter: cssColors(`--color-${getColor()}-lighter`),
  primaryDark: cssColors(`--color-${getColor()}-dark`),
  primaryDarker: cssColors(`--color-${getColor()}-darker`),
}

const barChart = new Chart(document.getElementById('barChart'), {
  type: 'bar',
  data: {
    labels: months,
    datasets: [
      {
        data: randomData(),
        backgroundColor: colors.primary,
        hoverBackgroundColor: colors.primaryDark,
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          gridLines: false,
          ticks: {
            beginAtZero: true,
            stepSize: 50,
            fontSize: 12,
            fontColor: '#97a4af',
            fontFamily: 'Open Sans, sans-serif',
            padding: 10,
          },
        },
      ],
      xAxes: [
        {
          gridLines: false,
          ticks: {
            fontSize: 12,
            fontColor: '#97a4af',
            fontFamily: 'Open Sans, sans-serif',
            padding: 5,
          },
          categoryPercentage: 0.5,
          maxBarThickness: '10',
        },
      ],
    },
    cornerRadius: 2,
    maintainAspectRatio: false,
    legend: {
      display: false,
    },
  },
})

const doughnutChart = new Chart(document.getElementById('doughnutChart'), {
  type: 'doughnut',
  data: {
    labels: ['Oct', 'Nov', 'Dec'],
    datasets: [
      {
        data: [random(), random(), random()],
        backgroundColor: [colors.primary, colors.primaryLighter, colors.primaryLight],
        hoverBackgroundColor: colors.primaryDark,
        borderWidth: 0,
        weight: 0.5,
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      position: 'bottom',
    },

    title: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true,
    },
  },
})

const activeUsersChart = new Chart(document.getElementById('activeUsersChart'), {
  type: 'bar',
  data: {
    labels: [...randomData(), ...randomData()],
    datasets: [
      {
        data: [...randomData(), ...randomData()],
        backgroundColor: colors.primary,
        borderWidth: 0,
        categoryPercentage: 1,
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          display: false,
          gridLines: false,
        },
      ],
      xAxes: [
        {
          display: false,
          gridLines: false,
        },
      ],
      ticks: {
        padding: 10,
      },
    },
    cornerRadius: 2,
    maintainAspectRatio: false,
    legend: {
      display: false,
    },
    tooltips: {
      prefix: 'Users',
      bodySpacing: 4,
      footerSpacing: 4,
      hasIndicator: true,
      mode: 'index',
      intersect: true,
    },
    hover: {
      mode: 'nearest',
      intersect: true,
    },
  },
})

const lineChart = new Chart(document.getElementById('lineChart'), {
  type: 'line',
  data: {
    labels: months,
    datasets: [
      {
        data: randomData(),
        fill: false,
        borderColor: colors.primary,
        borderWidth: 2,
        pointRadius: 0,
        pointHoverRadius: 0,
      },
    ],
  },
  options: {
    responsive: true,
    scales: {
      yAxes: [
        {
          gridLines: false,
          ticks: {
            beginAtZero: false,
            stepSize: 50,
            fontSize: 12,
            fontColor: '#97a4af',
            fontFamily: 'Open Sans, sans-serif',
            padding: 20,
          },
        },
      ],
      xAxes: [
        {
          gridLines: false,
        },
      ],
    },
    maintainAspectRatio: false,
    legend: {
      display: false,
    },
    tooltips: {
      hasIndicator: true,
      intersect: false,
    },
  },
})

let randomUserCount = 0

const usersCount = document.getElementById('usersCount')

const fakeUsersCount = () => {
  randomUserCount = random()
  activeUsersChart.data.datasets[0].data.push(randomUserCount)
  activeUsersChart.data.datasets[0].data.splice(0, 1)
  activeUsersChart.update()
  usersCount.innerText = randomUserCount
}

setInterval(() => {
  fakeUsersCount()
}, 1000)

        </script>
    </body>
</html>
