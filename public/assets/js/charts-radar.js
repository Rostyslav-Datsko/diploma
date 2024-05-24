const radarCtx = document.getElementById('radar');
const radarConfig = {
    type: 'radar',
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
                label: 'Заплановані витрати',
                backgroundColor: 'rgba(6, 148, 162, 0.2)',
                borderColor: '#0694a2',
                borderWidth: 1,
                data: [10500, 7000, 5250, 3500, 1750, 1750, 1750, 1750, 0, 0, 1750, 1750],
            },
            {
                label: 'Фактичні витрати',
                backgroundColor: 'rgba(126, 58, 242, 0.2)',
                borderColor: '#7e3af2',
                borderWidth: 1,
                data: [8750 , 6300, 4200, 2800 , 1400 , 1400, 1400, 700, 0, 700, 1400, 700],
            },
        ],
    },
    options: {
        responsive: true,
        legend: {
            display: true
        },
    },
};

const radarChart = new Chart(radarCtx, radarConfig);
