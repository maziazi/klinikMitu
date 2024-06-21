@extends('layouts.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Dokter AI</p>
            <h1>Keluhan Perawatan Kulit</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <form id="keluhanForm" action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <textarea class="form-control border-0" rows="5" name="skin_problem" placeholder="Masukan keluhan untuk dapat diatasi dengan AI"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary py-3 btn-block">Solusi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
