@extends('layout')

@section('content')
            <!-- Categories Section -->
            <section class="py-2">
                <div class="text-center px-3 col-lg-12 mt-5 ">
                    <div class="row">
                        <h1 class="body-title">Categorias</h1>
                        <div class="col-sm-12">
                            <span class="vl"><a href ="#" class="category-btn"><i class="bi bi-check-circle"></i> Alimento</a></span>
                            <span class="vl"><a href ="#" class="category-btn"><i class="bi bi-check-circle"></i> Snacks</a></span>
                            <span class="vl"><a href ="#" class="category-btn"><i class="bi bi-check-circle"></i> Farmapet</a></span>
                            <span class="vl"><a href ="#" class="category-btn"><i class="bi bi-check-circle"></i> Cuidado e Higiene</a></span>
                            <span class="vl"><a href ="#" class="category-btn"><i class="bi bi-check-circle"></i> Juguetes</a></span>
                            <span class="vl"><a href ="#" class="category-btn"><i class="bi bi-check-circle"></i> Accesorios</a></span>
                            <span class="vl"><a href ="#" class="category-btn"><i class="bi bi-check-circle"></i> Para PetLovers</a></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Brands Sliders Section -->
            <section class="py-2">
                <div class="text-center  px-3 col-lg-12 mt-5">
                    <h1 class="body-title">Marcas destacadas</h1>
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel-brand  slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/canito.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/equilibrio.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/eukanuba.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/hill.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/max.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/royal.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/salvaje.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="assets/brands/wholebar.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Brand Secion -->

            <!-- Section Products -->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5  row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[0][0] ?></h5>
                                        <!-- Product price-->
                                        $<?= $products[0][1] ?> - $<?= $products[0][2] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-warning text-white position-absolute" style="top: 0.5rem; right: 0.5rem">15%</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[1][0] ?></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$<?= $products[1][1] ?></span>
                                        $<?= $products[1][2] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-warning text-white position-absolute" style="top: 0.5rem; right: 0.5rem">20%</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[2][0] ?></h5>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$<?= $products[2][1] ?></span>
                                        $<?= $products[2][2] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[3][0] ?></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        $<?= $products[3][1] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-warning  text-white position-absolute" style="top: 0.5rem; right: 0.5rem">16%</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[4][0] ?></h5>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$<?= $products[4][1] ?></span>
                                        $<?= $products[4][2]?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[5][0] ?></h5>
                                        <!-- Product price-->
                                        $<?= $products[5][1] ?> - $<?= $products[5][2] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-warning text-white position-absolute" style="top: 0.5rem; right: 0.5rem">20%</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[6][0] ?></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$<?= $products[6][1] ?></span>
                                        $<?= $products[6][2] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $products[7][0] ?></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        $<?= $products[7][1] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al carrito</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

 @stop