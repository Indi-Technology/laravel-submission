@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            About
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="align-self-end"
                                            style="margin: 2%; border-radius: 20%; max-width: 190px; height: auto;"
                                            src="{{ asset('') }}" alt="">
                                    </div>
                                    <div class="flex-grow-1 ms-5">
                                        <h2 style="text-align: center">ABOUT ME</h2>
                                        <hr>
                                        <h2 style="text-align: center">Azriel FachrulRezy</h2>
                                        <p style="text-align: center; font-size: 17px;">Mahasiswa Universitas Pamulang Semester 5</p>
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
