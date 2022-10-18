@extends('layouts.app')

@section('contenido')

    <section id="home">

        <div class="container-fluid position-relative bg-home vh-100 px-4 px-lg-5">
            <!-- header -->
            <div class="d-flex justify-content-between align-items-center bg- py-4 py-lg-5">
                <div>
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="img-fluid">
                    </a>
                </div>
                <div class="d-none d-lg-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#qs" class="nav-link link-light">Quienes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#productos" class="nav-link link-light">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contacto" class="nav-link link-light">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none">
                    <a href="#offcanvasNav" data-bs-toggle="offcanvas" aria-controls="offcanvasNav" class="link-light fs-1"><i class="bi bi-filter-right"></i></a>
                </div>
            </div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center">
                    <h1 class="display-3 text-white">FABRICAMOS<br><span class="fw-bold">BEBEDEROS <span class="d-none d-lg-inline-block">Y</span> COMEDEROS</span><br>PARA EL SECTOR RURAL</h1>
                    <h2 class="h5 text-white fw-light">GANADO - CABALLOS - CERDOS - OVEJAS</h2>
                    <a href="#productos" class="btn btn-primary fw-bold mt-4" role="button">PRODUCTOS</a> 
                </div>
            </div>
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">
                <i class="bi bi-arrow-down-circle-fill text-white opacity-50 fs-3"></i>
            </div>
        </div>

    </section>

    <section id="qs">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-evenly align-items-center g-5 ">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/qs.jpg') }}" alt="Caballos" class="img-fluid rounded-4 shadow-sm">
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <h3 class="h2 fw-bold mb-4">Quienes Somos</h3>
                        <p class="text-muted">Somos una empresa familiar sólida y reconocida, ubicada en Gowland, partido de Mercedes, Buenos Aires.</p>
                        <p class="text-muted">Con más de 10 años de experiencia, brindando soluciones para el sector rural a través de productos y servicios de reparación que cumplen con las espectativas que nuestros clientes esperan.</p>
                        <p class="text-muted">Seguimos trabajando y creciendo con el mismo entusiasmo que tuvimos al inicio, la investigación y el desarrollo de nuevos y mejores productos son una búsqueda constante y una de las principales prioridades de quienes formamos está empresa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="productos">
        <div class="container-fluid bg-light py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
            <div class="row justify-content-evenly g-5">
                    <div class="col-lg-5">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="position-relative">
                                <img src="{{ asset('img/bebederos.jpg') }}" class="rounded-top img-fluid" alt="Bebederos">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <button type="button" class="btn btn-primary border-white border border-3" data-bs-toggle="modal" data-bs-target="#bebederosModal">
                                        <i class="bi bi-images"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body px-4 pt-5 pb-4 p-lg-5">
                                <h3 class="h2 fw-bold">Bebederos</h3>
                                <p class="text-muted mb-0">Fabricamos bebederos lineales de diferentes tamaños, constituidos en chapa galvanizada.</p>
                                <ul class="list-unstyled lh-lg mt-4 mb-5">
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Largos: 2, 3, 4 y 5 metros</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Ancho: 60 centímetros interno</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Capacidad: 160 litros lineales</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cuerpo en chapa galvanizada</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Marcos en ángulo de hierro 1 1/2'</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Abulonado</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cubre flotante</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Caballetes</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Flotante</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Válvula</li>
                                    <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Varilla (optativo)</li>
                                </ul>
                                <a href="#" class="btn btn-primary w-100 fw-bold">CONSULTAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card border-0 shadow-sm rounded-4 h-100">
                            <div class="position-relative">
                                <img src="{{ asset('img/comederos.jpg') }}" class="rounded-top img-fluid" alt="Comederos">
                                <div class="position-absolute top-100 start-50 translate-middle">
                                    <button type="button" class="btn btn-primary border-white border border-3" data-bs-toggle="modal" data-bs-target="#comederosModal">
                                        <i class="bi bi-images"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body px-4 pt-5 pb-4 p-lg-5">
                                <h3 class="h2 fw-bold">Comederos</h3>
                                <p class="text-muted mb-0">Fabricamos comederos lineales de diferentes tamaños, constituidos en eucaliptus colorado.</p>
                                <ul class="list-unstyled lh-lg mt-4 mb-5">
                                    <li><i class="bi-check-circle-fill text-primary me-2"></i> Largos: 2, 3, 4 y 5 metros</li>
                                    <li><i class="bi-check-circle-fill text-primary me-2"></i> Ancho: 60 centímetros interno</li>
                                    <li><i class="bi-check-circle-fill text-primary me-2"></i> Capacidad: 160 litros lineales</li>
                                    <li><i class="bi-check-circle-fill text-primary me-2"></i> Cuerpo en eucaliptus colorado 1'</li>
                                </ul>
                                <a href="#" class="btn btn-primary w-100 fw-bold">CONSULTAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container-fluid bg-primary py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h4 class="h4 text-white fw-light text-center mb-5">Para más información<br><span class="fw-bold h2">comunicate con nosotros</span></h4>
                <div class="row justify-content-center align-items-center g-3">
                    <div class="col-lg-3">
                        <div class="text-center text-white">
                            <i class="bi bi-whatsapp text-warning fs-1 me-2"></i>
                            <span class="fw-bold d-block">2324516844</span>
                            <span class="fw-light d-block">whatsapp</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center text-white">
                            <i class="bi bi-telephone text-warning fs-1 me-2"></i>
                            <span class="fw-bold d-block">(02324) 51-6844</span>
                            <span class="fw-light d-block">teléfono</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center text-white">
                            <i class="bi bi-envelope text-warning fs-1 me-2"></i>
                            <span class="fw-bold d-block">contacto@bebederosgowland.ar</span>
                            <span class="fw-light d-block">correo electrónico</span>                       
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid bg-dark py-4 py-lg-5">
            <div class="container">
                <p class="text-center text-white mb-0"><span class="fw-bold">Bebederos Gowland</span> © Todos los derechos reservados<br>Desarrollado por <a href="https://pixeno.ar" target="_blank" class="link-warning text-decoration-none">Pixeno</a></p>
            </div>
        </div>
    </section>

    @include('includes.boton-wp')

    @include('includes.offcanvas')

    @include('includes.modal-bebederos')

    @include('includes.modal-comederos')


@endsection