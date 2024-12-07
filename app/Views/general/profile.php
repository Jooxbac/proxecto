<div class="container">
    <div class="row g-5">
        <div class="col-md-3 p-0 pe-3">
            <aside>
                <main class="d-flex flex-nowrap">
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <svg class="bi pe-none me-2" width="40" height="32">
                                <use xlink:href="#bootstrap" />
                            </svg>
                            <span class="fs-4">Sidebar</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#home" />
                                    </svg>
                                    Meter iconas aquí
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#home" />
                                    </svg>
                                    Datos básicos
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#speedometer2" />
                                    </svg>
                                    Configuración avanzada
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#grid" />
                                    </svg>
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#people-circle" />
                                    </svg>
                                    Cerrar sesión
                                </a>
                            </li>
                        </ul>
                        <hr>
                    </div>
                </main>
            </aside>
        </div>

        <div class="col-md-9 px-1">

            <article class="card mb-4">
                <div class="card-header">
                    <h4>Datos del perfil de <?php echo auth()->user() ? auth()->user()->username : "invitado" ?></h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="alert alert-success" role="alert">
                                Mensaje de registro correcto, o pantallazo de resgistro correcto con link a tu perfil.
                            </div>
                            <div>
                                <p>No caso de meter imaxes...</p>
                                <div class="mb-3">
            <label class="form-label" for="customFile">Upload</label>
            <input type="file" class="form-control" id="customFile">
          </div>
                            </div>
                            <p>Formularios con datos generales</p>
                            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                                <input type="search" class="form-control form-control-dark mb-4" placeholder="" aria-label="Search">
                                <input type="search" class="form-control form-control-dark mb-4" placeholder="" aria-label="Search">
                                <input type="search" class="form-control form-control-dark mb-4" placeholder="" aria-label="Search">
                                <input type="search" class="form-control form-control-dark mb-4" placeholder="" aria-label="Search">
                                <input type="search" class="form-control form-control-dark mb-4" placeholder="" aria-label="Search">
                                <input type="search" class="form-control form-control-dark mb-4" placeholder="" aria-label="Search">
                                <button type="submit" class="btn btn-primary mb-4">Guardar cambios</button>
                            </form>

                        </div>

                    </li>
                </ul>
            </article>


        </div>
    </div>
</div>