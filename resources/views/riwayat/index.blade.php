@extends('layouts.backend.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Riwayat</h4>
                    <p class="text-muted mb-0">
                        Riwayat vaksin anda
                    </p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Jenis Vaksin</th>
                                    <th>Vaksin ke</th>
                                    <th>Alamat Vaksin</th>
                                    <th>Tanggal Vaksin</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sinovac</td>
                                    <td>1</td>
                                    <td>Puskesmas Dramaga</td>
                                    <td>01-01-2022</td>
                                    <td class="text-right">
                                        <a href="#" data-toggle="modal" data-target="#exampleModalWarning"><i
                                                class="fas fa-eye"></i></a>
                                        <div class="modal fade" id="exampleModalWarning" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalWarning1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning">
                                                        <h6 class="modal-title m-0 text-white" id="exampleModalWarning1">
                                                            Detail</h6>
                                                        <button type="button" class="close " data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true"><i
                                                                    class="la la-times text-white"></i></span>
                                                        </button>
                                                    </div>
                                                    <!--end modal-header-->
                                                    <div class="modal-body">
                                                        <div class="media mb-3 text-left">
                                                            <img src="{{ asset('assets/images/widgets/project1.jpg') }}"
                                                                alt="" class="thumb-md rounded-circle">
                                                            <div class="media-body align-self-center text-truncate ml-3">
                                                                <h4 class="m-0 font-weight-semibold text-dark font-16">Tiket
                                                                    Vaksin</h4>
                                                                <p class="text-muted  mb-0 font-13"><span
                                                                        class="text-dark">Nama : </span>Pandeka Setan</p>
                                                            </div>
                                                            <!--end media-body-->
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-bordered mb-0 table-centered text-left">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Jadwal</th>
                                                                        <td>01 September 2022</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Jenis</th>
                                                                        <td>Moderna</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Alamat</th>
                                                                        <td>
                                                                            Jl. Raya Semplak Perum Terra Griya Blok A12.
                                                                            Bogor Barat, Kota Bogor, Jawa Barat, ID, 16114
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end /table-->
                                                        </div>
                                                        <!--end /tableresponsive-->
                                                        <hr class="hr-dashed">
                                                        <div class="row my-3">
                                                            <div class="col text-center">
                                                                <strong>Nomor Antrian</strong>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <strong class="display-2">101</strong>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-dashed">
                                                        <p class=" text-center mt-4 mb-1"> <span
                                                                class="font-weight-bold text-danger">Diwajibkan</span><br>
                                                            untuk membawa fotokopi KTP atau Kartu Keluarga anda!</p>
                                                    </div>
                                                    <!--end modal-body-->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                    <!--end modal-footer-->
                                                </div>
                                                <!--end modal-content-->
                                            </div>
                                            <!--end modal-dialog-->
                                        </div>
                                        <!--end modal-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sinovac</td>
                                    <td>2</td>
                                    <td>Rumah Sakit Umum Daerah Kota Bogor</td>
                                    <td>05-05-2022</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Moderna</td>
                                    <td>3</td>
                                    <td>Rumah Sakit Universitasi Indonesia</td>
                                    <td>25-10-2022</td>
                                    <td class="text-right">
                                        <a href="#"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end /table-->
                    </div>
                    <!--end /tableresponsive-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->

    </div> <!-- end row -->
@endsection
