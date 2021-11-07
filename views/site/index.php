<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\web\Session;

$session = Yii::$app->session;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;

?>
<style type="text/css">
    
@media screen and (min-width: 768px) {

        .modal-dialog {

          width: 700px; /* New width for default modal */

        }

        .modal-sm {

          width: 350px; /* New width for small modal */

        }

    }

    @media screen and (min-width: 992px) {

        .modal-lg {

          width: 1300px; /* New width for large modal */

        }

    }
</style>
  
<div class="site-index">
     <!-- =========================================================== -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Issued Books</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Manage Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-circle-o "></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44 | 60</h3>

              <p>Manage Books</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Fine Collected</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">
                <span id="mapDelayTitle"> </span>
              </h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body" style='height: 420px;'>
              <div id="container-graph"></div>
            </div>
          </div>
        </div> 
      </div>
      <!-- =========================================================== -->
</div>
<script type="text/javascript">

  $(document).ready(function() {
      Highcharts.chart('container-graph', {
          chart: {
              type: 'bar'
          },
          title: {
              text: 'Library Popular Book Data'
          },
          subtitle: {
              text: ' '
          },
          xAxis: {
              categories: ['Inspirational', 'Literary', 'Engineering', 'Medical', 'Historical'],
              title: {
                  text: null
              }
          },
          yAxis: {
              min: 0,
              labels: {
                  overflow: 'justify'
              }
          },
          tooltip: {
              valueSuffix: ' Book/s'
          },
          plotOptions: {
              bar: {
                  dataLabels: {
                      enabled: true
                  }
              }
          },
          legend: {
              layout: 'vertical',
              align: 'right',
              verticalAlign: 'top',
              x: -40,
              y: 40,
              floating: true,
              borderWidth: 1,
              backgroundColor:
                  Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
              shadow: true
          },
          credits: {
              enabled: false
          },
          series: [{
              name: 'Year 2018',
              data: [107, 31, 276, 203, 2]
          }, {
              name: 'Year 2019',
              data: [24, 500, 45, 89, 31]
          }, {
              name: 'Year 2020',
              data: [116, 400, 56, 90, 40]
          }]
      });
  });
</script>

