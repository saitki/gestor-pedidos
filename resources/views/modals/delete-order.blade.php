<div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteOrderModalLabel">
                    <i class="fas fa-trash me-2"></i>
                    Eliminar Pedido
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-exclamation-triangle text-warning" style="font-size: 3rem;"></i>
                    <h4 class="mt-3">¿Estás seguro?</h4>
                    <p class="text-muted">Esta acción no se puede deshacer. El pedido será eliminado permanentemente.</p>
                    <div class="alert alert-info">
                        <strong>Pedido #<span id="delete_order_number"></span></strong><br>
                        <span id="delete_order_details"></span>
                    </div>
                </div>
                <form id="deleteOrderForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="delete_order_id" name="order_id">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>
                    Cancelar
                </button>
                <button type="submit" form="deleteOrderForm" class="btn btn-danger">
                    <i class="fas fa-trash me-1"></i>
                    Eliminar Pedido
                </button>
            </div>
        </div>
    </div>
</div>