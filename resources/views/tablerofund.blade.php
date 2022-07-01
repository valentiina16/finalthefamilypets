@extends('layouts.main', ['activePage' => 'dashboard1', 'titlePage' => __('Tablero fundación')])

@section('content')

<script>
        Swal.fire({
            title: 'Nuevas citas agendadas!',
            icon:'info'
            showCloseButton:true,
        })

        </script>




  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
               <div class="card-icon">
                    <i class="material-icons">class</i>
                  </div>  
              <h3 class="card-title">Citas</h3>
              @php
             use App\Models\Preadoption;
             $cant_preadopciones = Preadoption::count();
              @endphp
              <h2><span style="color: black">{{$cant_preadopciones}}</span></h2>
            </div>
          </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                 <div class="card-icon">
                      <i class="material-icons">pets</i>
                    </div>
                <h3 class="card-title">Mascotas</h3>
                @php
               use App\Models\Pet;
               $cant_mascotas = Pet::count();
                @endphp
                <h2><span style="color: black">{{$cant_mascotas}}</span></h2>
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
        text: 'Incrementos de citas'
      },
      data:{
        labels: [ 'diciembre','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio',
           'agosto', 'septiembre', 'octubre', 'noviembre'],
           datasets:[{
             label:'Nuevas citas',
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


<div style="height: 500px; width: 1000px; margin:auto;">
    <canvas id="barChart2"></canvas>
  </div>

<script>
  $(function(){
    var datas2 = <?php echo json_encode($datas2); ?>;
    var barCanvas = $("#barChart2");
    var barChart = new Chart(barCanvas,{
      type:'bar',
      title:{
        text: 'Incrementos de mascotas'
      },
      data:{
        labels: [ 'diciembre','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio',
           'agosto', 'septiembre', 'octubre', 'noviembre'],
           datasets:[{
             label:'Nuevas mascotas',
             data: datas2,
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




</div>


    

@endsection