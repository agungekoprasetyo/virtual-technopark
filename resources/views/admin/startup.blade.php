@extends('layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endsection

@section('content')

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <span>Informasi & Tech (IT) &emsp;&emsp;&emsp; : 12</span>
                <span>Software & Konten &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Video & Multimedia &emsp;&emsp;&emsp;&ensp; : 12</span>
                <br>
                <span>Embedded System &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Internet of Things &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;: 12</span>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <span>Informasi & Tech (IT) &emsp;&emsp;&emsp; : 12</span>
                <span>Software & Konten &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Video & Multimedia &emsp;&emsp;&emsp;&ensp; : 12</span>
                <br>
                <span>Embedded System &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Internet of Things &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;: 12</span>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <span>Informasi & Tech (IT) &emsp;&emsp;&emsp; : 12</span>
                <span>Software & Konten &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Video & Multimedia &emsp;&emsp;&emsp;&ensp; : 12</span>
                <br>
                <span>Embedded System &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Internet of Things &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;: 12</span>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <span>Informasi & Tech (IT) &emsp;&emsp;&emsp; : 12</span>
                <span>Software & Konten &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Video & Multimedia &emsp;&emsp;&emsp;&ensp; : 12</span>
                <br>
                <span>Embedded System &emsp;&emsp;&emsp;&ensp;&ensp;: 12</span>
                <br>
                <span>Internet of Things &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;: 12</span>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Startup</h3>
    </div>
    <!-- /.card-header -->


    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Startup</th>
                    <th>User Daftar</th>
                    <th>Kategori Bidang</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12-09-2021</td>
                    <td>Bandung Technopark</td>
                    <td>SuperAdmin</td>
                    <td>IT, Elektronika, Software, Konten</td>
                    <td>Disable</td>
                </tr>
            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </tfoot> -->
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@section('javascripts')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('admin/dist/js/demo.js')}}"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


@endsection