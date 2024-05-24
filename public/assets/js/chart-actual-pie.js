/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const apieConfig = {
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
                data: [8750 , 6300, 4200, 2800 , 1400 , 1400, 1400, 700, 0, 700, 1400, 700],
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
const apieCtx = document.getElementById('apie');
window.myPie = new Chart(apieCtx, apieConfig);
