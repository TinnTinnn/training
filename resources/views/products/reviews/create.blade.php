@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-center">Add Review for {{ $product->title }}</h1>

    <form method="POST" action="{{ route('products.reviews.store', $product) }}">
        @csrf
        <div class="mb-4">
            <label for="title" class="d-block text-uppercase text-secondary mb-2">
                Review
            </label>
            <textarea name="review" id="review" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
           {{ $errors->has('title') ? 'border-danger' : '' }}"></textarea>
            @error('title')
            <p class="text-danger small">{{ $message }}</p>
            @enderror
        </div>

        <label for="rating">Rating</label>

        <select  class="form-select mb-4" aria-label="Default select example" name="rating" id="rating">
            <option value="">Select a Rating</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <button type="submit" class="btn btn-success d-flex justify-content-end ms-auto">Add Review</button>
    </form>
@endsection
