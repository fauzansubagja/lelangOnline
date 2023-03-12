@extends('layouts.main')
@section('konten')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Barang</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
        </ol>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
        <span><i class="mdi mdi-check"></i></span>
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button> {{ $message }}
    </div>
    @endif
    @if(session('success'))
    <script>
        Swal.fire({
         icon: 'success',
         title: 'Berhasil',
         text: '{{ session('success') }}',
      })
    </script>
    @endif
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Barang
                        <a href="{{ route('barang.create') }}" class="btn btn-primary mt-3 mr-3"
                            style="position: absolute; top: 0; right: 0;">Tambah</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example4" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal</th>
                                    <th>Harga Awal</th>
                                    <th>Deskripsi Barang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($barang as $brg)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $brg->nama_barang }}</td>
                                    <td>{{ $brg->tgl }}</td>
                                    <td>Rp.{{ number_format($brg->harga_awal, 0, ',', '.') }}</td>
                                    <td>{{ $brg->deskripsi_barang }}</td>
                                    <td>
                                        <form action="{{ route('barang.destroy', $brg->id) }}" method="POST"
                                            id="delete-form">
                                            <a class="btn btn-info" href="{{ route('barang.show', $brg->id) }}"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn btn-primary" href="{{ route('barang.edit', $brg->id) }}"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-youtube" id="delete-button"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('delete-button').addEventListener('click', function() {
      Swal.fire({
         title: 'Anda yakin ingin menghapus data ini?',
         text: "Data yang dihapus tidak dapat dikembalikan!",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Ya, hapus data!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
            document.getElementById('delete-form').submit();
         }
      });
   });
</script>
@endsection