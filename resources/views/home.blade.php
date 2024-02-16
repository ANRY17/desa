@extends('layouts.main')

@section('container')
    <!-- Page content-->
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <div class="card mb-4">
                <!-- Featured blog post-->
                <div id="carouselExampleCaptions" class="carousel slide carousel-sm" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://dpmpd.landakkab.go.id/asset/foto_desa/foto-desa.jpg" class="d-block w-100"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/jawapos/2020/10/desa-bisa-kaya-dari-wisata.jpg"
                                class="d-block w-100" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://kuansingterkini.com/application/views/web/berita/73161759470-hipwee.jpg"
                                class="d-block w-100" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                            aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="mb-4">
                <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
                    <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link active text-center" id="latest-tab" data-bs-toggle="tab"
                            data-bs-target="#latest" type="button" role="tab" aria-controls="latest"
                            aria-selected="true">latest</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link text-center" id="popular-tab" data-bs-toggle="tab"
                            data-bs-target="#popular" type="button" role="tab" aria-controls="popular"
                            aria-selected="false">Popular</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link text-center" id="trending-tab" data-bs-toggle="tab"
                            data-bs-target="#trending" type="button" role="tab" aria-controls="trending"
                            aria-selected="false">Trending</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                        <div class="card mb-3 custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto pr-md-0 mb-3 mb-md-0">
                                        <div class="custom-card-img-wrapper text-center h-100">
                                            <img src="https://via.placeholder.com/80"
                                                class="custom-card-img img-fluid h-100 w-100 min-img-width"
                                                alt="Placeholder image" style="max-width: 320px;">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-md-flex flex-column justify-content-between h-100">
                                            <div class="d-flex flex-wrap gap-2">
                                                <div class="col-auto category">Kategori 1</div>
                                                <div class="col-auto category">Kategori 2</div>
                                                <div class="col-auto category">Kategori 3</div>
                                            </div>
                                            <div>
                                                <h5 class="card-title mt-2 mb-0">Berita 1</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto pr-md-0 mb-3 mb-md-0">
                                        <div class="custom-card-img-wrapper" style="height: 100%; text-align: center;">
                                            <img src="https://via.placeholder.com/80"
                                                class="custom-card-img img-fluid h-100 w-100 min-img-width"
                                                alt="Placeholder image" style="max-width: 320px;">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-md-flex flex-column justify-content-between h-100">
                                            <div class="d-flex flex-wrap gap-2">
                                                <div class="col-auto category">Kategori 1</div>
                                                <div class="col-auto category">Kategori 2</div>
                                                <div class="col-auto category">Kategori 3</div>
                                            </div>
                                            <div>
                                                <h5 class="card-title mt-2 mb-0">Berita 1</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto pr-md-0 mb-3 mb-md-0">
                                        <div class="custom-card-img-wrapper" style="height: 100%; text-align: center;">
                                            <img src="https://via.placeholder.com/80"
                                                class="custom-card-img img-fluid h-100 w-100 min-img-width"
                                                alt="Placeholder image" style="max-width: 320px;">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-md-flex flex-column justify-content-between h-100">
                                            <div class="d-flex flex-wrap gap-2">
                                                <div class="col-auto category">Kategori 1</div>
                                                <div class="col-auto category">Kategori 2</div>
                                                <div class="col-auto category">Kategori 3</div>
                                            </div>
                                            <div>
                                                <h5 class="card-title mt-2 mb-0">Berita 1</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-auto pr-md-0 mb-3 mb-md-0">
                                        <div class="custom-card-img-wrapper" style="height: 100%; text-align: center;">
                                            <img src="https://via.placeholder.com/80"
                                                class="custom-card-img img-fluid h-100 w-100 min-img-width"
                                                alt="Placeholder image" style="max-width: 320px;">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-md-flex flex-column justify-content-between h-100">
                                            <div class="d-flex flex-wrap gap-2">
                                                <div class="col-auto category">Kategori 1</div>
                                                <div class="col-auto category">Kategori 2</div>
                                                <div class="col-auto category">Kategori 3</div>
                                            </div>
                                            <div>
                                                <h5 class="card-title mt-2 mb-0">Berita 1</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Konten untuk tab Profile -->
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Konten untuk tab Contact -->
                    </div>
                </div>
            </div>

            <!-- Categories widget-->
            <div class="mb-4">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
            <!-- Side widget-->
            <div class="mb-4">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 g-4">
                    <div class="col mb-2">
                        <div class="card embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="card embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="card embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="card embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col mb-2">
                        <div class="card embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="card embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
