@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="product-detail-container" style="display: flex; gap: 40px; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        
        <div class="product-detail-image" style="flex: 1;">
            <img src="{{ $product->image ?? 'https://via.placeholder.com/400x500' }}" alt="{{ $product->name }}" style="width: 100%; border-radius: 10px;">
        </div>

        <div class="product-detail-info" style="flex: 1;">
            <h1 style="font-size: 2.5rem; margin-bottom: 10px;">{{ $product->name }}</h1>
            <p style="font-size: 1.5rem; color: #2c3e50; font-weight: bold;">ราคา: {{ number_format($product->price, 2) }} บาท</p>
            <p style="margin: 20px 0; color: #666; line-height: 1.6;">{{ $product->description ?? 'ไม่มีรายละเอียดสินค้า' }}</p>
            <p><strong>คงเหลือในสต็อก:</strong> {{ $product->stock }} เล่ม</p>
            
            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">
            
            <div class="actions" style="display: flex; gap: 10px;">
                <input type="number" value="1" min="1" max="{{ $product->stock }}" style="width: 60px; padding: 10px; border-radius: 5px; border: 1px solid #ddd;">
                <button class="btn-primary" style="background: #1e3a8a; color: white; padding: 10px 25px; border: none; border-radius: 5px; cursor: pointer;">
                    เพิ่มลงตะกร้า
                </button>
            </div>
            
            <a href="{{ route('products.index') }}" style="display: inline-block; margin-top: 20px; color: #666;">← กลับหน้าหลัก</a>
        </div>
    </div>
</div>
@endsection