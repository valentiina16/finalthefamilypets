@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Tablero administrador')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6" style="margin:auto">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
               <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
              <h3 class="card-title">Usuarios</h3>
              @php
             use App\Models\User;
             $cant_usuarios = User::count();
              @endphp
              <h2><span style="color: black">{{$cant_usuarios}}</span></h2>
            </div>
          </div>
        </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div style="height: 500px; width: 1000px; margin:auto;">
  <canvas id="barChart"></canvas>
</div>

<script>
  $(function(){
    var datas = <?php echo json_encode($datas); ?>;
    var barCanvas = $("#barChart");
    var barChart = new Chart(barCanvas,{
      type:'bar',
      title:{
        text: 'Incrementos de usuarios'
      },
      data:{
        labels: [ 'diciembre','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio',
           'agosto', 'septiembre', 'octubre', 'noviembre'],
           datasets:[{
             label:'Usuarios nuevos',
             data: datas,
             backgroundColor: ['orange', 'red',  'yellow', 'green','blue','gray','green','purple','gold','silver','brown','dark-blue'],
             hoverOffset: 12
           }
          ]

      },
      options:{
        saceles:{
          yAxes:[{
            ticks:{
              beginAtZero:true
            }
          }]
        }
      }
    })
  })
</script>



{{--<div id="chart-container"></div>

  <script src="https://code.highcharts.com/highcharts.js"></script>

  <script>

    var datas = <?php echo json_encode ($datas) ?>

    Highcharts.chart('chart-container',{
      title:{
        text: 'Incrementos de usuarios'
      },
      subtitle:{
        text: 'Usuarios'
        },
        xAxis:{
          categories: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio',
           'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre']
        },
        xAxis:{
          title:{
            text: 'Numeros de usuarios'
          }
        },
        legend:{
          layout: 'vertical',
          align: 'right',
          verticalAlign:'middle'
        },
        plotOptions:{
          series:{
            allowPointSelect: true
          }
        },
        series:[{
          Name: 'Nuevos usuarios',
          data: datas
        }],
        responsive:{
          rules:[{
            condition:{
              maxwidth:500
            },
            chartOptions:{
              legend:{
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
              }
            }
          }]
        }
      }
    )
  </script>





--}}
</div>




@endsection



