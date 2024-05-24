const incomeradarCtx = document.getElementById('incomeradar').getContext('2d');
const incomeradarConfig = {
    type: 'radar',
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
                backgroundColor: 'rgba(6, 148, 162, 0.2)',
                borderColor: '#0694a2',
                borderWidth: 1,
                data: [20000, 5000, 7000, 3000],
            },
            {
                label: 'Фактичні доходи',
                backgroundColor: 'rgba(126, 58, 242, 0.2)',
                borderColor: '#7e3af2',
                borderWidth: 1,
                data: [18000, 7200, 8500, 1800],
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
            },
        },
    },
};

new Chart(incomeradarCtx, incomeradarConfig);
