<h1>{{ $modo }} Date</h1>
<br />
<br />

<div class="interfaceBoxIner">
    <input class="textfields" type="text" value="{{isset($citaData->titulo)?$citaData->titulo:''}}" name="Titulo"
        id="Titulo" placeholder="Title" />
    <br />
    <br />
    <input class="textfields" type="text" value="{{isset($citaData->descripcion)?$citaData->descripcion:''}}"
        name="Descripcion" id="Descripcion" placeholder="Description" />
    <br />
    <br />
    <input class="datefields" type="date" value="{{isset($citaData->fecha)?$citaData->fecha:''}}" name="Fecha"
        id="Fecha" />
    <br />
    <br />
    @if(isset($citaData->icono))
    <img src="{{asset('storage').'/'.$citaData->icono}}" alt="" class="imgtumbanail" width="100" heigth="100">
    @endif
    <br />
    <input class="textfields" type="file" value="{{isset($citaData->icono)?$citaData->icono:' '}}" name="Icono"
        id="Icono" />
    <br />
    <br />
    <input class="interfaceBtnOk" type="submit" value="{{$modo}} Date" /> 
    <a class="interfaceBtncancel" href="{{url('citas')}}">back</a>
    <br/>
</div>