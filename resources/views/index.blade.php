<!doctype html>
<html lang="en">

<head>
    <title>Ayo Gadai </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="apple-touch-icon" sizes="76x76" href="klorofil/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="klorofil/img/logo_gadai.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"> 
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="jquery.masknumber.js"></script>

    @section('css')
        <!-- CSS -->
        {{ Html::style('klorofil/css/bootstrap.min.css')}}
        {{ Html::style('klorofil/css/vendor/icon-sets.css')}}
        {{ Html::style('klorofil/css/main.min.css')}}
        {{ Html::style('klorofil/css/demo.css')}}

        @yield('extra-style')
        @yield('header')

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    @show
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- SIDEBAR -->
        @if(auth()->user()->role == 'Admin')
            @include("layouts/partials/sidebar/admin")
        @elseif(auth()->user()->role == 'Karyawan')
            @include("layouts/partials/sidebar/karyawan")
        @elseif(auth()->user()->role == 'Kurir')
            @include("layouts/partials/sidebar/kurir")    
        @endif
        <!-- END SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- NAVBAR -->
            @include('layouts/partials/header')
            <!-- END NAVBAR -->
            <!-- MAIN CONTENT -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT -->
            <footer>
                @include('layouts/partials/footer')
            </footer>
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->

    @section('script')
    <!-- Javascript -->
        {{ Html::script('klorofil/js/jquery/jquery-2.1.0.min.js') }}
        {{ Html::script('klorofil/js/bootstrap/bootstrap.min.js') }}
        {{ Html::script('klorofil/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
        {{ Html::script('klorofil/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}
        {{ Html::script('klorofil/js/plugins/chartist/chartist.min.js') }}
        {{ Html::script('klorofil/js/klorofil.min.js') }}

        @yield('extra-script')
        @yield('footer')
    @show
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
        $('#data-table').DataTable();
    } );
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
        $('#data-table2').DataTable();
    } );
    </script>

 <script type="text/javascript">
            function readURL() {
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(input).prev().attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(function () {
                $(".uploads").change(readURL)
                $("#f").submit(function(){
                    return false
                })
            })
    </script>

<script type="text/javascript">
    $(function() {
        $('#elektronik').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '5') {
                    $('#elektronik').show(); 
                } else {
                    $('#elektronik').hide(); 
            } 
        });
    });

    $(function() {
        $('#handphone').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '6') {
                    $('#handphone').show(); 
                } else {
                    $('#handphone').hide(); 
            } 
        });
    });

    $(function() {
        $('#kendaraan').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '7') {
                    $('#kendaraan').show(); 
                } else {
                    $('#kendaraan').hide(); 
            } 
        });
    });

    $(function() {
        $('#logammulia').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '8') {
                    $('#logammulia').show(); 
                } else {
                    $('#logammulia').hide(); 
            } 
        });
    });

    $(function() {
        $('#perhiasan').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '9') {
                    $('#perhiasan').show(); 
                } else {
                    $('#perhiasan').hide(); 
            } 
        });
    });

    $(function() {
        $('#laptop').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '10') {
                    $('#laptop').show(); 
                } else {
                    $('#laptop').hide(); 
            } 
        });
    });

    $(function() {
        $('#perlengkapanrumahtangga').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '13') {
                    $('#perlengkapanrumahtangga').show(); 
                } else {
                    $('#perlengkapanrumahtangga').hide(); 
            } 
        });
    });

    $(function() {
        $('#barangbrandedlainnya').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '14') {
                    $('#barangbrandedlainnya').show(); 
                } else {
                    $('#barangbrandedlainnya').hide(); 
            } 
        });
    });

    $(function() {
        $('#sertifikat').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '15') {
                    $('#sertifikat').show(); 
                } else {
                    $('#sertifikat').hide(); 
            } 
        });
    });

    $(function() {
        $('#mesin').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '16') {
                    $('#mesin').show(); 
                } else {
                    $('#mesin').hide(); 
            } 
        });
    });

    $(function() {
        $('#emas').hide(); 
            $('#type').change(function(){
                if($('#type').val() == '17') {
                    $('#emas').show(); 
                } else {
                    $('#emas').hide(); 
            } 
        });
    });
</script>

<script type="text/javascript">
        $(document).on('click', '.pilih', function (e) {
                    document.getElementById("buku_judul").value = $(this).attr('data-buku_judul');
                    document.getElementById("buku_id").value = $(this).attr('data-buku_id');
                    $('#myModal').modal('hide');
                });

                $(document).on('click', '.pilih_anggota', function (e) {
                    document.getElementById("anggota_id").value = $(this).attr('data-anggota_id');
                    document.getElementById("anggota_nama").value = $(this).attr('data-anggota_nama');
                    $('#myModal2').modal('hide');
                });
              
                 $(function () {
                    $("#lookup, #lookup2").dataTable();
                });

    </script>
    
</body>

</html>
