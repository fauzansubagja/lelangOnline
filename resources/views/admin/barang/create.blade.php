@extends('layouts.main')
@section('konten')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Barang</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Barang</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang"
                                        placeholder="Nama Barang">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal</label>
                                    <input type="datetime-local" class="form-control" name="tgl">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga Awal</label>
                                    <input type="text" class="form-control" name="harga_awal" placeholder="Harga Awal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Deskripsi Barang</label>
                                    <textarea class="form-control" style="height:150px" name="deskripsi_barang"
                                        placeholder="Deskripsi Barang"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="col-sm-12">
                                <label>Tambah Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto_barang" name="foto_barang"
                                        onchange="previewImage()"> <label class="custom-file-label">Choose file</label>
                                </div>
                                <img id="preview" src="#" alt="Preview"
                                    style="display: none; max-width: 200px; margin-top: 20px;">
                                <div class="d-flex justify-content-center mt-4">
                                    <button type="submit" class="btn btn-primary" name="foto_barang"
                                        style="width: 300px;">Simpan</button>
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <a href="/barang" class="btn btn-youtube" style="width: 300px;">Batal</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImage() {
        var fileInput = document.getElementById('foto_barang');
        var preview = document.getElementById('preview');
        var label = document.querySelector('.custom-file-label');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.setAttribute('src', e.target.result);
                preview.style.display = 'block';
            }

            reader.readAsDataURL(fileInput.files[0]);
            label.innerHTML = fileInput.files[0].name;
        }
    }
</script>
@endsection