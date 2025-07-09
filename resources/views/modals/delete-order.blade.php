<div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteOrderModalLabel">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Confirmar Eliminación
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar este pedido?</p>
                <p><strong>Usuario:</strong> <span id="deleteUserName"></span></p>
                <p><strong>ID del Pedido:</strong> <span id="deleteOrderId"></span></p>
                <p class="text-danger"><small>Esta acción no se puede deshacer.</small></p>
                
                <form id="deleteOrderForm" method="POST">
                    @csrf
                    @method('DELETE')
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