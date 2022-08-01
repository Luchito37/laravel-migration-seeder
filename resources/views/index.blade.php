


@extends('layouts.app')

@section('page_content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <th scope="row">{{ $train->codice_treno }}</th>
                        <td >{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo}}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
@endsection