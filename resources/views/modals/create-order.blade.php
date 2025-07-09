<div class="modal fade" id="createOrderModal" tabindex="-1" aria-labelledby="createOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="createOrderModalLabel">
                    <i class="fas fa-plus-circle me-2"></i>
                    Crear Nuevo Pedido
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createOrderForm" action="{{ url('/pedidos') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Usuario</label>
                                <select class="form-select" id="user_id" name="user_id" required>
                                    <option value="">Seleccionar usuario...</option>
                                    {{-- Aquí cargarías los usuarios desde el controlador --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date_order" class="form-label">Fecha del Pedido</label>
                                <input type="date" class="form-control" id="date_order" name="date_order" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Estado</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="">Seleccionar estado...</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="en_proceso">En_Proceso</option>
                            <option value="completado">Completado</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>
                    Cancelar
                </button>
                <button type="submit" form="createOrderForm" class="btn btn-success">
                    <i class="fas fa-save me-1"></i>
                    Crear Pedido
                </button>
            </div>
        </div>
    </div>
</div>