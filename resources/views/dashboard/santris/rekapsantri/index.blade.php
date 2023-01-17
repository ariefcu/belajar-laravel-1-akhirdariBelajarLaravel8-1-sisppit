@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
  </div>

  {{-- <h6>Santri: {{ $totalsantri }} | Banin: {{ $totalsantribanin }} | Banat: {{ $totalsantribanat }} || Santri MA: {{ $totalsantrima }} | Banin: {{ $totalsantribaninma }} | Banat: {{ $totalsantribanatma }} || Santri MTs: {{ $totalsantrimts }} | Banin: {{ $totalsantribaninmts }} | Banat: {{ $totalsantribanatmts }}</h6>
  <h6>Yatim: {{ $totalyatim }} | Banin: {{ $totalyatimbanin }} | Banat: {{ $totalyatimbanat }} || MA: {{ $totalyatimma }} | Banin: {{ $totalyatimbaninma }} | Banat: {{ $totalyatimbanatma }} || MTs: {{ $totalyatimmts }} | Banin: {{ $totalyatimbaninmts }} | Banat: {{ $totalyatimbanatmts }} || Non: {{ $totalnonyatim }} | Banin: {{ $totalnonyatimbanin }} | Banat: {{ $totalnonyatimbanat }}</h6>
  <h6>Asrama: {{ $totalasrama }} | Banin: {{ $totalasramabanin }} | Banat: {{ $totalasramabanat }} || MA: {{ $totalasramama }} | Banin: {{ $totalasramabaninma }} | Banat: {{ $totalasramabanatma }} || MTs: {{ $totalasramamts }} | Banin: {{ $totalasramabaninmts }} | Banat: {{ $totalasramabanatmts }} || Non: {{ $totalnonasrama }} | Banin: {{ $totalnonasramabanin }} | Banat: {{ $totalnonasramabanat }}</h6>
  <h6>AGK: {{ $totalagk }} | Banin: {{ $totalagkbanin }} | Banat: {{ $totalagkbanat }} || MA: {{ $totalagkma }} | Banin: {{ $totalagkbaninma }} | Banat: {{ $totalagkbanatma }} || MTs: {{ $totalagkmts }} | Banin: {{ $totalagkbaninmts }} | Banat: {{ $totalagkbanatmts }} || Non: {{ $totalnonagk }} | Banin: {{ $totalnonagkbanin }} | Banat: {{ $totalnonagkbanat }}</h6> --}}

  <div class="panel">
    <div id="rekapSantri"></div>
  </div>

  @section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    {{-- bentuk chartnya Basic Column --}}
    {{-- <script>
      Highcharts.chart('rekapSantri', {
        chart: {
            // type yang tersedia : column, pie, line, area, bar, dll
            type: 'column'
        },
        title: {
            text: 'Rekap Santri Chart'
        },
        subtitle: {
            text: 'Total, per Jenis Kelamin dan per Marhalah'
        },
        xAxis: {
            categories: [
                'Total Santri',
                'Total Yatim',
                'Total Asrama',
                'Total AGK',

            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            // pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                // '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Total',
            data: [{{ $totalsantri }}, {{ $totalyatim }}, {{ $totalasrama }}]
    
        }, {
            name: 'Banin',
            data: [{{ $totalsantribanin }}, {{ $totalnonyatim }}, 98.5]
    
        }, {
            name: 'Banat',
            data: [{{ $totalsantribanat }}, {{ $totalnonasrama }}, 39.3]
    
        }]
    });  
  </script> --}}

    {{-- bentuk chartnya Stacked Column --}}
    {{-- <script>
      // Data retrieved from:
      // - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
      // - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
      // - https://www.uefa.com/uefachampionsleague/history/winners/
      Highcharts.chart('rekapSantri', {
          chart: {
              type: 'column'
          },
          title: {
              text: 'Rekap Santri Chart',
              align: 'left'
          },
          xAxis: {
              categories: ['Total Santri', 'Total Yatim', 'Total Non Yatim', 'Total Asrama', 'Total Non Asrama', 'Total AGK', 'Total Non AGK']
          },
          yAxis: {
              min: 0,
              title: {
                  text: 'Jumlah'
              },
              stackLabels: {
                  enabled: true,
                  style: {
                      fontWeight: 'bold',
                      color: ( // theme
                          Highcharts.defaultOptions.title.style &&
                          Highcharts.defaultOptions.title.style.color
                      ) || 'gray',
                      textOutline: 'none'
                  }
              }
          },
          legend: {
              align: 'left',
              x: 70,
              verticalAlign: 'top',
              y: 70,
              floating: true,
              backgroundColor:
                  Highcharts.defaultOptions.legend.backgroundColor || 'white',
              borderColor: '#CCC',
              borderWidth: 1,
              shadow: false
          },
          tooltip: {
              headerFormat: '<b>{point.x}</b><br/>',
              pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
          },
          plotOptions: {
              column: {
                  stacking: 'normal',
                  dataLabels: {
                      enabled: true
                  }
              }
          },
          series: [{
              name: 'Banin',
              data: [{{ $totalsantribanin }}, {{ $totalyatimbanin }}, {{ $totalnonyatimbanin }}, {{ $totalasramabanin }}, {{ $totalnonasramabanin }}, {{ $totalagkbanin }}, {{ $totalnonagkbanin }}]
          }, {
              name: 'Banat',
              data: [{{ $totalsantribanat }}, {{ $totalyatimbanat }}, {{ $totalnonyatimbanat }}, {{ $totalasramabanat }}, {{ $totalnonasramabanat }}, {{ $totalagkbanat }}, {{ $totalnonagkbanat }}]
          }]
      });
    </script> --}}

    {{-- bentuk chartnya Stacked and grouped column --}}
    <script>
      // Data retrieved from https://en.wikipedia.org/wiki/Winter_Olympic_Games
      Highcharts.chart('rekapSantri', {
      
          chart: {
              type: 'column'
          },
      
          title: {
              text: 'Rekap Santri, grouped by Santri PIT, MA, MTs, MI dan RA'
          },
      
          xAxis: {
              categories: ['Santri PIT', 'Santri MA', 'Santri MTs', 'Santri MI', 'Santri RA']
          },
      
          yAxis: {
              allowDecimals: false,
              min: 0,
              title: {
                  text: 'Jumlah'
              }
          },
      
          tooltip: {
              formatter: function () {
                  return '<b>' + this.x + '</b><br/>' +
                      this.series.name + ': ' + this.y + '<br/>' +
                      'Total: ' + this.point.stackTotal;
              }
          },
      
          plotOptions: {
              column: {
                  stacking: 'normal'
              }
          },
      
          series: [{
              name: 'Santri Banin',
              data: [{{ $totalsantribanin }}, {{ $totalsantribaninma }}, {{ $totalsantribaninmts }}, {{ $totalsantribaninmi }}, {{ $totalsantribaninra }}],
              stack: 'Total Santri'
          }, {
              name: 'Santri Banat',
              data: [{{ $totalsantribanat }}, {{ $totalsantribanatma }}, {{ $totalsantribanatmts }}, {{ $totalsantribanatmi }}, {{ $totalsantribanatra }}],
              stack: 'Total Santri'
          }, {
              name: 'Yatim Banin',
              data: [{{ $totalyatimbanin }}, {{ $totalyatimbaninma }}, {{ $totalyatimbaninmts }}, {{ $totalyatimbaninmi }}, {{ $totalyatimbaninra }}],
              stack: 'Santri Yatim'
          }, {
              name: 'Yatim Banat',
              data: [{{ $totalyatimbanat }}, {{ $totalyatimbanatma }}, {{ $totalyatimbanatmts }}, {{ $totalyatimbanatmi }}, {{ $totalyatimbanatra }}],
              stack: 'Santri Yatim'
          }, {
              name: 'Asrama Banin',
              data: [{{ $totalasramabanin }}, {{ $totalasramabaninma }}, {{ $totalasramabaninmts }}, {{ $totalasramabaninmi }}, {{ $totalasramabaninra }}],
              stack: 'Santri Asrama'
          }, {
              name: 'Asrama Banat',
              data: [{{ $totalasramabanat }}, {{ $totalasramabanatma }}, {{ $totalasramabanatmts }}, {{ $totalasramabanatmi }}, {{ $totalasramabanatra }}],
              stack: 'Santri Asrama'
          }, {
              name: 'AGK Banin',
              data: [{{ $totalagkbanin }}, {{ $totalagkbaninma }}, {{ $totalagkbaninmts }}, {{ $totalagkbaninmi }}, {{ $totalagkbaninra }}],
              stack: 'Santri AGK'
          }, {
              name: 'AGK Banat',
              data: [{{ $totalagkbanat }}, {{ $totalagkbanatma }}, {{ $totalagkbanatmts }}, {{ $totalagkbanatmi }}, {{ $totalagkbanatra }}],
              stack: 'Santri AGK'
          }]
      });
    </script>
  @endsection

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">##</th>
        <th scope="col">PIT</th>
        <th scope="col">Banin</th>
        <th scope="col">Banat</th>
        <th scope="col">MA</th>
        <th scope="col">Banin</th>
        <th scope="col">Banat</th>
        <th scope="col">MTs</th>
        <th scope="col">Banin</th>
        <th scope="col">Banat</th>
        <th scope="col">MI</th>
        <th scope="col">Banin</th>
        <th scope="col">Banat</th>
        <th scope="col">RA</th>
        <th scope="col">Banin</th>
        <th scope="col">Banat</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <th scope="row">Total</th>
        <td>{{ $totalsantri }}</td>
        <td>{{ $totalsantribanin }}</td>
        <td>{{ $totalsantribanat }}</td>
        <td>{{ $totalsantrima }}</td>
        <td>{{ $totalsantribaninma }}</td>
        <td>{{ $totalsantribanatma }}</td>
        <td>{{ $totalsantrimts }}</td>
        <td>{{ $totalsantribaninmts }}</td>
        <td>{{ $totalsantribanatmts }}</td>
        <td>{{ $totalsantrimi }}</td>
        <td>{{ $totalsantribaninmi }}</td>
        <td>{{ $totalsantribanatmi }}</td>
        <td>{{ $totalsantrira }}</td>
        <td>{{ $totalsantribaninra }}</td>
        <td>{{ $totalsantribanatra }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">2</th>
        <th scope="row">Yatim</th>
        <td>{{ $totalyatim }}</td>
        <td>{{ $totalyatimbanin }}</td>
        <td>{{ $totalyatimbanat }}</td>
        <td>{{ $totalyatimma }}</td>
        <td>{{ $totalyatimbaninma }}</td>
        <td>{{ $totalyatimbanatma }}</td>
        <td>{{ $totalyatimmts }}</td>
        <td>{{ $totalyatimbaninmts }}</td>
        <td>{{ $totalyatimbanatmts }}</td>
        <td>{{ $totalyatimmi }}</td>
        <td>{{ $totalyatimbaninmi }}</td>
        <td>{{ $totalyatimbanatmi }}</td>
        <td>{{ $totalyatimra }}</td>
        <td>{{ $totalyatimbaninra }}</td>
        <td>{{ $totalyatimbanatra }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">3</th>
        <th scope="row">Asrama</th>
        <td>{{ $totalasrama }}</td>
        <td>{{ $totalasramabanin }}</td>
        <td>{{ $totalasramabanat }}</td>
        <td>{{ $totalasramama }}</td>
        <td>{{ $totalasramabaninma }}</td>
        <td>{{ $totalasramabanatma }}</td>
        <td>{{ $totalasramamts }}</td>
        <td>{{ $totalasramabaninmts }}</td>
        <td>{{ $totalasramabanatmts }}</td>
        <td>{{ $totalasramami }}</td>
        <td>{{ $totalasramabaninmi }}</td>
        <td>{{ $totalasramabanatmi }}</td>
        <td>{{ $totalasramara }}</td>
        <td>{{ $totalasramabaninra }}</td>
        <td>{{ $totalasramabanatra }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">4</th>
        <th scope="row">AGK</th>
        <td>{{ $totalagk }}</td>
        <td>{{ $totalagkbanin }}</td>
        <td>{{ $totalagkbanat }}</td>
        <td>{{ $totalagkma }}</td>
        <td>{{ $totalagkbaninma }}</td>
        <td>{{ $totalagkbanatma }}</td>
        <td>{{ $totalagkmts }}</td>
        <td>{{ $totalagkbaninmts }}</td>
        <td>{{ $totalagkbanatmts }}</td>
        <td>{{ $totalagkmi }}</td>
        <td>{{ $totalagkbaninmi }}</td>
        <td>{{ $totalagkbanatmi }}</td>
        <td>{{ $totalagkra }}</td>
        <td>{{ $totalagkbaninra }}</td>
        <td>{{ $totalagkbanatra }}</td>
      </tr>
    </tbody>
  </table>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kelas</th>
        <th scope="col">Santri</th>
        <th scope="col">Yatim</th>
        <th scope="col">Non Yatim</th>
        <th scope="col">Asrama</th>
        <th scope="col">Non Asrama</th>
        <th scope="col">AGK</th>
        <th scope="col">Non AGK</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>VII A</td>
        <td>{{ $jumlahsantri7a }}</td>
        <td>{{ $jumlahyatim7a }}</td>
        <td>{{ $jumlahnonyatim7a }}</td>
        <td>{{ $jumlahasrama7a }}</td>
        <td>{{ $jumlahnonasrama7a }}</td>
        <td>{{ $jumlahagk7a }}</td>
        <td>{{ $jumlahnonagk7a }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">2</th>
        <td>VII B</td>
        <td>{{ $jumlahsantri7b }}</td>
        <td>{{ $jumlahyatim7b }}</td>
        <td>{{ $jumlahnonyatim7b }}</td>
        <td>{{ $jumlahasrama7b }}</td>
        <td>{{ $jumlahnonasrama7b }}</td>
        <td>{{ $jumlahagk7b }}</td>
        <td>{{ $jumlahnonagk7b }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">3</th>
        <td>VII C</td>
        <td>{{ $jumlahsantri7c }}</td>
        <td>{{ $jumlahyatim7c }}</td>
        <td>{{ $jumlahnonyatim7c }}</td>
        <td>{{ $jumlahasrama7c }}</td>
        <td>{{ $jumlahnonasrama7c }}</td>
        <td>{{ $jumlahagk7c }}</td>
        <td>{{ $jumlahnonagk7c }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">4</th>
        <td>VII D</td>
        <td>{{ $jumlahsantri7d }}</td>
        <td>{{ $jumlahyatim7d }}</td>
        <td>{{ $jumlahnonyatim7d }}</td>
        <td>{{ $jumlahasrama7d }}</td>
        <td>{{ $jumlahnonasrama7d }}</td>
        <td>{{ $jumlahagk7d }}</td>
        <td>{{ $jumlahnonagk7d }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">5</th>
        <td>VII E</td>
        <td>{{ $jumlahsantri7e }}</td>
        <td>{{ $jumlahyatim7e }}</td>
        <td>{{ $jumlahnonyatim7e }}</td>
        <td>{{ $jumlahasrama7e }}</td>
        <td>{{ $jumlahnonasrama7e }}</td>
        <td>{{ $jumlahagk7e }}</td>
        <td>{{ $jumlahnonagk7e }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">6</th>
        <td>VII F</td>
        <td>{{ $jumlahsantri7f }}</td>
        <td>{{ $jumlahyatim7f }}</td>
        <td>{{ $jumlahnonyatim7f }}</td>
        <td>{{ $jumlahasrama7f }}</td>
        <td>{{ $jumlahnonasrama7f }}</td>
        <td>{{ $jumlahagk7f }}</td>
        <td>{{ $jumlahnonagk7f }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">7</th>
        <td>VIII A</td>
        <td>{{ $jumlahsantri8a }}</td>
        <td>{{ $jumlahyatim8a }}</td>
        <td>{{ $jumlahnonyatim8a }}</td>
        <td>{{ $jumlahasrama8a }}</td>
        <td>{{ $jumlahnonasrama8a }}</td>
        <td>{{ $jumlahagk8a }}</td>
        <td>{{ $jumlahnonagk8a }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">8</th>
        <td>VIII B</td>
        <td>{{ $jumlahsantri8b }}</td>
        <td>{{ $jumlahyatim8b }}</td>
        <td>{{ $jumlahnonyatim8b }}</td>
        <td>{{ $jumlahasrama8b }}</td>
        <td>{{ $jumlahnonasrama8b }}</td>
        <td>{{ $jumlahagk8b }}</td>
        <td>{{ $jumlahnonagk8b }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">9</th>
        <td>VIII C</td>
        <td>{{ $jumlahsantri8c }}</td>
        <td>{{ $jumlahyatim8c }}</td>
        <td>{{ $jumlahnonyatim8c }}</td>
        <td>{{ $jumlahasrama8c }}</td>
        <td>{{ $jumlahnonasrama8c }}</td>
        <td>{{ $jumlahagk8c }}</td>
        <td>{{ $jumlahnonagk8c }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">10</th>
        <td>VIII D</td>
        <td>{{ $jumlahsantri8d }}</td>
        <td>{{ $jumlahyatim8d }}</td>
        <td>{{ $jumlahnonyatim8d }}</td>
        <td>{{ $jumlahasrama8d }}</td>
        <td>{{ $jumlahnonasrama8d }}</td>
        <td>{{ $jumlahagk8d }}</td>
        <td>{{ $jumlahnonagk8d }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">11</th>
        <td>VIII E</td>
        <td>{{ $jumlahsantri8e }}</td>
        <td>{{ $jumlahyatim8e }}</td>
        <td>{{ $jumlahnonyatim8e }}</td>
        <td>{{ $jumlahasrama8e }}</td>
        <td>{{ $jumlahnonasrama8e }}</td>
        <td>{{ $jumlahagk8e }}</td>
        <td>{{ $jumlahnonagk8e }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">12</th>
        <td>VIII F</td>
        <td>{{ $jumlahsantri8f }}</td>
        <td>{{ $jumlahyatim8f }}</td>
        <td>{{ $jumlahnonyatim8f }}</td>
        <td>{{ $jumlahasrama8f }}</td>
        <td>{{ $jumlahnonasrama8f }}</td>
        <td>{{ $jumlahagk8f }}</td>
        <td>{{ $jumlahnonagk8f }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">13</th>
        <td>IX A</td>
        <td>{{ $jumlahsantri9a }}</td>
        <td>{{ $jumlahyatim9a }}</td>
        <td>{{ $jumlahnonyatim9a }}</td>
        <td>{{ $jumlahasrama9a }}</td>
        <td>{{ $jumlahnonasrama9a }}</td>
        <td>{{ $jumlahagk9a }}</td>
        <td>{{ $jumlahnonagk9a }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">14</th>
        <td>IX B</td>
        <td>{{ $jumlahsantri9b }}</td>
        <td>{{ $jumlahyatim9b }}</td>
        <td>{{ $jumlahnonyatim9b }}</td>
        <td>{{ $jumlahasrama9b }}</td>
        <td>{{ $jumlahnonasrama9b }}</td>
        <td>{{ $jumlahagk9b }}</td>
        <td>{{ $jumlahnonagk9b }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">15</th>
        <td>IX C</td>
        <td>{{ $jumlahsantri9c }}</td>
        <td>{{ $jumlahyatim9c }}</td>
        <td>{{ $jumlahnonyatim9c }}</td>
        <td>{{ $jumlahasrama9c }}</td>
        <td>{{ $jumlahnonasrama9c }}</td>
        <td>{{ $jumlahagk9c }}</td>
        <td>{{ $jumlahnonagk9c }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">16</th>
        <td>IX D</td>
        <td>{{ $jumlahsantri9d }}</td>
        <td>{{ $jumlahyatim9d }}</td>
        <td>{{ $jumlahnonyatim9d }}</td>
        <td>{{ $jumlahasrama9d }}</td>
        <td>{{ $jumlahnonasrama9d }}</td>
        <td>{{ $jumlahagk9d }}</td>
        <td>{{ $jumlahnonagk9d }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">17</th>
        <td>IX E</td>
        <td>{{ $jumlahsantri9e }}</td>
        <td>{{ $jumlahyatim9e }}</td>
        <td>{{ $jumlahnonyatim9e }}</td>
        <td>{{ $jumlahasrama9e }}</td>
        <td>{{ $jumlahnonasrama9e }}</td>
        <td>{{ $jumlahagk9e }}</td>
        <td>{{ $jumlahnonagk9e }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">18</th>
        <td>IX F</td>
        <td>{{ $jumlahsantri9f }}</td>
        <td>{{ $jumlahyatim9f }}</td>
        <td>{{ $jumlahnonyatim9f }}</td>
        <td>{{ $jumlahasrama9f }}</td>
        <td>{{ $jumlahnonasrama9f }}</td>
        <td>{{ $jumlahagk9f }}</td>
        <td>{{ $jumlahnonagk9f }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">19</th>
        <td>X A</td>
        <td>{{ $jumlahsantri10a }}</td>
        <td>{{ $jumlahyatim10a }}</td>
        <td>{{ $jumlahnonyatim10a }}</td>
        <td>{{ $jumlahasrama10a }}</td>
        <td>{{ $jumlahnonasrama10a }}</td>
        <td>{{ $jumlahagk10a }}</td>
        <td>{{ $jumlahnonagk10a }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">20</th>
        <td>X B</td>
        <td>{{ $jumlahsantri10b }}</td>
        <td>{{ $jumlahyatim10b }}</td>
        <td>{{ $jumlahnonyatim10b }}</td>
        <td>{{ $jumlahasrama10b }}</td>
        <td>{{ $jumlahnonasrama10b }}</td>
        <td>{{ $jumlahagk10b }}</td>
        <td>{{ $jumlahnonagk10b }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">21</th>
        <td>X C</td>
        <td>{{ $jumlahsantri10c }}</td>
        <td>{{ $jumlahyatim10c }}</td>
        <td>{{ $jumlahnonyatim10c }}</td>
        <td>{{ $jumlahasrama10c }}</td>
        <td>{{ $jumlahnonasrama10c }}</td>
        <td>{{ $jumlahagk10c }}</td>
        <td>{{ $jumlahnonagk10c }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">22</th>
        <td>X D</td>
        <td>{{ $jumlahsantri10d }}</td>
        <td>{{ $jumlahyatim10d }}</td>
        <td>{{ $jumlahnonyatim10d }}</td>
        <td>{{ $jumlahasrama10d }}</td>
        <td>{{ $jumlahnonasrama10d }}</td>
        <td>{{ $jumlahagk10d }}</td>
        <td>{{ $jumlahnonagk10d }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">23</th>
        <td>X E</td>
        <td>{{ $jumlahsantri10e }}</td>
        <td>{{ $jumlahyatim10e }}</td>
        <td>{{ $jumlahnonyatim10e }}</td>
        <td>{{ $jumlahasrama10e }}</td>
        <td>{{ $jumlahnonasrama10e }}</td>
        <td>{{ $jumlahagk10e }}</td>
        <td>{{ $jumlahnonagk10e }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">24</th>
        <td>X F</td>
        <td>{{ $jumlahsantri10f }}</td>
        <td>{{ $jumlahyatim10f }}</td>
        <td>{{ $jumlahnonyatim10f }}</td>
        <td>{{ $jumlahasrama10f }}</td>
        <td>{{ $jumlahnonasrama10f }}</td>
        <td>{{ $jumlahagk10f }}</td>
        <td>{{ $jumlahnonagk10f }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">25</th>
        <td>XI A</td>
        <td>{{ $jumlahsantri11a }}</td>
        <td>{{ $jumlahyatim11a }}</td>
        <td>{{ $jumlahnonyatim11a }}</td>
        <td>{{ $jumlahasrama11a }}</td>
        <td>{{ $jumlahnonasrama11a }}</td>
        <td>{{ $jumlahagk11a }}</td>
        <td>{{ $jumlahnonagk11a }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">26</th>
        <td>XI B</td>
        <td>{{ $jumlahsantri11b }}</td>
        <td>{{ $jumlahyatim11b }}</td>
        <td>{{ $jumlahnonyatim11b }}</td>
        <td>{{ $jumlahasrama11b }}</td>
        <td>{{ $jumlahnonasrama11b }}</td>
        <td>{{ $jumlahagk11b }}</td>
        <td>{{ $jumlahnonagk11b }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">27</th>
        <td>XI C</td>
        <td>{{ $jumlahsantri11c }}</td>
        <td>{{ $jumlahyatim11c }}</td>
        <td>{{ $jumlahnonyatim11c }}</td>
        <td>{{ $jumlahasrama11c }}</td>
        <td>{{ $jumlahnonasrama11c }}</td>
        <td>{{ $jumlahagk11c }}</td>
        <td>{{ $jumlahnonagk11c }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">28</th>
        <td>XI D</td>
        <td>{{ $jumlahsantri11d }}</td>
        <td>{{ $jumlahyatim11d }}</td>
        <td>{{ $jumlahnonyatim11d }}</td>
        <td>{{ $jumlahasrama11d }}</td>
        <td>{{ $jumlahnonasrama11d }}</td>
        <td>{{ $jumlahagk11d }}</td>
        <td>{{ $jumlahnonagk11d }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">29</th>
        <td>XI E</td>
        <td>{{ $jumlahsantri11e }}</td>
        <td>{{ $jumlahyatim11e }}</td>
        <td>{{ $jumlahnonyatim11e }}</td>
        <td>{{ $jumlahasrama11e }}</td>
        <td>{{ $jumlahnonasrama11e }}</td>
        <td>{{ $jumlahagk11e }}</td>
        <td>{{ $jumlahnonagk11e }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">30</th>
        <td>XI F</td>
        <td>{{ $jumlahsantri11f }}</td>
        <td>{{ $jumlahyatim11f }}</td>
        <td>{{ $jumlahnonyatim11f }}</td>
        <td>{{ $jumlahasrama11f }}</td>
        <td>{{ $jumlahnonasrama11f }}</td>
        <td>{{ $jumlahagk11f }}</td>
        <td>{{ $jumlahnonagk11f }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">31</th>
        <td>XII A</td>
        <td>{{ $jumlahsantri12a }}</td>
        <td>{{ $jumlahyatim12a }}</td>
        <td>{{ $jumlahnonyatim12a }}</td>
        <td>{{ $jumlahasrama12a }}</td>
        <td>{{ $jumlahnonasrama12a }}</td>
        <td>{{ $jumlahagk12a }}</td>
        <td>{{ $jumlahnonagk12a }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">32</th>
        <td>XII B</td>
        <td>{{ $jumlahsantri12b }}</td>
        <td>{{ $jumlahyatim12b }}</td>
        <td>{{ $jumlahnonyatim12b }}</td>
        <td>{{ $jumlahasrama12b }}</td>
        <td>{{ $jumlahnonasrama12b }}</td>
        <td>{{ $jumlahagk12b }}</td>
        <td>{{ $jumlahnonagk12b }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">33</th>
        <td>XII C</td>
        <td>{{ $jumlahsantri12c }}</td>
        <td>{{ $jumlahyatim12c }}</td>
        <td>{{ $jumlahnonyatim12c }}</td>
        <td>{{ $jumlahasrama12c }}</td>
        <td>{{ $jumlahnonasrama12c }}</td>
        <td>{{ $jumlahagk12c }}</td>
        <td>{{ $jumlahnonagk12c }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">34</th>
        <td>XII D</td>
        <td>{{ $jumlahsantri12d }}</td>
        <td>{{ $jumlahyatim12d }}</td>
        <td>{{ $jumlahnonyatim12d }}</td>
        <td>{{ $jumlahasrama12d }}</td>
        <td>{{ $jumlahnonasrama12d }}</td>
        <td>{{ $jumlahagk12d }}</td>
        <td>{{ $jumlahnonagk12d }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">35</th>
        <td>XII E</td>
        <td>{{ $jumlahsantri12e }}</td>
        <td>{{ $jumlahyatim12e }}</td>
        <td>{{ $jumlahnonyatim12e }}</td>
        <td>{{ $jumlahasrama12e }}</td>
        <td>{{ $jumlahnonasrama12e }}</td>
        <td>{{ $jumlahagk12e }}</td>
        <td>{{ $jumlahnonagk12e }}</td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">36</th>
        <td>XII F</td>
        <td>{{ $jumlahsantri12f }}</td>
        <td>{{ $jumlahyatim12f }}</td>
        <td>{{ $jumlahnonyatim12f }}</td>
        <td>{{ $jumlahasrama12f }}</td>
        <td>{{ $jumlahnonasrama12f }}</td>
        <td>{{ $jumlahagk12f }}</td>
        <td>{{ $jumlahnonagk12f }}</td>
      </tr>
    </tbody>
  </table>
@endsection
