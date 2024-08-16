@extends('layouts.app')

@section('title', $product->title)

@section('content')
    <div class="mb-4">
        <a href="{{ route('products.index') }}"
           class="fw-medium text-decoration-underline text-info">← Go back to the Product list!</a>
    </div>

    @if($product->image_path)
        <div class="mb-4">
            <img src="{{ asset($product->image_path) }}" alt="{{ $product->title }}" class="product-image" style="border: none;">
        </div>
    @else
        <div class="mb-4">
            <img src="{{ asset('default-image.jpg') }}" alt="{{ $product->title  }}" class="product-image">
        </div>
    @endif
    <div class="card mb-4">
        <p class="mb-4 fw-medium text-muted">{{ $product->description }}</p>
        @if($product->long_description)
            <p class="mb-4 fw-small text-muted">{{ $product->long_description }}</p>
        @endif

        <p class="mb-4 fw-small text-muted">Category : {{ $product->category }}</p>
        <p class="mb-4 fw-small text-muted">Price : {{ $product->price }}</p>
        <p class="mb-4 fw-small text-muted">Stock : {{ $product->stock }}</p>
    </div>


    {{--    ส่วนข้างล่างนี้ เกี่ยวกับ การแสดงผล รีวิว    --}}
    <div class="mb-4">
        <div class="card">
            <div class="d-flex p-3">
                <div class="">
                    {{--                        สำหรับ ทำAvgrating เป็นตัวเลข--}}
                    {{--                        {{ number_format($product->reviews_avg_rating, 1) }}--}}

                    {{--                        ส่วนนี้มาจากการใช้ component ซึ่งต้องสร้างแยกเอาและกำหนดคุณสมบัติ โดยต้องสร้างทั้งตัว component และ view เพื่อรองรับ แล้วจึงเรียกใช้แบบบรรทัดด้านล่างนี้อีกที--}}
                    <x-star-rating :rating="$product->reviews_avg_rating" class=""/>
                </div>
                <span class="mx-4">
          {{ $product->reviews_count }} {{ Str::plural('review', 5) }}
        </span>
            </div>
        </div>
    </div>

{{--    ส่วนที่จะนำไปสู่การเขียนรีวิว--}}
    <div class="mb-4">
        <a href="{{ route('products.reviews.create', $product) }}" class="btn btn-outline-secondary">
            Add a review!</a>
    </div>

    <div>
        <h2 class="mb-4">Reviews</h2>
        <ul>
            @forelse ($product->reviews as $review)
                <li class="card">
                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <div class="font-semibold">
                                <x-star-rating :rating="$review->rating"/>
                            </div>
                            <div class="">
                                {{ $review->created_at->format('M j, Y') }}</div>
                        </div>
                        <p class="text-gray-700">{{ $review->review }}</p>
                    </div>
                </li>
            @empty
                <li class="mb-4">
                    <div class="empty-book-item">
                        <p class="empty-text text-lg font-semibold">No reviews yet</p>
                    </div>
                </li>
            @endforelse
        </ul>
    </div>

    <p class="mb-4 fw-small text-secondary">Created {{ $product->created_at->diffForHumans() }} •
        Updated {{ $product->updated_at->diffForHumans() }}</p>


    <p class="alert alert-warning text-info" role="alert">
        @if($product->available)
            Out of stock
        @else
            This product is available
        @endif
    </p>

    <div class="d-flex gap-2">
        <div>
            <a href="{{ route('products.edit', ['product'=> $product]) }}"
               class="btn btn-outline-primary">Edit</a>
        </div>

        <div>
            <form method="POST" action="{{ route('products.toggle-complete', ['product' => $product]) }}">
                @csrf
                @method('PUT')
                <button class="btn btn-outline-warning" type="submit">
                    Mark as {{ $product->available ? 'This product is available' : 'Out of Stock'}}
                </button>
            </form>
        </div>

        <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST"
              onsubmit="return confirm('หืมมม มือลั่นป่าว...คุณแน่ใจแล้วใช่มั้ยที่จะลบสินค้าชิ้นนี้?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>

        <div class="mb-4">
            <a href="{{ route('products.create') }}"
               class="btn btn-outline-success">Add More Product!</a>
        </div>
    </div>
@endsection
