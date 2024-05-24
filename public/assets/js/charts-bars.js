/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const barConfig = {
  type: 'bar',
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
        backgroundColor: '#0694a2',
        // borderColor: window.chartColors.red,
        borderWidth: 1,
          data: [10500, 7000, 5250, 3500, 1750, 1750, 1750, 1750, 0, 0, 1750, 1750],
      },
      {
        label: 'Фактичні витрати',
        backgroundColor: '#7e3af2',
        // borderColor: window.chartColors.blue,
        borderWidth: 1,
          data: [8750 , 6300, 4200, 2800 , 1400 , 1400, 1400, 700, 0, 700, 1400, 700],
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

const barsCtx = document.getElementById('bars')
window.myBar = new Chart(barsCtx, barConfig)
