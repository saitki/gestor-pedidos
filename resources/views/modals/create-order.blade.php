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
                <form id="createOrderForm" action="{{ route('orders.store') }}" method="POST">                    
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Usuario</label>
                                <select name="user_id" class="form-control" required>
                                    <option value="">Seleccionar usuario</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fecha_pedido" class="form-label">Fecha del Pedido</label>
                                <input type="date" class="form-control" id="fecha_pedido" name="fecha_pedido" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="">Seleccionar estado...</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="en_proceso">En Proceso</option>
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