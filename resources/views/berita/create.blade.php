@extends('layouts.backend.index')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Berita</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-3">Tanggal Berita <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3">Judul <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="mb-3">Deskripsi <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="editor" name="editor"></textarea>

                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@push('scripts')
    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
