@extends('layouts.main')
@section('konten')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Barang</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="first">
                                    <img class="img-fluid" src="{{ asset('image/'.$barang->foto_barang) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <!--Tab slider End-->
                        <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                            <div class="product-detail-content">
                                <!--Product details-->
                                <div class="new-arrival-content pr">
                                    <h4>{{ $barang->nama_barang }}</h4>
                                    <div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <span class="review-text">(34 reviews) / </span><a class="product-review"
                                            href="" data-toggle="modal" data-target="#reviewModal">Write a review?</a>
                                    </div>
                                    <div class="d-table mb-2">
                                        <p class="price float-left d-block">Rp.{{ number_format($barang->harga_awal, 0,
                                            ',', '.') }}</p>
                                    </div>
                                    <p>Tanggal: <span class="item"> {{ $barang->tgl }} </span>
                                    </p>
                                    <p>Kode Barang: <span class="item">0405689</span> </p>
                                    <p>Grade: <span class="item">A</span> </p>
                                    <p class="text-content">{{ $barang->deskripsi_barang}}</p>
                                    <!--Quanatity End-->
                                    <div class="shopping-cart mt-3">
                                        <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-youtube"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection