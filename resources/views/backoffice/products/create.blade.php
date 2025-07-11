@extends('backoffice.dashboard-layout')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Créer un nouveau produit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('backoffice.products.index') }}" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Retour à la liste
            </a>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Image</h2>
                    </div>
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center border"
                                 style="height: 200px;" id="image-preview">
                                <div class="text-center">
                                    <i class="bi bi-image fs-1 text-muted"></i>
                                    <p class="text-muted mt-2">Aperçu de l'image</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Choisir une image</label>
                            <input type="file"
                                   class="form-control @error('image')


@endsection
