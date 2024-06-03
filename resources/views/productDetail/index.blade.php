@extends('layout.template')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row center-block text-center">
                            <div class="col-12 justify-content-center">
                                <i class="fa-regular fa-circle-check font-weight-bold h1"></i>
                                <h4>Item added to your cart!</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('/images/001.jpg') }}" alt="" class="img-fluid">

                            </div>
                            <div class="col-9 text-bold">
                                <p> Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey
                                    I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)
                                </p>
                                <div class="container-block">
                                    <div>price: $699</div>

                                </div>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-danger mr-2 " data-dismiss="modal">Back to shopping</button>
                                <button type="button" class="btn btn-warning ">Proceed to checkout</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 pe-5">
                <img src="{{ asset('/images/001.jpg') }}" alt="" class="img-fluid">

            </div>

            <div class="col-6 ps-5">
                <div class="star">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>

                </div>
                <div class="txtProductName">
                    <h4>Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)</h4>
                </div>

                <div>
                    <ul>
                        <li> CPU: Intel® Core™ I3-1215U</li>
                        <li>OS: Windows® 11 Home License</li>
                        <li>RAM: 8GB DDR4 (4266Mhz) Onboard</li>
                        <li>Storage: SSD 256GB M.2</li>
                        <li>Graphic: Intel® UHD Graphics</li>
                        <li>Display: 14" WUXGA (1920x1200)</li>
                        <li>Battery: Integrated 52.5Wh</li>
                        <li>Weight: 1.5 kg</li>
                        <li>Warranty: 1 year</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-3 ">
                        price <br>
                        Discount Price:<br>
                        Quantity:

                    </div>

                    <div class="col-3">
                        <div>$566</div>
                        <div class="fs-3 text-danger">$699</div>
                        <div> 1</div>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div justify-content-between>
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#exampleModal">Add to cart</button>
                            <button type="button" class="btn btn-danger">Buy now</button>
                        </div>

                    </div>
                    <div class="col-12 pt-3">
                        <button type="button" class="btn btn-outline-primary">Add to wishlist</button>
                        <button type="button" class="btn btn-outline-secondary">Add to compare</button>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
