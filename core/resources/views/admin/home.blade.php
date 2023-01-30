@extends('adminlte::page')

@section('plugins.summernote', true)

@section('title', __('app.Dashboard') )

@section('content_header')
    <h1>{{ __('app.Dashboard') }}</h1>
@stop



@section('content')

<?php

        //hdd stat
        $stat['hdd_free'] = round(disk_free_space("/") / 1024 / 1024 / 1024, 2);
        $stat['hdd_total'] = round(disk_total_space("/") / 1024 / 1024/ 1024, 2);
        $stat['hdd_used'] = $stat['hdd_total'] - $stat['hdd_free'];
        $stat['hdd_percent'] = round(sprintf('%.2f',($stat['hdd_used'] / $stat['hdd_total']) * 100), 2);

//var_dump($data['analitics']);



?>


<div class="container-fluid">

    <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-server"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Free spase dick</span>
                    <span class="info-box-number"></span>
                    <?=  $stat['hdd_free']; ?>Gb
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-blue elevation-1"><i class="fab fa-php"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">PHP</span>
                    <span class="info-box-number"> v{{ PHP_VERSION }}</span>
                </div>
            </div>
        </div>


        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-info-circle"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Register Users</span>
                    <span class="info-box-number">{{ $data['users']; }}</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-info-circle"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Post in system</span>
                    <span class="info-box-number">4000</span>
                </div>
            </div>
        </div>



<?php


$analitycs = new WpdewGa4;

   $getdata_user_fool= [
       'start_date' => '7daysAgo', //7daysAgo, 30daysAgo,
       'end_date' => 'today',
       'metric' => 'activeUsers' //screenPageViews
   ];
   $full = $analitycs->FullParamMetriksLaravel($getdata_user_fool);


   $browser = $analitycs->DeviceParamMetriksLaravel($getdata_user_fool);


$date = '';
$activeUsers = '';
$screenPageViews = '';

usort($full, function ($a, $b) {
    return $a["date"] - $b["date"];
});

foreach ($full as $key => $value) {

    $date .= "\"".date('Y-m-d', strtotime($value['date']))."\",";
    $activeUsers .= $value['activeUsers'].",";
    $screenPageViews .= $value['screenPageViews'].",";
}

?>
    </div>

    </div>



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __('app.Dashboard') }}
                    </div>

                    <div class="card-body">
                        <br/>

                    <!--
                        {{ $data['lang_code'] }}

                        {{ session()->get('lang_code') }}

                        Langauge : <select onchange="changeLanguage(this.value)" >
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''}} value="en">English</option>
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='ru'?'selected':''):''}} value="ru">Русский</option>
                            <option {{session()->has('lang_code')?(session()->get('lang_code')=='uk'?'selected':''):''}} value="uk">Українська</option>
                        </select><br/>

                        {{\Carbon\Carbon::now("Europe/Kiev")->format('d-m-Y')}}<br/>
                        {{ getUserIpAddr() }}<br/>
                        {{ __('app.you_logged') }}
                        <p>{{ __('app.welcome_panel') }}</p>
                    -->


                        <div class="row">
                            <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                <h3 class="card-title">Google Analytics Uses last 7 days</h3>
                                </div>

                                <div class="card-body">
                                    <div id="container" style="width: 100%;">
                                        <canvas id="canvas"></canvas>
                                    </div>
                                </div>

                            </div>

                            </div>

                            <div class="col-md-6">
                            <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Google Analytics deviceCategory last 7 days</h3>
                            </div>

                            <div class="card-body">

                                <div id="doughnutt" style="width: 100%;">
                                    <canvas id="doughnut"></canvas>
                                </div>

                            </div>

                            </div>

                            </div>

                            </div>






                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('admin.footer')

@stop







@section('css')
    <link rel="stylesheet" href="{{get_home_url()}}core/public/css/admin_custom.css">
@stop

@section('js')

@include('admin.langscript')

<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js'></script>

<script>


var barChartData = {
  labels: [
    <?php echo $date; ?>
  ],
  datasets: [
    {
      label: "activeUsers",
      backgroundColor: "lightblue",
      borderColor: "lightblue",
      borderWidth: 1,
      data: [<?= $activeUsers; ?>]
    },
    {
      label: "screenPageViews",
      backgroundColor: "blue",
      borderColor: "blue",
      borderWidth: 1,
      data: [<?= $screenPageViews; ?>]
    }
  ]
};

var chartOptions = {
  responsive: true,
  legend: {
    position: "top"
  },
  title: {
    display: false,
    text: "Google Analytics"
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
}

<?php
//if no $browser[0]['tablet'] set 0
$tablet = isset($browser[0]['tablet']) ? $browser[0]['tablet'] : 0;
$mobile = isset($browser[0]['mobile']) ? $browser[0]['mobile'] : 0;
$desktop = isset($browser[0]['desktop']) ? $browser[0]['desktop'] : 0;

?>

var dataDoughnutCharts = {
  labels: [
    'Desktop',
    'Mobile',
    'Tablet',
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [<?= $desktop;?>, <?= $mobile;?>, <?= $tablet;?>],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

var configChart = {
  type: 'doughnut',
  data: dataDoughnutCharts,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Doughnut Chart'
      }
    }
  },
};

window.onload = function() {

};


window.onload = function() {
  var ctx = document.getElementById("canvas").getContext("2d");
  window.myBar = new Chart(ctx, {
    type: "bar",
    data: barChartData,
    options: chartOptions
  });

  var ctxx = document.getElementById('doughnut').getContext('2d');
  window.myDoughnut = new Chart(ctxx, configChart);
};


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
// if isset cookie "authsound" => "off"
Cookie::queue('authsound', 'on', 60);
    if(Cookie::get('authsound') == 'on'){

?>

<script>
$(document).ready(function(){
    $('body').addClass('soundon');
            $('.footer_').click(function(){
               // playSound();
            });
               playSound();
               //clearCookies()


});
<?php
//set cookie
    Cookie::queue('authsound', 'off', 60);
?>
</script>
<?php } ?>

<!-- END PAGE LEVEL SCRIPTS -->
<script>

$(".footer-tools_").click(function(el) {
	playSound();

});
function playSound(){
	var audio = new Audio('<?= asset('/audio/LogON.mp3') ?>');
    var playPromise = audio.play();
}
function clearCookies(){
    $.removeCookie('authsound');

}
if (!$.cookie('welcome_sounds')) {
    // если cookie не установлено
    //playSound();
    // Запоминаем в куках, что посетитель уже заходил
    //$.cookie('welcome_sound', true, {expires: 1});
}


</script>





@stop




