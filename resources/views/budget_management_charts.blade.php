<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Windmill Dashboard</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <link rel="stylesheet" href="./assets/css/background-color-options.css" />
    <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
    <script src="./assets/js/charts-bars.js" defer></script>

    <script src="./assets/js/charts-radar.js" defer></script>
    <script src="./assets/js/chart-actual-pie.js" defer></script>
    <script src="./assets/js/chart-planned-pie.js" defer></script>
    <script src="./assets/js/charts-income-radar.js" defer></script>

    <script src="./assets/js/chart-actual-income-pie.js" defer></script>
    <script src="./assets/js/chart-planned-income-pie.js" defer></script>
    <script src="./assets/js/charts-income-bars.js" defer></script>

</head>
<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
>
    <!-- Desktop sidebar -->
    @include('parts.desktop_sidebar')
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    @include('parts.backdrop')
    <div class="flex flex-col flex-1 w-full">
        @include('parts.header')
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Графіки ваших доходів
                </h2>
                <div class="grid gap-6 mb-8 md:grid-cols-2">
                    <!-- Doughnut/Pie chart -->
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Заплановані витрати
                        </h4>
                        <canvas id="pipie" width="572" height="286" style="display: block; width: 572px; height: 286px;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-01 rounded-full"></span>
                                <span>Заробітна плата</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-02 rounded-full"></span>
                                <span>Додатковий дохід</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-03 rounded-full"></span>
                                <span>Інвестиційний дохід</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-04 rounded-full"></span>
                                <span>Соціальні виплати</span>
                            </div>
                        </div>

                    </div>
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Фактичні доходи
                        </h4>
                        <canvas id="aipie" width="572" height="286" style="display: block; width: 572px; height: 286px;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-01 rounded-full"></span>
                                <span>Заробітна плата</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-02 rounded-full"></span>
                                <span>Додатковий дохід</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-03 rounded-full"></span>
                                <span>Інвестиційний дохід</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-04 rounded-full"></span>
                                <span>Соціальні виплати</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container px-6 mx-auto grid">

                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                        <canvas id="ibars" width="572" height="286" style="display: block; width: 572px; height: 286px;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                                <span>Заплановані витрати</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>Фактичні витрати</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-6 mt-8 mb-8 mx-auto grid">
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Радар доходів (за планом та фактичних)
                        </h4>
                        <canvas id="incomeradar" width="572" height="286" style="display: block;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                                <span>Заплановані доходи</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>Фактичні доходи</span>
                            </div>
                        </div>
                    </div>
                </div>


                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Графіки ваших витрат
                </h2>
                <div class="grid gap-6 mb-8 md:grid-cols-2">
                    <!-- Doughnut/Pie chart -->
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Заплановані витрати
                        </h4>
                        <canvas id="ppie" width="572" height="286" style="display: block; width: 572px; height: 286px;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-01 rounded-full"></span>
                                <span>Житло</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-02 rounded-full"></span>
                                <span>Їжа</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-03 rounded-full"></span>
                                <span>Транспорт</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-04 rounded-full"></span>
                                <span>Одяг та взуття</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-05 rounded-full"></span>
                                <span>Медичні послуги та страхування</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-06 rounded-full"></span>
                                <span>Розваги</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-07 rounded-full"></span>
                                <span>Комунальні послуги</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-08 rounded-full"></span>
                                <span>Кредити/позики</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-09 rounded-full"></span>
                                <span>Освіта</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-10 rounded-full"></span>
                                <span>Спорт</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-11 rounded-full"></span>
                                <span>Відкладення на цільовий фонд</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-12 rounded-full"></span>
                                <span>Благодійні внески</span>
                            </div>
                        </div>

                    </div>
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Фактичні витрати
                        </h4>
                        <canvas id="apie" width="572" height="286" style="display: block; width: 572px; height: 286px;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-01 rounded-full"></span>
                                <span>Житло</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-02 rounded-full"></span>
                                <span>Їжа</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-03 rounded-full"></span>
                                <span>Транспорт</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-04 rounded-full"></span>
                                <span>Одяг та взуття</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-05 rounded-full"></span>
                                <span>Медичні послуги та страхування</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-06 rounded-full"></span>
                                <span>Розваги</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-07 rounded-full"></span>
                                <span>Комунальні послуги</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-08 rounded-full"></span>
                                <span>Кредити/позики</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-09 rounded-full"></span>
                                <span>Освіта</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-10 rounded-full"></span>
                                <span>Спорт</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-11 rounded-full"></span>
                                <span>Відкладення на цільовий фонд</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bcl-12 rounded-full"></span>
                                <span>Благодійні внески</span>
                            </div>
                    </div>

                    </div>
                </div>
                <div class="container px-6 mx-auto grid">

                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                        <canvas id="bars" width="572" height="286" style="display: block; width: 572px; height: 286px;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                                <span>Заплановані витрати</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>Фактичні витрати</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-6 mt-8 mb-8 mx-auto grid">

                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                            Радар витрат (за планом та фактичних)
                        </h4>
                        <canvas id="radar" width="572" height="286" style="display: block;" class="chartjs-render-monitor"></canvas>
                        <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                            <!-- Chart legend -->
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                                <span>Заплановані витрати</span>
                            </div>
                            <div class="flex items-center">
                                <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                                <span>Фактичні витрати</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
