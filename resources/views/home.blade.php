@extends('layouts.app')

@section('titolo')
    Homepage
@endsection

@section('contenuto')

    <div class="container">        

        <table class="departure-board">
            <thead>
              <tr>                
                <th scope="col" colspan="2">Treno</th>
                <th scope="col">Partenza</th>
                <th scope="col">Destinazione</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>                
                <th scope="col">Carrozze</th>
                <th scope="col">Ritardo</th>                
              </tr>
            </thead>
            <tbody>

                @foreach ($trains as $train)
                <tr>                    
                    <td>{{$train ["company"]}}</td>
                    <td>{{$train ["train_code"]}}</td>
                    <td>{{$train ["departure_station"]}}</td>
                    <td>{{$train ["arrival_station"]}}</td>
                    <td>{{ \Carbon\Carbon::parse($train["departure_time"])->format('d-m-Y H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($train["arrival_time"])->format('d-m-Y H:i') }}</td>                    
                    <td>{{$train ["carriages_number"]}}</td>
                    <td class="{{ $train['is_cancelled'] ? 'highlight text-decoration-line-through' : ($train['is_on_time'] ? '' : 'text-warning blink')}}"> {{ $train ["is_cancelled"] ? 'Cancellato' : ($train ["is_on_time"] ? '' : 'Ritardo') }}</td>                                       
                  </tr>
                @endforeach             
               
            </tbody>
          </table>

       
    </div>
    
@endsection