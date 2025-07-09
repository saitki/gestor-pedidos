<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <i class="fas fa-shopping-cart me-2"></i>
                Gestor de Pedidos
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createOrderModal">
                        <i class="fas fa-plus-circle me-1"></i>
                        Crear Pedido
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>