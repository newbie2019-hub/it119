const data = {
  labels: ["JAN", "FEB", "MARCH", "APRIL", "MAY", "JUNE"],
  datasets: [
    {
      label: "Borrowed Books",
      data: [7, 10, 9, 12, 13, 6],
      backgroundColor: "rgba(117, 121, 231, .8)",
    },
    {
      label: "Returned Books",
      data: [4, 7, 10, 11, 8, 8],
      backgroundColor: "rgba(154, 179, 245, .8)",
    },
  ],
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
    maintainAspectRatio: false
  },
}

module.exports = {data, options}