@extends('layouts.main')
@section('konten')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Barang</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">View List</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="assets/images/product/2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">
                                <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
                                <div class="comment-review star-rating">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                        <li><i class="fa fa-star-half-empty"></i></li>
                                    </ul>
                                    <span class="price" style="font-size: 16px; display: inline-block;">Rp.
                                        300.000.000</span>
                                </div>
                                <p>Availability: <span class="item"> In stock <i
                                            class="fa fa-check-circle text-success"></i></span></p>
                                <p>Product code: <span class="item">0405689</span> </p>
                                <p>Brand: <span class="item">Lee</span></p>
                                <p class="text-content">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- review -->
        <div class="modal fade" id="reviewModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Review</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="text-center mb-4">
                                <img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
                            </div>
                            <div class="form-group">
                                <div class="rating-widget mb-4 text-center">
                                    <!-- Rating Stars Box -->
                                    <div class="rating-stars">
                                        <ul id="stars">
                                            <li class="star" title="Poor" data-value="1">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="Fair" data-value="2">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="Good" data-value="3">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="Excellent" data-value="4">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                            <li class="star" title="WOW!!!" data-value="5">
                                                <i class="fa fa-star fa-fw"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                            </div>
                            <button class="btn btn-success btn-block">RATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection