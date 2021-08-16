<?php
$json_data=include('chartDb.php');
session_start();
echo "Hoş Geldin  ";   echo  $_SESSION['userkullanici_mail'];
$db = new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8","root","123456");
$query = $db->query("select * from urunler");

?>
<title>ADMİN</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script src="code/highcharts.js"></script>
<script src="code/modules/series-label.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>
<script src="code/modules/accessibility.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 360px;
    max-width: 660px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
input {

  padding:8px 20px;
  margin:3px;
  border: 1px solid #eee;

  border-left: 3px solid;

  border-left-color:salmon;

  border-radius: 5px;

  transition: border-color .8s ease-out;
}

button:focus{

  outline:none;

  border: 1px solid #eee;

  border-left: 3px solid #888;

}
input[type=button]:focus{

         border: 3px solid #1c7430 ;
     }
</style>
<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="en">
<head>
<body>
<a href="logout.php">Çıkış Yap</a>
<div class="menu">
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">AIR</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Anasayfa.html">Anasayfa<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="urunlerimiz.php">Ürünlerimiz</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="hakkimizda.html">Hakkımızda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="iletisim.html">İletişim</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Ara" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
    </form>
  </div>
</nav>
</div>
<header>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 col" >
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
                    <script type="text/javascript">
                        Highcharts.chart('container', {

                            title: {
                                text: 'Yıllara Göre Ürün İstek Grafiği, 2010-2016'
                            },

                            subtitle: {
                                text: 'www.aircondition.store'
                            },

                            yAxis: {
                                title: {
                                    text: 'Satış Sayısı'
                                }
                            },

                            xAxis: {
                                accessibility: {
                                    rangeDescription: 'Range: 2010 to 2016'
                                }
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                    pointStart: 2010
                                }
                            },

                            series: <?=$json_data?>,

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                    </script>
                 </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col" >
                <figure class="highcharts-figure">
                    <div id="container2"></div>
                </figure>
                    <script type="text/javascript">

                        var categories = [
                            '0-4', '5-9', '10-14', '15-19',
                            '20-24', '25-29', '30-34', '35-39', '40-44',
                            '45-49', '50-54', '55-59', '60-64', '65-69',
                            '70-74', '75-79', '80-84', '85-89', '90-94',
                            '95-99', '100 + '
                        ];

                        Highcharts.chart('container2', {
                            chart: {
                                type: 'bar'
                            },
                            title: {
                                text: 'Ürün İstek Piramidi, 2021'
                            },
                            subtitle: {
                                text: 'www.aircondition.store'
                            },
                            accessibility: {
                                point: {
                                    valueDescriptionFormat: '{index}. Age {xDescription}, {value}%.'
                                }
                            },
                            xAxis: [{
                                categories: categories,
                                reversed: false,
                                labels: {
                                    step: 1
                                },
                                accessibility: {
                                    description: 'Age (male)'
                                }
                            }, { // mirror axis on right side
                                opposite: true,
                                reversed: false,
                                categories: categories,
                                linkedTo: 0,
                                labels: {
                                    step: 1
                                },
                                accessibility: {
                                    description: 'Age (female)'
                                }
                            }],
                            yAxis: {
                                title: {
                                    text: null
                                },
                                labels: {
                                    formatter: function () {
                                        return Math.abs(this.value) + '%';
                                    }
                                },
                                accessibility: {
                                    description: 'Percentage population',
                                    rangeDescription: 'Range: 0 to 5%'
                                }
                            },

                            plotOptions: {
                                series: {
                                    stacking: 'normal'
                                }
                            },

                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 1) + '%';
                                }
                            },

                            series: <?=$json_data?>,
                        });

                    </script>
                </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col" >
                <figure class="highcharts-figure">
                    <div id="container3"></div>
                </figure><br><br>
                    <script type="text/javascript">
                        var pieColors = (function () {
                            var colors = [],
                                base = Highcharts.getOptions().colors[0],
                                i;

                            for (i = 0; i < 10; i += 1) {
                                colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
                            }
                            return colors;
                        }());
                        Highcharts.chart('container3', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'Ürün Pazar Payları, 2021'
                            },
                            subtitle: {
                                text: 'www.aircondition.store'
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            accessibility: {
                                point: {
                                    valueSuffix: '%'
                                }
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    colors: pieColors,
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                                        distance: -50,
                                        filter: {
                                            property: 'percentage',
                                            operator: '>',
                                            value: 4
                                        }
                                    }
                                }
                            },
                            series:<?=$json_data?>,
                        });
                    </script>
                </div>
            </div>
    </div>
</header>
    <?php
      $db = new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8","root","123456");
       $query = $db->query("select * from urun");
    ?>
<article>
      <div class="container-fluid">
          <div class="row">
               <div class="col col-sm-12 col-md-12 col-lg-12">
                    <h3 style="text-align:center;">ÜRÜN LİSTESİ</h3>
                    <br>
                   <div class="table-responsive">
                       <table id="veri" class="table table-striped table-bordered">
                         <thead>
                         <tr>
                         <td><h5>MODEL NUMARASI</h5></td>
                         <td><h5>ÜRÜN ADI</h5></td>
                         <td><h5>STOK DURUMU</h5></td>
                         <td><h5>GÖRSEL</h5></td>
                         <td></td><td></td><td></td>
                         </tr>
                         </thead>
                          <?php
                             foreach($query as $row) {
                                ?>
                                <tr>
                                <td><?php echo $row["model_no"];?></td>
                                <td><?php echo $row["urun_adi"];?></td>
                                <td><?php echo $row["stok_durum"];?></td>
                                <td><?php echo $row["fotograf"];?></td>
                                 <td> <button type="button" class="btn btn-primary buton2" data-toggle="modal" data-target="#guncelle" style="background-color: rgb(15, 72, 127);width: 150px;">
                        GÜNCELLE
                    </button></td>
                                 <td> <button type="button" class="btn btn-primary buton2" data-toggle="modal" data-target="#ekle" style="background-color: rgb(15, 72, 127);width: 150px">
                        EKLE
                    </button></td>
                                 <td><button type="button" class="btn btn-primary buton2" data-toggle="modal" data-target="#sil" style="background-color: rgb(15, 72, 127);width: 150px">
                        SİL
                    </button> </td>
                                </tr>
                                <?php
                             }
                           ?>
                       </table>
                   </div>
              </div>
      </div>
  </div>
  </article>
  <script>
          $(function() {
             $("#veri").DataTable({
                   language: {
                       "url" : "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Turkish.json"
                   }
             });
          });
  </script>
    <section>
        <nav class="modal fade" id="guncelle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ürün Güncelle</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="update.php" method="POST">
                                <input type="text" name="model_no" id="model_no" placeholder="Model Numarası" class="yazi" />
                                <br>
                                <input type="text" name="urun_adi" id="urun_adi" placeholder="Ürün Adı" class="yazi" />
                                <br>
                                <input type="text" name="stok_durum" id="stok_durum" placeholder="Stok Adet" class="yazi" />
                                <br>
                                <input type="file" name="fotograf" id="fotograf" placeholder="Fotoğraf" class="yazi"  />
                                <br>
                                <input type="submit" name="gonder" value="GÜNCELLE" class="buton" />
                                <input type="reset" name="sil" value="TEMİZLE" class="buton" />
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
    </section>
    <section>
			<nav class="modal fade" id="ekle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Ürün Ekle</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <form action="kayit.php" method="POST">
                            <input type="text" name="model_no" id="model_no" placeholder="Model Numarası" class="yazi" required/>
                            <br>
                            <input type="text" name="urun_adi" id="urun_adi" placeholder="Ürün Adı" class="yazi" required/>
                            <br>
                            <input type="text" name="stok_durum" id="stok_durum" placeholder="Stok Adet" class="yazi" required/>
                            <br>
                            <input type="file" name="fotograf" id="fotograf" placeholder="Fotoğraf" class="yazi" required />
                            <br>
                            <input type="submit" name="gonder" value="EKLE" class="buton" />
                            <input type="reset" name="sil" value="TEMİZLE" class="buton" />
                            </form>
						</div>
					</div>
				</div>
			</nav>
    </section>
    <section>
				<nav class="modal fade" id="sil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Ürün Sil</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <form action="sil.php" method="POST">
                            <input type="text" name="model_no" id="model_no" placeholder="Model Numarası" class="yazi" required/>
                            <br>
                            <input type="submit" name="gonder" value="SİL" class="buton" />
                            <input type="reset" name="sil" value="TEMİZLE" class="buton" />
                            </form><br>
						</div>
					</div>
				</div>
			</nav>
    </section>
</body>
</html>
