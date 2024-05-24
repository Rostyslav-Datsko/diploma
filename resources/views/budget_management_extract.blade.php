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
                    Витяг ваших фінансів
                </h2>

                <div class="mb-8 w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Доходи</th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Заробітна плата
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    18000
                                </td>

                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Додатковий дохід
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    7200
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Інвестиційний дохід
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    8500
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Соціальні виплати
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    1800
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-8 mb-8 w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Витрати</th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Житло
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    8750
                                </td>

                            </tr>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Їжа
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    6300
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Транспорт
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    4200
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Одяг та взуття
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    2800
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Медичні послуги та страхування
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    1400
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Розваги
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    1400
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Комунальні послуги
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    1400
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Кредити/позики
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    1400
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Освіта
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    0
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Спорт
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    700
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Відкладення на цільовий фонд
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    1400
                                </td>

                            </tr>                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    Благодійні внески
                                </td>
                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm"></td>
                                <td class="px-4 py-3 text-sm">
                                    700
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
