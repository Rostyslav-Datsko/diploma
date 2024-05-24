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

    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    ></div>

    <div class="flex flex-col flex-1 w-full">
        @include('parts.header')
        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Створіть ваш бюджет:
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        id="salary"
                        type="number"
                        placeholder="Введіть ім'я бюджету"
                        required
                    />
                </h2>
                <form action="">
                    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        Доходи
                    </h4>
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Заробітна плата (грн)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="salary"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Додатковий дохід (бонуси, премії, підробіток) (грн)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="additional_income"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Інвестиційний дохід (дивіденди, відсотки з вкладів) (грн)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="investment_income"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Соціальні виплати (допомоги, стипендії) (грн)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="social_benefits"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                    </div>


                    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        Витрати
                    </h4>
                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Житло (оренда/кредит за житло, комунальні послуги, ремонт)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="housing_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Їжа (продукти харчування, ресторани, доставка їжі)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="food_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Транспорт (паливо, обслуговування авто, громадський транспорт, таксі)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="transport_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Одяг та взуття</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="clothing_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Медичні послуги та страхування</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="medical_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Розваги (кіно, концерти, подорожі)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="entertainment_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Комунальні послуги (електроенергія, вода, газ)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="utilities_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Кредити/позики</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="credit_loans_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Освіта (курси, навчання, підручники)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="education_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Спорт (фітнес-центри, спортивне спорядження)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="sports_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Відкладення на цільовий фонд (подорожі, купівля авто, купівля житла, пенсійний накопичувальний фонд тощо)</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="savings_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                        <label class="block text-sm py-2">
                            <span class="text-gray-700 dark:text-gray-400">Благодійні внески</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                id="charitable_expenses"
                                type="number"
                                placeholder=""
                                required
                            />
                        </label>
                    </div>

                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <h2
                            class="my-6 text-xl text-gray-700 dark:text-gray-400"
                        >
                            Підрахунок балансу в бюджеті (доходи - витрати):
                        </h2>
                        <label class="block text-sm">
                            <span id="income_sum" class="text-xl text-green-600 dark:text-green-400">
                                +22 000
                            </span>
                        </label>
                        <label class="block text-sm">
                            <span id="expenses_sum" class="text-xl text-red-600 dark:text-red-400">
                                -15 000
                            </span>
                        </label>
                        <hr class="py-3"/>
                        <label class="block text-sm">
                            <span id="budget_balance" class="text-xl text-green-600 dark:text-green-400">
                                +7 000
                            </span>
                        </label>
                    </div>

                    <div class="flex flex-col flex-wrap mb-4 space-y-4 md:flex-row md:items-end md:space-x-4">
                        <div>
                            <button class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Затвердити бюджет
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </main>
    </div>
</div>

<script src="/js/new_budget_calculation.js"></script>
</body>
</html>
