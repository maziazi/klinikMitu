@extends('layouts.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Dokter AI</p>
            <h1>Hasil Analisis</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <!-- <h4 class="mb-3">Solusi untuk Keluhan Anda</h4>
                    <p class="mb-4">{{ $treatment_plan }}</p>
                    <h4 class="mb-3">Rekomendasi Produk</h4>
                    @foreach ($sorted_products as $product)
                        <p>{{ $product[0] }} - ${{ $product[1] }}</p>
                    @endforeach -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
