@extends('layouts.backend.index')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar</h4>
                    <p class="text-muted mb-0">Pastikan data yang anda isi sudah benar.</p>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-3">Tanggal Vaksin <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="10/24/1984">
                        </div>
                        <div class="col-md-6">
                            <label class="mb-3">Jenis Vaksin <span class="text-danger">*</span></label>
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                <option>Pilih...</option>
                                <option value="1">SINOVAC</option>
                                <option value="2">ASTRAZENECA</option>
                                <option value="3">SINOPHARM</option>
                                <option value="4">MODERNA</option>
                                <option value="5">PFIZER</option>
                                <option value="6">SPUTNIK V</option>
                                <option value="7">JANSSEN</option>
                                <option value="8">CONVIDECIA</option>
                            </select>
                        </div>
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-md-6">
                            <label class="my-3">Vaksin di Rumah <span class="text-danger">*</span></label>
                            <br>
                            <input type="radio" name="tempat_vaksin" id="ya">
                            <label for="ya" class="mr-3">Ya</label>
                            <input type="radio" name="tempat_vaksin" id="tidak">
                            <label for="tidak" class="mr-3">Tidak</label>
                        </div>
                        <div class="col-md-6">
                            <label class="my-3">Vaksin ke <span class="text-danger">*</span></label>
                            <br>
                            <input type="radio" name="gelombang_vaksin" id="vaksin_1">
                            <label for="vaksin_1" class="mr-3">Vaksin 1</label>
                            <input type="radio" name="gelombang_vaksin" id="vaksin_2">
                            <label for="vaksin_2" class="mr-3">Vaskin 2</label>
                            <input type="radio" name="gelombang_vaksin" id="booster_1">
                            <label for="booster_1" class="mr-3">Booster 1</label>
                            <input type="radio" name="gelombang_vaksin" id="booster_2">
                            <label for="booster_2" class="mr-3">Booster 2</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="my-3">Provinsi <span class="text-danger">*</span></label>
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                <option>Pilih...</option>
                                <option value="11">ACEH</option>
                                <option value="12">SUMATERA UTARA</option>
                                <option value="13">SUMATERA BARAT</option>
                                <option value="14">R I A U</option>
                                <option value="15">J A M B I</option>
                                <option value="16">SUMATERA SELATAN</option>
                                <option value="17">BENGKULU</option>
                                <option value="18">LAMPUNG</option>
                                <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                <option value="21">KEPULAUAN RIAU</option>
                                <option value="31">DKI JAKARTA</option>
                                <option value="32">JAWA BARAT</option>
                                <option value="33">JAWA TENGAH</option>
                                <option value="34">DI YOGYAKARTA</option>
                                <option value="35">JAWA TIMUR</option>
                                <option value="36">B A N T E N</option>
                                <option value="51">BALI</option>
                                <option value="52">NUSA TENGGARA BARAT</option>
                                <option value="53">NUSA TENGGARA TIMUR</option>
                                <option value="61">KALIMANTAN BARAT</option>
                                <option value="62">KALIMANTAN TENGAH</option>
                                <option value="63">KALIMANTAN SELATAN</option>
                                <option value="64">KALIMANTAN TIMUR</option>
                                <option value="71">SULAWESI UTARA</option>
                                <option value="73">SULAWESI SELATAN</option>
                                <option value="74">SULAWESI TENGGARA</option>
                                <option value="75">GORONTALO</option>
                                <option value="76">SULAWESI BARAT</option>
                                <option value="81">MALUKU</option>
                                <option value="82">MALUKU UTARA</option>
                                <option value="94">PAPUA</option>
                                <option value="91">PAPUA BARAT</option>
                                <option value="72">SULAWESI TENGAH</option>
                                <option value="65">KALIMANTAN UTARA</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="my-3">Alamat<span class="text-danger">*</span></label>
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                <option>Pilih...</option>
                                <option>Jl. Raya Semplak Perum Terra Griya Blok A12. Bogor Barat, Kota Bogor, Jawa Barat
                                    BOGOR BARAT - KOTA, KOTA BOGOR, JAWA BARAT, ID, 16114</option>
                                <option>Kost Rantiang Badaun, Jalan Limau Manis, Limau Manis, Pauh
                                    PAUH, KOTA PADANG, SUMATERA BARAT, ID, 25161</option>
                                <option>Komplek Villa Gunung, Jalan Gunung Ledang, Tabiang Banda Gadang, Nanggalo (Blok C7)
                                    NANGGALO, KOTA PADANG, SUMATERA BARAT, ID, 25144</option>
                                <option>Jln.M.Yamin komplek munggu dama indah No. 69
                                    LIMA KAUM, KAB. TANAH DATAR, SUMATERA BARAT, ID, 27213</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-3">
                            <div class="card-footer button-items">
                                <button type="button" class="btn btn-primary waves-effect waves-light float-right"><i
                                        class="mdi mdi-check-all mr-2"></i>Simpan</button>
                                <button type="button" class="btn btn-secondary waves-effect waves-light float-right"><i
                                        class="mdi mdi-keyboard-backspace mr-2"></i>Batal</button>
                            </div>
                        </div>
                    </div>
                    <!--end card-body-->
                </div><!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
