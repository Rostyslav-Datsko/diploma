/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const pipieConfig = {
    type: 'pie', // Changed from 'doughnut' to 'pie'
    data: {
        labels: [
            'Заробітна плата',
            'Додатковий дохід',
            'Інвестиційний дохід',
            'Соціальні виплати',
        ],
        datasets: [
            {
                data: [20000, 5000, 7000, 3000],
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                backgroundColor: [  '#7e3af2', '#0694a2', '#1c64f2',
                    '#ff7f50', ]
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
const pipieCtx = document.getElementById('pipie');
window.myPie = new Chart(pipieCtx, pipieConfig);
