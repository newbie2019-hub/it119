
var ctx = document.getElementById('barChart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['JAN', 'FEB', 'MARCH', 'APRIL', 'MAY', 'JUNE'],
    datasets: [
    {
      label: 'Borrowed Books',
      data: [7, 10, 9, 12, 13, 6],
      backgroundColor: 'rgba(117, 121, 231, .8)',
    },
    {
      label: 'Returned Books',
      data: [4, 7, 10, 11, 8, 8],
      backgroundColor: 'rgba(154, 179, 245, .8)',
    }
  ],
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});

var pie = document.getElementById('pieChart').getContext('2d');
var pieChart = new Chart(pie, {
  type: 'doughnut',
  data: {
    datasets: [{
        data: [10, 20, 30, 20],
        backgroundColor: [
          'rgb(52, 152, 219, .8)',
          'rgba(154, 179, 245, .8)',
          'rgba(27, 206, 230, .8)',
          'rgba(27, 64, 230, .8)',
        ],
    }],

    labels: [
        'Novel',
        'Fiction',
        'Biography',
        'Horror',
    ]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});


