@extends('layouts.app')

@section('title', isset($product) ? 'Edit Product' : 'Add Product')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST"
          action="{{ isset($product) ? route('products.update',['product'=> $product->id]) : route('products.store') }}"
          enctype="multipart/form-data">

        @csrf
        @isset($product)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title" class="d-block text-uppercase text-secondary mb-2">
                Title
            </label>
            <input type="text" name="title" id="title" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('title') ? 'border-danger' : '' }}"
                   value="{{ $product->title ?? old('title') }}"/>
            @error('title')
            <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category">Category</label>
            <input type="text" name="category" id="category"
                   class="form-control shadow-sm w-100 py-2 px-3 text-secondary
                    {{ $errors->has('title') ? 'border-danger' : '' }}"
                   value="{{ $product->category ?? old('category') }}"/>
            @error('category')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5"
                      class="form-control shadow-sm w-100 py-2 px-3 text-secondary
                      {{ $errors->has('title') ? 'border-danger' : '' }}">
                {{ $product->description ?? old('description') }}</textarea>
            @error('description')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" step="0.01" min="0"
                   inputmode="decimal" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
                   {{ $errors->has('title') ? 'border-danger' : '' }}"
                   value="{{ $product->price ?? old('price') }}"/>
            @error('price')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" min="0"
                   class="form-control shadow-sm w-100 py-2 px-3 text-secondary
                   {{ $errors->has('title') ? 'border-danger' : '' }}"
                   value="{{ $product->stock ?? old('stock') }}"/>
            @error('stock')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image">Product Image</label>
            <input type="file" name="image" id="image" class="form-control shadow-sm w-100 py-2 px-3 text-secondary"
            />
            @error('image')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex gap-2 align-items-center">
            <button type="submit" class="btn btn-outline-success">
                @isset($product)
                    Update Product
                @else
                    Add Product
                @endisset
            </button>
            <div>
                <a href="{{ route('products.index') }}" class="btn btn-outline-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
