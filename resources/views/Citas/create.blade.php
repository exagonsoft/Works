@extends('layouts.master')
@section('Contain')
<section>
    <div class="interfaceBox">
        <form method="post" action="{{url('/citas')}}" enctype="multipart/form-data">
            @csrf

            @include('Citas.form', ['modo'=>'Create'])
        </form>
    </div>
</section>
@endsection