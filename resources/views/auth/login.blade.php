@extends('layouts.app')

@section('titulo')
    Iniciar Session
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 p-5">
            <p>Imagen</p>
        </div>
        {{-- Formulario de registro --}}
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">

            <form action="{{ route('login') }}" method="POST">
                @csrf

                @if (session('mensaje'))
                    <b class="bg-red-500 text-white mb-2 rounded-lg text-sm p-2 w-full">{{session('mensaje')}}</b>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold w-full">Email</label>
                    <input 
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Escribe tu email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <b class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 w-full">{{$message}}</b>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Clave</label>
                    <input 
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Escribe tu clave"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                        <b class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 w-full">{{$message}}</b>
                    @enderror
                </div>
                <input 
                    type="submit"
                    value="Iniciar Session"
                    class="bg-sky-500 hover:bg-sky-700 transition-colors w-full cursor-pointer font-bold text-white rounded-lg uppercase p-3"
                >
            </form>

        </div>
    </div>
@endsection
