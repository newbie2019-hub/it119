const data = {
  labels: ["Novel", "Fiction", "Biography", "Horror"],
  datasets: [{
    data: [10, 20, 30, 20],
    backgroundColor: [
      "rgb(52, 152, 219, .8)",
      "rgba(154, 179, 245, .8)",
      "rgba(27, 206, 230, .8)",
      "rgba(27, 64, 230, .8)",
    ],
  }]
}

const options = {
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
    responsive: true,
    maintainAspectRatio: true
  },
}
module.exports = { data, options }