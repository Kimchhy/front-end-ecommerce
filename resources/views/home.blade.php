@extends('layout.template')
@section('content')
<div class="col-3">
    <ul class="list-group">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
        <li class="list-group-item">And a fifth one</li>
        <li class="list-group-item">And a fifth one</li>
        <li class="list-group-item">And a fifth one</li>

      </ul>
</div>
{{-- ====================Name Slide==================== --}}
<div class="col-9">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('/images/slide1.jpg') }}" class="d-block w-100 rounded rounded-4" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/images/slide2.png') }}" class="d-block w-100 rounded rounded-4" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/images/silde3.jpg') }}" class="d-block w-100 rounded rounded-4" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/images/silde4.png') }}" class="d-block w-100 rounded rounded-4" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
{{-- ====================Top4 product==================== --}}
<div class="row pt-2">
    <div class="col-3">
        <a href="{{ route('productIndex') }}"><img src="{{ asset('/images/001.jpg') }}" alt="" class="img-fluid rounded rounded-4"></a>
    </div>
    <div class="col-3">
        <img src="{{ asset('/images/001.jpg') }}" alt="" class="img-fluid rounded rounded-4">
    </div>
    <div class="col-3">
        <img src="{{ asset('/images/001.jpg') }}" alt="" class="img-fluid rounded rounded-4">
    </div>
    <div class="col-3">
        <img src="{{ asset('/images/001.jpg') }}" alt="" class="img-fluid rounded rounded-4">
    </div>
</div>
{{-- ====================Name product==================== --}}
<div class="row pt-3">
    <div class="col-2">
        <div class="card position-relative" >
            <span class="position-absolute top-0 ms-4 mt-2  fs-5 translate-middle badge rounded-end  bg-danger">
                -$80
                <span class="visually-hidden">unread messages</span>
              </span>
            <img src="{{ asset('/images/002.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="text-danger fw-bold">$500.00</h3>
                <p class="d-flex justify-content-between">
                    <span >
                        LLSS-1343
                    </span>
                    <span >
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </p>
                <p>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </p>
              <p class="card-text">Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)</p>
            </div>
          </div>
    </div>
    <div class="col-2">
        <div class="card" >
            <img src="{{ asset('/images/002.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="text-danger fw-bold">$500.00</h3>
                <p class="d-flex justify-content-between">
                    <span >
                        LLSS-1343
                    </span>
                    <span >
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </p>
                <p>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </p>
              <p class="card-text">Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)</p>
            </div>
          </div>
    </div>
    <div class="col-2">
        <div class="card" >
            <img src="{{ asset('/images/002.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="text-danger fw-bold">$500.00</h3>
                <p class="d-flex justify-content-between">
                    <span >
                        LLSS-1343
                    </span>
                    <span >
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </p>
                <p>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </p>
              <p class="card-text">Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)</p>
            </div>
          </div>
    </div>
    <div class="col-2">
        <div class="card" >
            <img src="{{ asset('/images/002.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="text-danger fw-bold">$500.00</h3>
                <p class="d-flex justify-content-between">
                    <span >
                        LLSS-1343
                    </span>
                    <span >
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </p>
                <p>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </p>
              <p class="card-text">Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)</p>
            </div>
          </div>
    </div>
    <div class="col-2">
        <div class="card" >
            <img src="{{ asset('/images/002.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="text-danger fw-bold">$500.00</h3>
                <p class="d-flex justify-content-between">
                    <span >
                        LLSS-1343
                    </span>
                    <span >
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </p>
                <p>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </p>
              <p class="card-text">Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)</p>
            </div>
          </div>
    </div>
    <div class="col-2">
        <div class="card" >
            <img src="{{ asset('/images/002.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="text-danger fw-bold">$500.00</h3>
                <p class="d-flex justify-content-between">
                    <span >
                        LLSS-1343
                    </span>
                    <span >
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </span>
                </p>
                <p>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </p>
              <p class="card-text">Lenovo IdeaPad Flex5 (2-in-1 Touch) 14IAU7-Storm Grey I3-1215U-8GB-256GB-UMA-14WUXGA-FP-Pen(1Y)</p>
            </div>
          </div>
    </div>

</div>
@endsection
