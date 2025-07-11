@extends('backoffice.dashboard-layout')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Gestion des produits</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('backoffice.products.create') }}" class="btn btn-sm btn-primary">
                <i class="bi bi-plus"></i> Ajouter un produit
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h2 class="card-title mb-0">Liste des produits ({{ $products->total() }})</h2>
        </div>
        <div class="card-body">
            @if($products->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Etat</th>
                            <th>Prix</th>
                            <th>Date création</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}"
                                             alt="{{ $product->name }}"
                                             class="rounded"
                                             width="50" height="50"
                                             style="object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                             style="width: 50px; height: 50px;">
                                            <i class="bi bi-image text-muted"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $product->name }}</strong>
                                </td>
                                <td>
                                    {{ $product->state }}
                                </td>
                                <td>{{ number_format($product->price, 2) }} €</td>
                                <td>{{ $product->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('backoffice.products.show', $product) }}"
                                           class="btn btn-sm btn-outline-primary"
                                           title="Voir">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('backoffice.products.edit', $product) }}"
                                           class="btn btn-sm btn-outline-secondary"
                                           title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('backoffice.products.destroy', $product) }}"
                                              method="POST"
                                              class="d-inline"
                                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn btn-sm btn-outline-danger"
                                                    title="Supprimer">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            @else
                <div class="text-center py-4">
                    <i class="bi bi-box-seam fs-1 text-muted"></i>
                    <p class="text-muted mt-2">Aucun produit trouvé</p>
                    <a href="{{ route('backoffice.products.create') }}" class="btn btn-primary">
                        Créer le premier produit
                    </a>
                </div>
            @endif
        </div>
    </div>

@endsection
