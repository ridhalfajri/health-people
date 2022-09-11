@extends('layouts.backend.index')

@push('styles')
    <!-- DataTables -->
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert -->
    <link href="{{ asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Lokasi Vaksin</h4>
                            <p class="text-muted mb-0">
                                Daftar Lokasi
                            </p>
                        </div>
                        <div class="col">
                            <a href="{{ route('lokasi.create') }}"
                                class="btn btn-primary waves-effect waves-light float-right mb-3"><i
                                    class="mdi mdi-plus-circle-outline mr-2"></i>Tambah Lokasi</a>
                        </div>
                    </div>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <table id="tbl-lokasi" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tempat Vaksin</th>
                                <th>Alamat Lengkap</th>
                                <th>Provinsi</th>
                                <th>No Telepon</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($lokasi_vaksin as $lok)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $lok->nama_tempat }}</td>
                                    <td>{{ $lok->alamat_lengkap }}</td>
                                    <td>{{ $lok->provinsi->nama_provinsi }}</td>
                                    <td>{{ $lok->no_telp }}</td>
                                    <td>
                                        @if ($lok->status == 1)
                                            <span class="badge badge-pill badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">Non Aktif</span>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('lokasi.edit', $lok->id) }}">
                                            <i class="las la-pen text-info font-18"></i>
                                        </a></td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@push('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.datatable.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tbl-lokasi').DataTable();
        });
    </script>
    <!-- Sweet-Alert  -->
    <script src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    @if (session()->has('tambah'))
        <script>
            Swal.fire(
                'Sukses!',
                'Dokter berhasil ditambahkan!',
                'success'
            )
        </script>
    @endif
    @if (session()->has('edit'))
        <script>
            Swal.fire(
                'Sukses!',
                'Dokter berhasil diubah!',
                'success'
            )
        </script>
    @endif
@endpush
