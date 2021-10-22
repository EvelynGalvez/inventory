<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Crear Alumno
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 xl:px-0">

        </div>

    </x-slot>

    {!! Form::open(['route' => 'students.store']) !!}

    <x-jet-validation-errors class="mb-4"/>

    {{Form::label('rut', 'Rut')}}
    {{Form::text('rut', null)}}

    {{Form::label('nombre', 'Nombre')}}
    {{Form::text('nombre', null)}}

    {{Form::label('apellidos', 'Apellidos')}}
    {{Form::text('apellidos')}}

    {{Form::label('correoelectronico', 'E-mail')}}
    {{Form::text('correoelectronico')}}

    {{Form::select('sucursal', ['1' => 'Sucursal 1', '2' => 'Sucursal 2'], null, ['placeholder' => 'Selecciona sucursal...'])}}

    {{Form::submit('Crear Alumno')}}

    //
    {!! Form::close() !!}

</x-app-layout>
