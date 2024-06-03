@extends('layout.template')
@section('content')
    <div class="row">
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
        <div class="col-9">
            <div class="text-left">
                <div class="d-flex align-items-center">
                    <div class="mr-2">
                        <h1 class="h6 fw-600 text-body">
                                                                        All Products
                                                                </h1>
                        <input type="hidden" name="q" value="">
                    </div>
                    <div class="form-group ml-auto mr-0 w-200px d-none d-xl-block">

                    <label class="mb-0 opacity-50">Brands</label>
                        <select class="form-control form-control-sm" data-live-search="true" name="brand" onchange="filter()">
                            <option value="">All Brands</option>
                                                                        <option value="acer-laptop-cambodia">Acer</option>
                                                                        <option value="apple">Apple</option>
                                                                        <option value="asus-laptop-desktop-cambodia">Asus</option>
                                                                        <option value="anitech-cambodia-computer-accessories">Anitech</option>
                                                                        <option value="dell">Dell</option>
                                                                        <option value="epson">Epson</option>
                                                                        <option value="eg">EG</option>
                                                                        <option value="hp">HP</option>
                                                                        <option value="lenovo">Lenovo</option>
                                                                        <option value="logitech">Logitech</option>
                                                                        <option value="microsoft">Microsoft</option>
                                                                        <option value="prolink">Prolink</option>
                                                                        <option value="razer">Razer</option>
                                                                        <option value="toshiba">Toshiba</option>
                                                                        <option value="transcend">Transcend</option>
                                                                        <option value="vaio">VAIO</option>
                                                                        <option value="western-digital-0unwh">Western Digital</option>
                                                                        <option value="nec-qul1s">NEC</option>
                                                                        <option value="apollo-sneyi">APOLLO</option>
                                                                        <option value="screen-innovations-typ26">Screen Innovations</option>
                                                                        <option value="universal-9tmut">Universal</option>
                                                                        <option value="ptc-opfa7">PTC</option>
                                                                        <option value="hikvision-mevdy">Hikvision</option>
                                                                        <option value="aoc-cambodia-all-in-one-desktop">AOC</option>
                                                                        <option value="ubiquiti">Ubiquiti</option>
                                                                        <option value="cisco-v6bqi">Cisco</option>
                                                                        <option value="planet-5ibcn">Planet</option>
                                                                        <option value="cooler-master-2qp5u">Cooler Master</option>
                                                                        <option value="tally-dascom-isqs7">Tally DASCOM</option>
                                                                        <option value="Intel-b5ECb">Intel</option>
                                                                        <option value="ONIKUMA-GAMING-KsFSk">ONIKUMA GAMING</option>
                                                                        <option value="xinzhen-oj4px">XINZHEN</option>
                                                                        <option value="phoinkas-np8h7">PHOINKAS</option>
                                                                </select>
                    </div>
                    <div class="form-group w-200px ml-0 ml-xl-3">
                        <label class="mb-0 opacity-50">Sort by</label>
                        <select class="form-control form-control-sm" name="sort_by" onchange="filter()">
                            <option value="newest">Newest</option>
                            <option value="oldest">Oldest</option>
                            <option value="price-asc">Price low to high</option>
                            <option value="price-desc">Price high to low</option>
                        </select>
                    </div>
                    <div class="d-xl-none ml-auto ml-xl-3 mr-0 form-group align-self-end">
                        <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                            <i class="la la-filter la-2x"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
@endsection
