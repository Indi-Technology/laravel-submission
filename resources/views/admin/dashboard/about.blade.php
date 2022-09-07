@extends('layouts.admin.app')

@section('content')
    <main>
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Muhammad Vallen Firdaus</h1>
            <div class="col-lg-6 mx-auto">
                <span class="text-muted">at Universitas Bakrie </span>
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>
            <div class="overflow-hidden" style="max-height: 35vh;">
                <div class="container px-5">
                    <img src="{{ asset('assets/admin/img/bootstrap-themes.png') }}"
                        class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500"
                        loading="lazy">
                </div>
            </div>
        </div>
    </main>
@endsection
