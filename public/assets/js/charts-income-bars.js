/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const ibarConfig = {
    type: 'bar',
    data: {
        labels: [
            'Заробітна плата',
            'Додатковий дохід',
            'Інвестиційний дохід',
            'Соціальні виплати',
        ],
        datasets: [
            {
                label: 'Заплановані доходи',
                backgroundColor: '#0694a2',
                // borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [20000, 5000, 7000, 3000],
            },
            {
                label: 'Фактичні доходи',
                backgroundColor: '#7e3af2',
                // borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [18000, 7200, 8500, 1800],
            },
        ],
    },
    options: {
        responsive: true,
        legend: {
            display: false,
        },
    },
}

const ibarsCtx = document.getElementById('ibars')
window.myBar = new Chart(ibarsCtx, ibarConfig)
