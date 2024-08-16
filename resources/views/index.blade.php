@extends('layouts.app')

@section('title','The list of Product')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
    <nav class="mb-4">
        <a href="{{ route('products.create') }}"
           class="fw-large text-decoration-underline text-info">Add Product!</a>
    </nav>


    <div class="container">
        <div class="row">
            @forelse($products as $product)
                <div class="card col-md-3" style="width: 18rem;">
                    <div class="mb-3 text-center">
                        @if($product->image_path)
                            <img src="{{ asset($product->image_path) }}" alt="{{ $product->title }}"
                                 class="product-image" style="border: none;">
                        @else
                            <img src="{{ asset('default-image.jpg') }}" alt="รูปยังไม่ขึ้นเลยโว้ยยย!!"
                                 class="product-image">
                        @endif
                        <div class="card-body">
                            <div class="">
                                <x-star-rating :rating="$product->reviews_avg_rating"/>
                            </div>
                            <div class="">
                                Out of {{ $product->reviews_count }} {{ \Illuminate\Support\Str::plural('review', $product->reviews_count) }}
                            </div>
                            {{--            วิธีการสร้างลิงค์Url เพื่อไปหน้าอื่นๆ ส่วนนี้ไว้เป็นตัวอย่างในการปรับใช้กับฟังค์ชั่นอื่น--}}
                            <a href="{{ route('products.show',['product' => $product->id ]) }}"
                               class="{{ $product->available ? 'text-decoration-line-through' : 'text-decoration-none' }}"
                            >{{ $product->title }}</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="">
                        <div>There are no products!</div>
                        <a href="{{ route('products.index') }}" class="reset-link">Reset criteria</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    @if ($products->count())
        <nav class="mt-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </nav>
    @endif
@endsection



