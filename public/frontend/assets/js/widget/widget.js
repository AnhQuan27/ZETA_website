function getThisMonth() {
  const month = new Date();
  return month.getMonth();
}

function totalCustomersChart() {
  const ctx = document.getElementById('totalCustomersChart').getContext('2d');
  let totalCustomersChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 45, 32, 70],
          tension: 0.25,
          borderColor: "#36A2EB",
          backgroundColor: "#36A2EB",
          borderWidth: 2,
          pointRadius: 0,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: 'index',
        intersect: false,
        axis: 'x',
      },
      plugins: {
        legend: {
          display: false,
        },
        title: {
          display: false,
        },
      },
      scales: {
        x: {
          display: false,
        },
        y: {
          display: false,
        }
      },
    },
  })
}

function totalSalesChart() {
  const ctx = document.getElementById('totalSalesChart').getContext('2d');
  let totalSalesChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          data: [22, 19, 30, 47, 32, 44, 34, 55, 41, 69, 45, 78],
          tension: 0.25,
          borderColor: "#FF9F40",
          backgroundColor: "#FF9F40",
          borderWidth: 2,
          pointRadius: 0,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: 'index',
        intersect: false,
        axis: 'x',
      },
      plugins: {
        legend: {
          display: false,
        },
        title: {
          display: false,
        },
      },
      scales: {
        x: {
          display: false,
        },
        y: {
          display: false,
        }
      },
    },
  })
}

function totalProfitsChart() {
  const ctx = document.getElementById('totalProfitsChart').getContext('2d');
  let totalProfitsChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          data: [22, 19, 30, 47, 32, 44, 34, 55, 41, 69, 35, 90],
          tension: 0.25,
          borderColor: "#9966FF",
          backgroundColor: "#9966FF",
          borderWidth: 2,
          pointRadius: 0,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: 'index',
        intersect: false,
        axis: 'x',
      },
      plugins: {
        legend: {
          display: false,
        },
        title: {
          display: false,
        },
      },
      scales: {
        x: {
          display: false,
        },
        y: {
          display: false,
        }
      },
    },
  })
}

function totalOrdersChart() {
  const ctx = document.getElementById('totalOrdersChart').getContext('2d');
  let totalOrdersChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25, 17, 87],
          tension: 0.25,
          borderColor: "#4BC0C0",
          backgroundColor: "#4BC0C0",
          borderWidth: 2,
          pointRadius: 0,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: 'index',
        intersect: false,
        axis: 'x',
      },
      plugins: {
        legend: {
          display: false,
        },
        title: {
          display: false,
        },
      },
      scales: {
        x: {
          display: false,
        },
        y: {
          display: false,
        }
      },
    },
  })
}

function revenueChart() {
  const ctx = document.getElementById('revenueChart').getContext('2d');
  let revenueChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
          {
            label: 'Dataset 1',
            data: [16800, 16800, 15500, 14800, 15500, 17000, 21000, 16000, 15000,17000, 14000, 17000,],
            tension: 0.3,
            borderColor: "#1b55e2",
            backgroundColor: "rgba(27, 85, 226, 0.05)",
            fill: true,
            pointRadius: 0,
            borderWidth: 2,
          },
          {
            label: 'Dataset 2',
            data: [16500, 17500, 16200, 17300, 16000, 21500, 16000, 17000, 16000, 19000, 18000, 19000,],
            tension: 0.3,
            borderColor: "#e7515a",
            backgroundColor: "rgba(231, 81, 90, 0.05)",
            fill: true,
            pointRadius: 0,
            borderWidth: 2,
          }
        ]
      },
      options: {
        responsive: true,
        interaction: {
          mode: 'index',
          intersect: false,
        },
        plugins: {
          legend: {
            position: 'top',
            align: 'end',
            labels: {
              usePointStyle: true,
              pointStyle: "circle",
            }
          },
          title: {
            display: true,
            text: 'Total profit',
            align: 'start',
            font: {
              size: '18',
              color: 'black',
            }
          },
          subtitle: {
              display: true,
              text: '$10,840',
              align: 'start',
              color : '#1b55e2',
              font: {
                size: '16',
                color: 'red',
              }
          }
        },
        scales: {
          x: {
              grid: {
                display: true,
              },
              border: {
                dash: [5,5],
              },
          },
          y: {
              grid: {
                display: false 
              },
              ticks: {
                callback: function(value, index, values) {
                  return value / 1000 + 'k';
                }
              }
          }
        }
      },
  })
}

function salesCatChart() {
    const doughnutLabel = {
        id: 'doughnutLabel',
        beforeDatasetsDraw(chart, args, pluginOptions) {
            const {ctx, data} = chart;
            ctx.save();
            const xCoor = chart.getDatasetMeta(0).data[0].x;
            const yCoor = chart.getDatasetMeta(0).data[0].y;
            ctx.font = 'bold 30px sans-serif';
            ctx.fillStyle = 'black';
            ctx.textAlign = 'center';
            ctx.fillText('Total: 1992', xCoor, yCoor);
        }
    };

    const ctx = document.getElementById('salesChartByCategory').getContext('2d')
    let salesCatChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Sandal', 'Shirt', 'Hoodie', 'Shoes'],
            datasets: [
                {
                    data: [985, 737, 270, 453],
                    backgroundColor: [
                      "rgba(54, 162, 235,1)",
                      "rgba(255, 99, 132,1)",
                      "rgba(255, 205, 86,1)",
                      "rgba(153, 102, 255,1)",
                    ],
                    borderWidth: 2,
                    cutout: '80%',
                }
            ]
        },
        options: {
            responsive: true,

            plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    usePointStyle: true,
                    pointStyle: "circle",
                    padding: 20,
                }
            },
            title: {
                display: false,
            }
            }
        },
        plugins: [doughnutLabel],
    })
}

function dailySalesChart() {
  const ctx = document.getElementById('dailySalesChart').getContext('2d');
  let dailySalesChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"],
      datasets: [
        {
          label: "Sales",
          data: [44, 55, 41, 67, 22, 43, 21],
          backgroundColor: "#FF9020",
          barThickness: 20,
        },
        {
          label: "Last Week",
          data: [13, 23, 20, 8, 13, 27, 33],
          backgroundColor: "#C9CBCF",
          barThickness: 20,
        }
      ],
    },
    options: {
      plugins: {
        title: {
          display: false,
        },
        legend: {
          display: false,
        }
      },
      responsive: true,
      scales: {
        x: {
          // display: false,
          stacked: true,
          grid: {
            drawOnChartArea: false,
            display: false,
          },
        },
        y: {
          // beginAtZero: true,
          display: false,
          stacked: true,
          grid: {
            display: false,
          },
        }
      }
    },
  });
}

function weeklyReceiptChart() {
  const ctx = document.getElementById('weeklyReceiptChart').getContext('2d');
  let weeklyReceiptChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
      datasets: [
        {
          label: "Sandal",
          data: [44, 55, 41, 67],
          color: "rgba(54, 162, 235,1)",
          borderColor: "rgba(54, 162, 235,1)",
          backgroundColor: "rgba(54, 162, 235,1)",
          tension: 0.2,
          pointRadius: 0,
          borderWidth: 2,
        },
        {
          label: "Shirt",
          data: [13, 23, 20, 8],
          color: "rgba(255, 99, 132,1)",
          borderColor: "rgba(255, 99, 132,1)",
          backgroundColor: "rgba(255, 99, 132,1)",
          tension: 0.2,
          pointRadius: 0,
          borderWidth: 2,
        },

        {
          label: "Hoodie",
          data: [34, 13, 26, 28],
          color: "rgba(255, 205, 86,1)",
          borderColor: "rgba(255, 205, 86,1)",
          backgroundColor: "rgba(255, 205, 86,1)",
          tension: 0.2,
          pointRadius: 0,
          borderWidth: 2,
        },
        {
          label: "Shoes",
          data: [22, 15, 32, 21],
          color: "rgba(153, 102, 255,1)",
          borderColor: "rgba(153, 102, 255,1)",
          backgroundColor: "rgba(153, 102, 255,1)",
          tension: 0.2,
          pointRadius: 0,
          borderWidth: 2,
        }
      ],
    },
    options: {
      responsive: true,
      interaction: {
        mode: 'index',
        intersect: false,
      },
      plugins: {
        legend: {
          position: 'right',
          align: 'center',
          labels: {
            usePointStyle: true,
            pointStyle: "circle",
            padding: 20,
          }
        },
        title: {
          display: false,
        },
      },
      scales: {
        x: {
            grid: {
              display: true,
            },
            border: {
              dash: [5,5],
            },
        },
        y: {
          display: false,
            grid: {
              display: false 
            },
        }
      }
    },
  });
}

function inventoryByCategoryChart() {
  const ctx = document.getElementById('inventoryByCategoryChart').getContext('2d');
  let inventoryByCategoryChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Sandal', 'Shirt', 'Hoodie', 'Shoes'],
      datasets: [
        {
          label: 'Inventory',
          data: [1234, 567, 890, 432],
          backgroundColor: [
            "rgba(54, 162, 235,1)",
            "rgba(255, 99, 132,1)",
            "rgba(255, 205, 86,1)",
            "rgba(153, 102, 255,1)",
          ],
        },
      ],
    },
    options: {
      maintainAspectRatio : false,
      responsive: true,
      plugins: {
        legend: {
          // display: false,
          position: 'right',
          labels: {
            usePointStyle: true,
            pointStyle: "circle",
            padding: 20,
          }
        },
        title: {
          display: false,
        }
      }
    },
  });
}