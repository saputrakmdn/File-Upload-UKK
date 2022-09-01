<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UKK TKJ</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
    <style>
        .bd-example-modal-lg .modal-dialog{
            display: table;
            position: relative;
            margin: 0 auto;
            top: calc(50% - 24px);
        }

        .bd-example-modal-lg .modal-dialog .modal-content{
            background-color: transparent;
            border: none;
        }
    </style>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">UKK TKJ</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#upload-file">Upload Jawaban</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{asset('template/assets/img/tkj-logo.png')}}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Teknik Komputer Jaringan</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">SMKN 5 Kab. Tangerang</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="upload-file">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">UPLOAD JAWABAN</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{asset('template/assets/img/portfolio/klaster-1.png')}}" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{asset('template/assets/img/portfolio/klaster-2.png')}}" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{asset('template/assets/img/portfolio/klaster-3.png')}}" alt="..." />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Follow My Instagram</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/saputrakmdn/" target="_blank"><i class="fab fa-fw fa-instagram"></i></a>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
            </div>
            <!-- Footer About Text-->
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>@saputrakmdn</small></div>
</div>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Klaster 1</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <form id="klaster-1">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="nis" type="number" placeholder="Enter your name..." required />
                                    <label for="nis">NIS</label>
                                    <div class="invalid-feedback" >A name is required.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" placeholder="nama" name="nama" required />
                                    <label for="nama">Nama</label>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="file-klaster-1" name="file" required>
                                    <label class="input-group-text" for="file">Upload Jawaban</label>
                                </div>
                                <input type="hidden" name="klaster" value="1">
                                <div class="d-none submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Jawaban Berhasil Di-Upload!</div>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary btn-xl submitButton" type="submit">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Klaster 2</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <form id="klaster-2">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="nis" placeholder="nis" type="number" required />
                                    <label for="nis">NIS</label>
                                    <div class="invalid-feedback" >A name is required.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" placeholder="nama" name="nama" required />
                                    <label for="email">Nama</label>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="file" id="file-klaster-2" required>
                                    <label class="input-group-text" for="file">Upload Jawaban</label>
                                </div>
                                <div class="d-none submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Jawaban Berhasil Di-Upload!</div>
                                    </div>
                                </div>
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary btn-xl submitButton" type="submit">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Klaster 3</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <form id="klaster-3">
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="nis" placeholder="nis" type="number" id="nis" required />
                                    <label for="nis">NIS</label>
                                    <div class="invalid-feedback" >A name is required.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="nama" placeholder="nama" type="text" required />
                                    <label for="email">Nama</label>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="file" id="file-klaster-3" required>
                                    <label class="input-group-text" for="file">Upload Jawaban</label>
                                </div>
                                <div class="d-none submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Jawaban Berhasil Di-Upload!</div>
                                    </div>
                                </div>

                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary btn-xl submitButton" type="submit">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal bd-example-modal-lg" id="loading-modal" data-keyboard="false" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width: 48px">
            <span class="fa fa-spinner fa-spin fa-3x"></span>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('template/js/scripts.js')}}"></script>
<script src="{{asset('vendor/jquery/jquery.js')}}"></script>
<script>
    $('#klaster-1').submit(function (e) {
        e.preventDefault();
        var inputs = $(this).serializeArray();
        var fd = new FormData();
        fd.append("file", $('#file-klaster-1')[0].files[0]);
        fd.append("nama", inputs[1].value);
        fd.append("nis", inputs[0].value);
        fd.append("klaster", 1);
        jawaban(fd);
        return false;
    });

    $('#klaster-2').submit(function (e) {
        e.preventDefault();
        var inputs = $(this).serializeArray();
        var fd = new FormData();
        fd.append("file", $('#file-klaster-2')[0].files[0]);
        fd.append("nama", inputs[1].value);
        fd.append("nis", inputs[0].value);
        fd.append("klaster", 2);
        jawaban(fd);
        return false;
    });

    $('#klaster-3').submit(function (e) {
        e.preventDefault();
        var inputs = $(this).serializeArray();
        var fd = new FormData();
        fd.append("file", $('#file-klaster-3')[0].files[0]);
        fd.append("nama", inputs[1].value);
        fd.append("nis", inputs[0].value);
        fd.append("klaster", 3);
        jawaban(fd);
        return false;
    });


    function jawaban(serialize){
        $('#loading-modal').modal('show');
        $('#loading-modal').css('pointer-events', 'none');
        $('.submitButton').attr("disabled", true);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('jawaban.upload')}}",
            method: "POST",
            data: serialize,
            processData: false,
            contentType: false,
            beforeSend: function () {

            },
            success: function (response) {
                if(response.success == true){
                    $('#loading-modal').removeAttr('style');
                    $('#loading-modal').modal('hide');
                    $('.submitSuccessMessage').removeClass('d-none');
                    resetForm();
                    $('.submitButton').attr("disabled", false);
                    setTimeout(function () {
                        $('.submitSuccessMessage').addClass('d-none');
                    }, 3000);
                }
            }
        })
    }


    function resetForm(){
        $('input[name="nis"]').val('');
        $('input[name="nama"]').val('');
        $('input[name="file"]').val('');
    };

</script>
</body>
</html>
