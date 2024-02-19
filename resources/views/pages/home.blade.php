@extends('layouts.main')

@section('title')
    {{-- Start Title Marque --}}
    <div class="row align-items-center">
        <div class="heading-berita col-md-auto bg-primary d-none d-md-flex align-items-center py-2">
            <h5 class="m-0 fw-bold">Berita</h5>
        </div>
        <div class="col col d-flex align-items-center px-0 py-2">
            <marquee>Selamat datang di website kami
                teknologi.visitklaten.com - Sharing Teknologi - Berbagi Ilmu Tentang Teknologi</marquee>
        </div>
    </div>
    {{-- End Title Marque --}}
@endsection

@section('content')
    {{-- Start Carousel --}}
    <div class="card mb-4">
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
    {{-- End Carousel --}}

    {{-- Start News --}}
    <div class="row">
        <div class="col-lg-6">

            {{-- Start Blog Post --}}
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="gambar.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <h2 class="card-title h4">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reiciendis aliquid atque, nulla.</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            {{-- End Blog Post --}}

            {{-- Start Blog Post --}}
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="gambar.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <h2 class="card-title h4">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reiciendis aliquid atque, nulla.</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            {{-- End Blog Post --}}

        </div>

        <div class="col-lg-6">

            {{-- Start Blog Post --}}
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="gambar.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <h2 class="card-title h4">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reiciendis aliquid atque, nulla.</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            {{-- End Blog Post --}}

            {{-- Start Blog Post --}}
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="gambar.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <h2 class="card-title h4">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reiciendis aliquid atque, nulla.</p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            {{-- End Blog Post --}}

        </div>

    </div>

    {{-- Start Pagination --}}
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
    {{-- End Pagination --}}
@endsection
