<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LAPORAN BEASISWA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminLTE/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/adminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminLTE/css/adminlte.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/adminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/adminLTE/plugins/summernote/summernote-bs4.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/adminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <!-- Main content -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-bordered table-head-fixed bg-white">
          <thead>
            <tr>
              <td colspan="8" align="center">
                <h6><b>LAPORAN PENDAFTARAN</b></h6>
              </td>
            </tr>
            <tr class="bg-light">
              {{-- <thead>
                  <tr class="bg-light"> --}}
                      {{-- <th>No.</th> --}}
                      <th>NIS</th>
                      <th><div style="width:110px;">Nama</div></th>
                      <th><div style="">Total Perhitungan Bobot Beasiswa Kepala</div></th>
                      <th><div style="">Total Perhitungan Bobot Beasiswa Yayasan</div></th>
                      <th><div style="">Total Perhitungan Bobot Beasiswa Orang Tua Asuh</div></th>
                      {{-- <th><div style="width:110px;">nilai</div></th> --}}
                      {{-- <th><center> Aksi</center></th> --}}
                  </tr>
              </thead>
              <tbody>
                  <?php $no = 0; ?>
                  @foreach($datas as $siswa)
                  <?php $no++; ?>
                  <tr>
                      {{-- <td>{{$no}}</td> --}}
                      <td>{{$siswa->siswa->nis}}</td>
                      <td>{{$siswa->siswa->nama}}</td>
                      {{-- <td>{{ DB::table('penilaian')->where('keterangan'>=, $siswa->nilai)->where('keterangan2', '<=', $siswa->nilai)->pluck('bobot')}}</td> --}}
                          {{-- // ->where('keterangan', 'like', '%' . $cari . '%') --}}
                          
                      <td>{{($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"1")->value('bobot'))+($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"2")->value('bobot'))+($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"3")->value('bobot'))}}</td>
                      <td>{{($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"10")->value('bobot'))+($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"10")->value('bobot'))+($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"10")->value('bobot'))}}</td>
                      <td>{{($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"10")->value('bobot'))+($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"10")->value('bobot'))+($siswa->nilai/DB::table('penilaian')->where('id_kriteria',"1")->count()*DB::table('model')->where('id',"40")->value('bobot'))}}</td>
                      {{-- <td>{{$siswa->tanggungan}}</td>
                      <td>{{$siswa->penghasilan}}</td>
                      <td>{{{$siswa->penghasilan - $siswa->tanggungan}}}</td> --}}
                      
                  </tr>
            @endforeach
          </tbody>
          <tfoot>
            <!-- <tr>
              <td colspan="5" align="center"><b>Jumlah Total Transaksi</b></td>
              <td align="left">
               
              </td>
            </tr> -->
          </tfoot>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->

  <script type="text/javascript">
    window.addEventListener("load", window.print());
  </script>
  <script src="/adminLTE/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/adminLTE/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="/adminLTE/plugins/select2/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/adminLTE/js/adminlte.min.js"></script>
  <!-- Ekko Lightbox -->
  <script src="/adminLTE/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
  <!-- Filterizr-->
  <script src="/adminLTE/plugins/filterizr/jquery.filterizr.min.js"></script>
  <!-- Data Table -->
  <script src="/adminLTE/plugins/datatables/jquery.dataTables.js"></script>
  <script src="/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- overlayScrollbars -->
  <script src="/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/adminLTE/js/demo.js"></script>
</body>

</html>