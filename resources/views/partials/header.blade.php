<header>
    <nav class="navbar navbar-expand-lg shadow-lg border-0" 
    style="background: linear-gradient(135deg, #68d0e2 0%, #88cadf 100%);"
    >
        <div class="container">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center" href="{{ url('/') }}">

                <span class="fs-4">Gestor de Ordenes</span>
            </a>
            
            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto d-flex align-items-center">
                    <button type="button" class="btn btn-custom px-4 py-2" data-bs-toggle="modal" data-bs-target="#createOrderModal">
                        <i class="fas fa-plus me-2"></i>
                        Crear una Orden
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<style>
.btn-custom {
    background-color: transparent;
    border: 2px solid transparent;
    color: white;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-custom:hover {
    background-color: rgb(77, 196, 140);
    color: white;
    transform: translateY(-2px);
}

.btn-custom:focus {
    background-color: rgba(102, 126, 234, 0.2);
    border: 2px solid white;
    color: white;
}

.navbar-brand:hover {
    transform: scale(1.05);
    transition: all 0.3s ease;
}
</style>