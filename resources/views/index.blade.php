@extends('layouts.app')
@section('title', 'Gestor de pedidos')
@section('content')
    <div class="hero-container" style="margin-top: 20px;">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Usuario</th>
                    <th>Fecha Pedido</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr class="clickable-row" 
                        style="cursor: pointer;"
                        data-bs-toggle="modal" 
                        data-bs-target="#viewOrderModal"
                        data-user_name="{{ $order->user->nombre }}"
                        data-fecha_pedido="{{ $order->fecha_pedido }}"
                        data-estado="{{ $order->estado }}">

                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->nombre }}</td> 
                        <td>{{ $order->fecha_pedido }}</td>
                        @if($order->estado === 'en_proceso')
                            <td>En Proceso</td>
                        @elseif($order->estado === 'completado')
                            <td>Completado</td>
                        @elseif($order->estado === 'pendiente')
                            <td>Pendiente</td>
                        @endif
                        
                        <td onclick="event.stopPropagation();">
                            <button class="btn btn-primary btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editOrderModal" 
                                    data-id="{{ $order->id }}" 
                                    data-user_id="{{ $order->user_id }}" 
                                    data-fecha_pedido="{{ $order->fecha_pedido }}" 
                                    data-estado="{{ $order->estado }}">
                                <i class="fas fa-edit"></i> Editar
                            </button>
                            <button class="btn btn-danger btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#deleteOrderModal" 
                                    data-id="{{ $order->id }}" 
                                    data-user="{{ $order->user->nombre }}">
                                <i class="fas fa-trash"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <script>
            let currentOrderData = {};

            document.addEventListener('DOMContentLoaded', function() {
                // VER detalles de cada elemento de la lista
                const viewModal = document.getElementById('viewOrderModal');
                if (viewModal) {
                    viewModal.addEventListener('show.bs.modal', function (event) {
                        const button = event.relatedTarget;
                        
                        // Obtener datos del elemento que activó el modal
                        const orderData = {
                            user_name: button.getAttribute('data-user_name'),
                            fecha_pedido: button.getAttribute('data-fecha_pedido'),
                            estado: button.getAttribute('data-estado'),
                        };
                        
                        // Guardar datos para usar en otros modales
                        currentOrderData = orderData;
                        
                        // Llenar el modal con los datos
                        document.getElementById('viewUserName').textContent = orderData.user_name;
                        document.getElementById('viewOrderDate').textContent = orderData.fecha_pedido;
                        
                        // Configurar badge del estado
                        const statusElement = document.getElementById('viewOrderStatus');
                        // Configurar badge del estado
                        if(orderData.estado == 'en_proceso')
                            statusElement.textContent = 'En Proceso';
                        else if(orderData.estado == 'completado')
                            statusElement.textContent = 'Completado';       
                        else if(orderData.estado == 'pendiente')
                            statusElement.textContent = 'Pendiente';         
                                                
                        // Aplicar clase CSS según el estado
                        statusElement.className = 'badge';
                        if (orderData.estado === 'pendiente') {
                            statusElement.classList.add('bg-warning');
                        } else if (orderData.estado === 'en_proceso') {
                            statusElement.classList.add('bg-info');
                        } else if (orderData.estado === 'completado') {
                            statusElement.classList.add('bg-success');
                        } else {
                            statusElement.classList.add('bg-secondary');
                        }
                    });
                }

                //EDITAR
                const editModal = document.getElementById('editOrderModal');
                if (editModal) {
                    editModal.addEventListener('show.bs.modal', function (event) {
                        const button = event.relatedTarget;
                        const id = button.getAttribute('data-id');
                        const user_id = button.getAttribute('data-user_id');
                        const fecha_pedido = button.getAttribute('data-fecha_pedido');
                        const estado = button.getAttribute('data-estado');
                        
                        const modal = this;
                        modal.querySelector('form').setAttribute('action', '/orders/' + id);
                        modal.querySelector('select[name="user_id"]').value = user_id;
                        modal.querySelector('input[name="fecha_pedido"]').value = fecha_pedido;
                        modal.querySelector('select[name="estado"]').value = estado;
                    });
                }

                //ELIMINAR
                const deleteModal = document.getElementById('deleteOrderModal');
                if (deleteModal) {
                    deleteModal.addEventListener('show.bs.modal', function (event) {
                        const button = event.relatedTarget;
                        const id = button.getAttribute('data-id');
                        const user = button.getAttribute('data-user');
                        
                        const modal = this;
                        modal.querySelector('form').setAttribute('action', '/orders/' + id);
                        modal.querySelector('#deleteUserName').textContent = user;
                        modal.querySelector('#deleteOrderId').textContent = id;
                    });
                }
            });
        </script>
    </div>

    @include('modals.create-order')
    @include('modals.edit-order')
    @include('modals.delete-order')
    @include('modals.view-order')
@endsection