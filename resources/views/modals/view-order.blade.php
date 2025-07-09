<div class="modal fade" id="viewOrderModal" tabindex="-1" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="viewOrderModalLabel">
                    <i class="fas fa-eye me-2"></i>
                    Detalles del Pedido
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre del Usuario:</label>
                            <p class="mb-0" id="viewUserName"></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Fecha del Pedido:</label>
                            <p class="mb-0" id="viewOrderDate"></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Estado actual del Pedido:</label>
                            <p class="mb-0">
                                <span id="viewOrderStatus" class="badge"></span>
                            </p>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>