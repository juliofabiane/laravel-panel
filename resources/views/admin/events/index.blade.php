@extends('layouts.blank')

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Eventos</h3>
            </div>
        </div>
              
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Descrição</th>                
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <th scope="row">{{ $event->id }}</th>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>                    
                </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
    <!-- /page content -->
@endsection