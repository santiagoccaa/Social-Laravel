@extends('layouts.app')

@section('titulo')
Registrate con Devstagram
@endsection


@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
	<div class="md:w-6/12 p-5">
		<img src="{{asset('img/registrar.jpg')}} " alt="Registro">
	</div>

	<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
		<form action="{{ route('register')}} " method="POST" novalidate>
			@csrf
			<div class="mb-5">
				<label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
				<input type="text" name="name" id="name" class="border p-3 w-full rounded @error('name') border-red-500 @enderror" value="{{old('name')}}">
				@error('name')
				<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
				@enderror
			</div>
			<div class="mb-5">
				<label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
				<input type="text" name="username" id="username" class="border p-3 w-full rounded @error('username') border-red-500 @enderror" value="{{old('isername')}}">
				@error('username')
				<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
				@enderror

			</div>
			<div class="mb-5">
				<label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
				<input type="text" name="email" id="email" class="border p-3 w-full rounded @error('email') border-red-500 @enderror" value="{{old('email')}}">
				@error('email')
				<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
				<input type="password" name="password" id="password" class="border p-3 w-full rounded @error('password') border-red-500 @enderror">
				@error('password')
				<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-5">
				<label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repite tu contraseña</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="border p-3 w-full rounded @error('name') border-red-500 @enderror">
				@error('password_confirmation')
				<p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
				@enderror
			</div>

			<input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
		</form>
	</div>
</div>
@endsection