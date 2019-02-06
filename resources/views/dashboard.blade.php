@extends('layouts.panel')

@section('content')

    <div class="col-12 p-lg-5 text-center">
        <span style="font-size: 40px;">Witaj [UserName] w Panelu {{config('app.name', 'Laravel')}}</span> <br/>
        <span style="font-size: 20px;">Lista komputerów którymi możesz zarządzać znajduje się poniżej.</span>
    </div>

    <div class="col-12">
        <div class="row p-lg-4">
            @for($i = 0; $i < 5; $i++)
                <div class="col-lg-3 p-lg-2 pb-2">
                    <div class="btn light_gray_btn full-size">
                        <div class="row">
                            <div class="col-4" style="height: 120px;">
                                <img style="width: 100%; margin-top:30%; margin-bottom: auto;" src="https://st2.depositphotos.com/1006689/10117/v/950/depositphotos_101178156-stock-illustration-laptop-computer-vector-icon.jpg">
                            </div>
                            <div class="col-8" style="height: 120px;">
                                OPIS
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

@endsection


