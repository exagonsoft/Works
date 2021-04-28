@extends('layouts.master')
@section('Contain')
<section>
    <h1>
        Date List
    </h1>
    <br />
    <br />
    <a href="{{url('citas/create')}}" width="200px" class="interfacenewBtn">Create new</a>
    <br />
    <br />
    <table class="table table-light List">
        <thead class="thead-light">
            <tr>
                <th> </th>
                <th> </th>
                <th>Date</th>
                <th>Title</th>
                <th>Description</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach( $Citas as $cita )
            <tr>
                <td>{{ $cita->id }}</td>
                <td>
                    <img src="{{asset('storage').'/'.$cita->icono}}" alt="" width="100" heigth="100" class="imgtumbanail">

                </td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->titulo }}</td>
                <td>{{ $cita->descripcion }}</td>
                <td>
                    <form action="{{url('/citas/'.$cita->id.'/edit')}}" class="forms" method="get">
                        @csrf

                        <input type="submit" value="edit"  class="actionBtn">
                    </form>
                    |
                    <form action="{{url('/citas/'.$cita->id)}}" class="forms" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('Are you shure?')" value="delete" class="actionBtn">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection