const ctx2 = document.getElementById('doughnut');

      new Chart(ctx2, {
        type: 'doughnut',
        data: {
          labels: ['Laki-laki', 'Perempuan'],
          datasets: [
            {
              label: 'jumlah',
              data: [126, 126],
              backgroundColor:[
                '#265073','#9A4444'
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });