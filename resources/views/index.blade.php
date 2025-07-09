@extends('layouts.app')
@section('title', 'Gestor de pedidos')
@section('content')
    <div class="hero-container">
        <h1>Welcome to the Order Management System</h1>
        <p>Manage your orders efficiently and effectively.</p>
    </div>
    @include('modals.create-order')

@endsection
