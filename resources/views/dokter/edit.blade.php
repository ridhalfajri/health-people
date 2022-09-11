@extends('layouts.backend.index')

@push('styles')
    <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Edit Dokter</h4>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Provinsi</label>
                            <div class="col-lg-9 col-xl-8">
                                <select name="provinsi"
                                    class="select2 form-control mb-3 custom-select @error('provinsi') is-invalid @enderror"
                                    style="width: 100%; height:36px;" required>
                                    <option value="">Pilih...</option>
                                    @foreach ($provinsi as $prov)
                                        @if (old('provinsi') == $prov->id || $dokter->provinsi_id == $prov->id)
                                            <option value="{{ $prov->id }}" selected>{{ $prov->nama_provinsi }}</option>
                                        @else
                                            <option value="{{ $prov->id }}">{{ $prov->nama_provinsi }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Nama</label>
                            <div class="col-lg-9 col-xl-8">
                                <input class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    type="text" placeholder="Nama" autocomplete="off" required
                                    value="{{ old('nama') ?? $dokter->nama }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">No Telepon</label>
                            <div class="col-lg-9 col-xl-8">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="las la-phone"></i></span></div>
                                    <input type="text" name="no_telp"
                                        class="form-control @error('no_telp') is-invalid @enderror" placeholder="No Telepon"
                                        aria-describedby="basic-addon1" autocomplete="off" required
                                        value="{{ old('no_telp') ?? $dokter->no_telp }}">
                                    @error('no_telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                            <div class="col-lg-9 col-xl-8">
                                <div class="radio radio-success form-check-inline">
                                    <input type="radio" id="aktif" value="1" name="status">
                                    <label for="aktif">Aktif </label>
                                </div>
                                <div class="radio radio-pink form-check-inline">
                                    <input type="radio" id="no-aktif" value="0" name="status">
                                    <label for="no-aktif"> Non Aktif </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <a href="{{ route('dokter.index') }}" class="btn btn-danger btn-sm">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->

    </div>
    <!--end row-->
@endsection

@push('scripts')
    <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
    <script>
        $(".select2").select2({
            width: '100%'
        });
    </script>
@endpush
