@extends('backoffice.dashboard-layout')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1>Créer un nouveau produit</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="bi bi-arrow-left"></i> Retour à la liste
                                    </a>
                                </div>
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
                                                <div id="image-preview" class="border rounded d-flex align-items-center justify-content-center"
                                                     style="height: 200px; background-color: #f8f9fa;">
                                <span class="text-muted">
                                    <i class="bi bi-image" style="font-size: 3rem;"></i>
                                    <br>
                                    Aucune image sélectionnée
                                </span>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Sélectionner une image</label>
                                                <input type="file"
                                                       class="form-control @error('image') is-invalid @enderror"
                                                       id="image"
                                                       name="image"
                                                       accept="image/*"
                                                       onchange="previewImage(this)">
                                                @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <div class="form-text">
                                                    Formats acceptés : JPEG, PNG, JPG, GIF. Taille max : 2MB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-title">Informations</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Nom *</label>
                                                        <input type="text"
                                                               class="form-control @error('name') is-invalid @enderror"
                                                               id="name"
                                                               name="name"
                                                               value="{{ old('name') }}"
                                                               placeholder="Nom du produit"
                                                               required>
                                                        @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="state" class="form-label">État *</label>
                                                        <select class="form-select @error('state') is-invalid @enderror"
                                                                id="state"
                                                                name="state"
                                                                required>
                                                            <option value="">Sélectionner un état</option>
                                                            <option value="Très bon" {{ old('state') == 'Très bon' ? 'selected' : '' }}>Très bon</option>
                                                            <option value="Bon" {{ old('state') == 'Bon' ? 'selected' : '' }}>Bon</option>
                                                            <option value="Correct" {{ old('state') == 'Correct' ? 'selected' : '' }}>Correct</option>
                                                        </select>
                                                        @error('state')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="price" class="form-label">Prix (€) *</label>
                                                        <input type="number"
                                                               class="form-control @error('price') is-invalid @enderror"
                                                               id="price"
                                                               name="price"
                                                               value="{{ old('price') }}"
                                                               step="0.01"
                                                               min="0"
                                                               placeholder="0.00"
                                                               required>
                                                        @error('price')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                                                    <i class="bi bi-x"></i> Annuler
                                                </a>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-plus"></i> Créer le produit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <script>
                            function previewImage(input) {
                                const preview = document.getElementById('image-preview');
                                const file = input.files[0];

                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        preview.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded border" style="max-height: 200px; object-fit: cover;">`;
                                    }
                                    reader.readAsDataURL(file);
                                } else {
                                    preview.innerHTML = `
                                        <span class="text-muted">
                                            <i class="bi bi-image" style="font-size: 3rem;"></i>
                                            <br>
                                            Aucune image sélectionnée
                                        </span>
                                    `;
                                }
                            }
                        </script>

@endsection
