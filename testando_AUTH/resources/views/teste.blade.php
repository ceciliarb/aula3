@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TESTECONTROLLER</div>

                <div class="card-body">
                    Oi, TESTECONTROLLER!
                </div>

                <form action="{{ route('put') }}" method="post">
                    @csrf
                    @method('put')
                    <input type="text" name="nome" id="nome">
                    <input type="submit" value="Enviar!">

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
