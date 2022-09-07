@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            About Faizah
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="align-self-end"
                                            style="margin: 2%; border-radius: 20%; max-width: 190px; height: auto;"
                                            src="{{ asset('images/faizah_photo.jpg') }}" alt="faizah_photo">
                                    </div>
                                    <div class="flex-grow-1 ms-5">
                                        <h1 style="color: #638B82; font-weight: bold;">ABOUT FAIZAH</h1>
                                        <h2>Hello, I am Faizah.</h2>
                                        <p style="font-size: 17px;">I am a third year student at Information System, Faculty
                                            of Computer Science, University of Indonesia. I am interested in web development
                                            and UI/UX.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
