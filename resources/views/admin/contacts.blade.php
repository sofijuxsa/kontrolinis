@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

@section('content')
    <div class="card">
        <h2 class="title" style="color: #000000; text-align: center">
            Žinutės
        </h2>
    </div>
    <form id="delete" method="POST" action="{{ route ('contact.delete')}}">
    @foreach($contacts as $contact)
        @csrf
        <div class="container">
            <div class="row">
                <input type="checkbox" value="{{$contact->id}}" name="checkbox[]">
                <div class="col-lg-6">
                    <p> Numeris: {{ $contact->id }} </p>
                </div>
                <div class="col-lg-6">
                    <p> Vardas: {{ $contact->name }} </p>
                </div>
                <div class="col-lg-6">
                    <p> Pavardė: {{ $contact->surname }} </p>
                </div>
                <div class="col-lg-6">
                    <p> Email: {{ $contact->email }} </p>
                </div>
                <div class="col-lg-6">
                    <p> Numeris: {{ $contact->phone_number }} </p>
                </div>
                <div class="col-lg-6">
                    <p> Tema: {{ $contact->subject }} </p>
                </div>
                <div class="col-lg-6">
                    <p> Žinutė: {{ $contact->message }} </p> <br>
                </div>
            </div>
        </div>
    @endforeach
    <button type="submit">Ištrinti</button>
    </form>
@endsection

