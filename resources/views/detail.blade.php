{{-- {{ dd($product) }} --}}

@extends('profile')

@section('title', $product['name'])

@section('meta-desc', $product['description'])

@section('content')
{{-- <h1>hello</h1> --}}
<div class="color-bg">
    <div class="container">
        <div class="row p-3">
            <div class="isi col-md-12">
                <a href="/#favorite"><i class="bi bi-arrow-left-circle-fill back"></i></a>
                <h1 class="text-center">{{ $product['name'] }}</h1>
                <div class="gif_underline2 text-center mb-3">
                    <img class="q-image qu-cursor--default qu-display--block" src="/assets/2.webp">
                  </div>
                <img src="{{ asset('assets/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-50 mx-auto d-block mb-3">
                <div class="background p-3">
                    <p> <span class="fw-bold mb-3">Description/Synopsis:</span>  {{ $product['description'] }}</p>
                    <p> <span class="fw-bold mb-3">Rating:</span> {{ $product['rating'] }}</p>
                    <p> <span class="fw-bold">Status:</span> {{ $product['status'] }}</p>
                    <p> <span class="fw-bold">Artist:</span> {{ $product['artist'] }}</p>
                    <p> <span class="fw-bold">Writer:</span> {{ $product['writer'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
