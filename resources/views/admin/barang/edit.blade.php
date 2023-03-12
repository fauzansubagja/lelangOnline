@extends('layouts.main')
@section('konten')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Barang</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Barang</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal</label>
                                    <input type="datetime-local" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga Awal</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Deskripsi Barang</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <label>Tambah Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="button" class="btn btn-primary"
                                            style="width: 300px;">Edit</button>
                                    </div>
                                    <div class="d-flex justify-content-center mt-2">
                                        <button type="button" class="btn btn-youtube"
                                            style="width: 300px;">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection