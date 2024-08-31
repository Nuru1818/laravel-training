{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Umur</title>
</head>

<body>
    <h1>Login sesuai Umur</h1>
    <hr>
    @if (session('error'))
        <div class="alert" style="color: #ff0000">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert" style="color: #ff0000">
            <ul>
                @foreach ($errors->all() as $items)
                    <li>{{ $items }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>
    <form action="{{ route('proses') }}" method="POST">
        @csrf
        <label for="">Berapa Umur Kamu? </label>
        <input type="number" name="umur" id="umur">
        <button type="submit">Login</button>
    </form>
</body>

</html> --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4 m-4">
            <form action="{{ route('proses') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Berapa Umur Kamu? </label>
                    <input type="number" name="umur" id="id" class="form-control mt-1">
                </div>
                <div class="form-group mt-2">
                    <button class="btn btn-success">Cek Umur</button>
                </div>
            </form>
        </div>
    </div>
@endsection
