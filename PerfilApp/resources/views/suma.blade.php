
@extends('layouts.app')

@section('content')

    <h2>sumar 2 números</h2>

    <form action="/suma" method='POST'>
            @csrf
            <label for="num1">ingrese el primer número</label>
            <input type="number" id="num1" name="num1" required>
            <br>

            <label for="num2">ingrese el segundo número</label>
            <input type="number" id="num2" name="num2" required>
            <br>

            <button type="submit">sumar</button>

        </form>
        <br>
        @if(isset($resultado))
            <p>la suma de los dos números es: {{$resultado}}</p>
        @endif
        
@endsection