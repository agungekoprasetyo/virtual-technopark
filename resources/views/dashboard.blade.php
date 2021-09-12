@extends('layouts.application')

@section('custom-css')
<link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
<link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />
<!-- End plugin css for this page -->
<link rel="shortcut icon" href="assets/images/favicon.png" />
<!-- inject:css -->
<link rel="stylesheet" href="assets/css/style.css">
@endsection


@section('content')
<div class="container">
    <div class="row h-100">
        <div class="col-md-8 my-1">
            <div class="carousel h-100">
                <div class="card bg-dark text-white h-100">
                    <img class="card-img h-100" src="https://picsum.photos/600/300" alt="Card image">
                    <div class="card-img-overlay h-100 d-flex flex-column justify-content-end p-0 m-0">
                        <div class="p-2" style="background-color: rgba(0,0,0, .7)">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-1">
            <div class="card card-body p-0 mb-2" style="border-radius: 20px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 text-white p-4 bg-gradient-green" style="border-radius: 20px 0 0 20px;">
                            <div class="text-center">
                                <h1 class="text-center" style="font-size: 37px">25</h1>
                            </div>
                        </div>
                        <div class="col-8 py-2">
                            <h6>TECHNOPARK ICT</h6>
                            <p style="font-size: 11px">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, enim odio? Ea voluptatum sunt quia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body p-0 my-2" style="border-radius: 20px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 text-white p-4 bg-gradient-green" style="border-radius: 20px 0 0 20px;">
                            <div class="text-center">
                                <h1 class="text-center" style="font-size: 37px">25</h1>
                            </div>
                        </div>
                        <div class="col-8 py-2">
                            <h6>STARTUP COMPANY</h6>
                            <p style="font-size: 11px">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, enim odio? Ea voluptatum sunt quia
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card card-body p-0 my-2" style="border-radius: 20px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 text-white p-4 bg-gradient-green" style="border-radius: 20px 0 0 20px;">
                            <div class="text-center">
                                <h1 class="text-center" style="font-size: 37px">25</h1>
                            </div>
                        </div>
                        <div class="col-8 py-2">
                            <h6>KOMUNITAS SOFTWARE & KONTEN</h6>
                            <p style="font-size: 11px">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, enim odio? Ea voluptatum sunt quia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-body p-0 mt-2" style="border-radius: 20px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 text-white p-4 bg-gradient-green" style="border-radius: 20px 0 0 20px;">
                            <div class="text-center">
                                <h1 class="text-center" style="font-size: 37px">25</h1>
                            </div>
                        </div>
                        <div class="col-8 py-2">
                            <h6>DEVELOPER & PESERTA EVENT</h6>
                            <p style="font-size: 11px">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, enim odio? Ea voluptatum sunt quia
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <br>
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="w-100 mb-4" style="border-bottom:2px green solid">
                        <div class="d-flex w-50 bg-gradient-green px-2 pt-2 text-white">
                            <h4>BERITA</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="rotate-img">
                                <img src="../assets/images/magazine/Magzine_8.jpg" alt="banner" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <h2 class="font-weight-600 mb-2">
                                No charges over 2017 battle bus cases
                            </h2>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="fs-15">
                                Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a
                                type specimen book.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="rotate-img">
                                <img src="../assets/images/magazine/Magzine_9.jpg" alt="banner" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <h2 class="font-weight-600 mb-2">
                                Kaine: Trump Jr. may have committed treason
                            </h2>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="fs-15">
                                Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a
                                type specimen book.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="rotate-img">
                                <img src="../assets/images/magazine/Magzine_10.jpg" alt="banner" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <h2 class="font-weight-600 mb-2">
                                South Korea’s Moon Jae-in sworn in vowing to address
                            </h2>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="fs-15">
                                Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a
                                type specimen book.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="rotate-img">
                                <img src="../assets/images/magazine/Magzine_12.jpg" alt="banner" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <h2 class="font-weight-600 mb-2">
                                Kaine: Trump Jr. may have committed treason
                            </h2>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                            <p class="fs-15">
                                Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a
                                type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="w-100" style="border-bottom:2px green solid">
                        <div class="d-flex w-50 bg-gradient-green px-2 pt-2 text-white">
                            <h4>INFORMASI</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Ways to stay social online while in self..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_1.jpg" alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Premier League players join charity..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_2.jpg" alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Premier League players join charity..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_2.jpg" alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Premier League players join charity..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_2.jpg" alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Premier League players join charity..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_2.jpg" alt="banner" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            UK Athletics board changed stance on..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_3.jpg" alt="banner" class="img-fluid" />
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

    <br>
    <div class="card" data-aos="fade-up">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="w-100 mb-4" style="border-bottom:2px green solid">
                            <div class="d-flex w-50 bg-gradient-green px-2 pt-2 text-white">
                                <h4>PROGRAM & EVENT</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="card-deck">
                                <div class="card" style="border-radius: 20px;">
                                    <img class="card-img-top" src="https://picsum.photos/600/300" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Pitching & Funding</h5>
                                        <p class="card-text">Tanggal : 10 September 2021</p>
                                        <p class="card-text">Tempat : Universitas Telkom</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Kementrian Perindustrian</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">
                                    <img class="card-img-top" src="https://picsum.photos/600/300" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Tanggal : 10 September 2021</p>
                                        <p class="card-text">Tempat : Universitas Telkom</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Kementrian Perindustrian</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">
                                    <img class="card-img-top" src="https://picsum.photos/600/300" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Tanggal : 10 September 2021</p>
                                        <p class="card-text">Tempat : Universitas Telkom</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Kementrian Perindustrian</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="card-deck">
                                <div class="card" style="border-radius: 20px;">
                                    <img class="card-img-top" src="https://picsum.photos/600/300" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Pitching & Funding</h5>
                                        <p class="card-text">Tanggal : 10 September 2021</p>
                                        <p class="card-text">Tempat : Universitas Telkom</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Kementrian Perindustrian</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">
                                    <img class="card-img-top" src="https://picsum.photos/600/300" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Tanggal : 10 September 2021</p>
                                        <p class="card-text">Tempat : Universitas Telkom</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Kementrian Perindustrian</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">
                                    <img class="card-img-top" src="https://picsum.photos/600/300" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Tanggal : 10 September 2021</p>
                                        <p class="card-text">Tempat : Universitas Telkom</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Kementrian Perindustrian</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="w-100 mb-4" style="border-bottom:2px green solid">
                            <div class="d-flex w-75 bg-gradient-green px-2 pt-2 text-white">
                                <h4>SOCIAL MEDIA</h4>
                            </div>
                        </div>
                        <a class="twitter-timeline" data-height="750" href="https://twitter.com/Kemenperin_RI?ref_src=twsrc%5Etfw">Tweets by Kemenperin_RI</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br>
    <div class="card" data-aos="fade-up">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="w-100 mb-4" style="border-bottom:2px green solid">
                            <div class="d-flex w-50 bg-gradient-green px-2 pt-2 text-white">
                                <h4>APLIKASI & PROTOTIPE</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-deck">
                                <div class="card" style="border-radius: 20px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Motion Capture</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer bg-success">

                                        <small>Bandung Technopark</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">

                                    <div class="card-body">
                                        <h5 class="card-title">Motion Capture</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer bg-success">

                                        <small>Bandung Technopark</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">

                                    <div class="card-body">
                                        <h5 class="card-title">Motion Capture</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer bg-success">

                                        <small>Bandung Technopark</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="card-deck">
                                <div class="card" style="border-radius: 20px;">

                                    <div class="card-body">
                                        <h5 class="card-title">Motion Capture</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer bg-success">

                                        <small>Bandung Technopark</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">

                                    <div class="card-body">
                                        <h5 class="card-title">Motion Capture</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer bg-success">

                                        <small>Bandung Technopark</small>
                                    </div>
                                </div>
                                <div class="card" style="border-radius: 20px;">

                                    <div class="card-body">
                                        <h5 class="card-title">Motion Capture</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="card-footer bg-success">

                                        <small>Bandung Technopark</small>
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