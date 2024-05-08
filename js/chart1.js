const ctx = document.getElementById('barchart');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['PNS', 'NON PNS'],
          datasets: [
            {
              label: 'Sembunyikan',
              data: [10, 15],
              backgroundColor:[
                '#F4DFB6','#DE8F5F'
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