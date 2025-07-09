<div class="modal fade" id="editOrderModal" tabindex="-1" aria-labelledby="editOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="editOrderModalLabel">
                    <i class="fas fa-edit me-2"></i>
                    Editar Pedido
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editOrderForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_order_id" name="order_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_user_id" class="form-label">Usuario</label>
                                <select class="form-select" id="edit_user_id" name="user_id" required>
                                    <option value="">Seleccionar usuario...</option>
                                    {{-- Usuarios cargados dinámicamente --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_date_order" class="form-label">Fecha del Pedido</label>
                                <input type="date" class="form-control" id="edit_date_order" name="date_order" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="edit_status" class="form-label">Estado</label>
                        <select class="form-select" id="edit_status" name="status" required>
                            <option value="pendiente">Pendiente</option>
                            <option value="en_proceso">En Proceso</option>
                            <option value="completado">Completado</option>
                            <option value="cancelado">Cancelado</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>
                    Cancelar
                </button>
                <button type="submit" form="editOrderForm" class="btn btn-warning">
                    <i class="fas fa-save me-1"></i>
                    Actualizar Pedido
                </button>
            </div>
        </div>
    </div>
</div>