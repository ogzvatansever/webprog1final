
//fetch('function.php')
//  .then((response) => response.text())
//  .then((data) => {
//    testediyom = JSON.parse(data) ;
//  });
/* globals Chart:false, feather:false */

(() => {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })
var testediyom = [1,2] ;
  //var testediyom ;
fetch('function.php')
  .then((response) => response.text())
  .then((data) => {
    const ctx = document.getElementById('gunlukCiro')
  // eslint-disable-next-line no-unused-vars
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        '',
        '',
        '',
        '',
        '',
        '',
        ''
      ],
      datasets: [{
        data: JSON.parse(data),
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 8,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          boxPadding: 3
        }
      }
    }
  })
  })
})()