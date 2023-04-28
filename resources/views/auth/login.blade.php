@extends('auth.base')

@section('content')
    
<form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">

    @csrf

    @error('email')
        <div class="bg-white text-primary-dark p-4 rounded mb-4">
            {{ $message }}
        </div>
    @enderror

    <div class="flex flex-col gap-1">
        <label for="email" class="block text-sm font-medium text-black">E-mail</label>
        <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Seu e-mail" required>
    </div>

    <div class="flex flex-col gap-1">
        <label for="password" class="block text-sm font-medium text-black">Senha</label>
        <input type="password" name="password" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Sua senha" required>
    </div>

    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Entrar</button>
</form>

@endsection