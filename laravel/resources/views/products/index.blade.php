@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <h1 class="page-title" id="products-list">รายการสินค้า</h1>

    <div class="products-grid"> {{-- เปิดตะกร้าใหญ่คุมไว้ข้างนอก --}}

        @foreach($products as $product) {{-- เริ่มหยิบสินค้าทีละชิ้นใส่ตะกร้า --}}
        <div class="product-card"> {{-- เริ่มสร้างการ์ด --}}
            <div class="product-image">
                <img src="{{ $product->image ?? 'https://via.placeholder.com/300x200' }}" alt="{{ $product->name }}">
            </div>

            <div class="product-info">
                <h3>{{ $product->name }}</h3>
                <p>ราคา: {{ number_format($product->price, 2) }} บาท</p>
                <p>สต็อก: {{ $product->stock }}</p>
                <a href="{{ route('products.show', $product->id) }}"><button class="btn-primary">ดูสินค้า</button></a>
            </div>
        </div> {{-- ปิดการ์ดสินค้า (ต้องปิดก่อนจบ foreach) --}}
        @endforeach {{-- จบการหยิบสินค้า --}}

    </div> {{-- ปิดตะกร้าใหญ่ (products-grid) --}}
</div>

@endsection