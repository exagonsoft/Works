@extends('layouts.master')
@section('Contain')
<section>
    <div class="interfaceBox">
        <form action="{{ url('/citas/'.$citaData->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            {{method_field('PATCH')}}
            @include('Citas.form', ['modo'=>'Edit'])
        </form>
    </div>
</section>
@endsection