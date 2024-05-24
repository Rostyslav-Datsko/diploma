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
    <script src="./assets/js/select-minor-category.js" defer></script>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }
    </style>
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
                    Додати нову операцію
                </h2>



                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Сума операції</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Введіть суму операції" type="number">
                    </label>

                    <div class="mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Виберіть типаж операції
                    </span>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="expenses">
                                                <span class="ml-2">Витрати</span>
                                            </label>
                                            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="income">
                                                <span class="ml-2">Доходи</span>
                                            </label>
                                        </div>
                                    </div>

                                    <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Виберіть категорію
                    </span>
                        <select id="categorySelect" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <!-- Options will be dynamically inserted here -->
                        </select>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Дата</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Введіть суму операції" type="date">
                    </label>


                    <label class="block mt-4 mb-8 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Коментарій</span>
                        <textarea class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Введіть коментарій до витрат"></textarea>
                    </label>

                    <div class="flex flex-col flex-wrap mb-4 space-y-4 md:flex-row md:items-end md:space-x-4">
                        <div>
                            <button class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Затвердити операцію
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
