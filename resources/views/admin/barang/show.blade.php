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
                                    <p>Availability: <span class="item"> In stock <i
                                                class="fa fa-shopping-basket"></i></span>
                                    </p>
                                    <p>Product code: <span class="item">0405689</span> </p>
                                    <p>Brand: <span class="item">Lee</span></p>
                                    <p>Product tags:&nbsp;&nbsp;
                                        <span class="badge badge-success light">bags</span>
                                        <span class="badge badge-success light">clothes</span>
                                        <span class="badge badge-success light">shoes</span>
                                        <span class="badge badge-success light">dresses</span>
                                    </p>
                                    <p class="text-content">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable.
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                        isn't anything embarrassing.</p>
                                    <!--Quantity start-->
                                    <div class="col-2 px-0">
                                        <input type="number" name="num" class="form-control input-btn input-number"
                                            value="1">
                                    </div>
                                    <!--Quanatity End-->
                                    <div class="shopping-cart mt-3">
                                        <a class="btn btn-primary btn-lg" href="javascript:void(0)"><i
                                                class="fa fa-shopping-basket mr-2"></i>Add
                                            to cart</a>
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