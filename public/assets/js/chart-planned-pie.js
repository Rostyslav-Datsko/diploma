/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const ppieConfig = {
    type: 'pie', // Changed from 'doughnut' to 'pie'
    data: {
        labels: [
            'Житло',
            'Їжа',
            'Транспорт',
            'Одяг та взуття',
            'Медичні послуги та страхування',
            'Розваги',
            'Комунальні послуги',
            'Кредити/позики',
            'Освіта',
            'Спорт',
            'Відкладення на цільовий фонд',
            'Благодійні внески',
        ],
        datasets: [
            {
                data: [10500, 7000, 5250, 3500, 1750, 1750, 1750, 1750, 0, 0, 1750, 1750],
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: [  '#7e3af2', '#0694a2', '#1c64f2',
                    '#ff7f50', '#ffd700', '#00ff00',
                    '#ff1493', '#8a2be2', '#ff4500',
                    '#4b0082', '#00ced1', '#ffc0cb',
                    '#00fa9a']
                ,


                label: 'Dataset 1',
            },
        ],

    },
    options: {
        responsive: true,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         */
        legend: {
            display: false,
        },
    },
}

// change this to the id of your chart element in HTML
const ppieCtx = document.getElementById('ppie');
window.myPie = new Chart(ppieCtx, ppieConfig);
