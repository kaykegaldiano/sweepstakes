@extends('auth.base')

@section('content')
    
<form action="{{ route('register') }}" method="POST" class="flex flex-col gap-4">

    @csrf

    @if ($errors->any())
        <div class="bg-white border border-solid text-primary-dark p-4 rounded mb-4 flex flex-col">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    @endif

    <div class="flex flex-col gap-1">
        <label for="name" class="block text-sm font-medium text-black">Nome</label>
        <input value="{{ old('name') }}" type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Digite seu nome">
    </div>

    <div class="flex flex-col gap-1">
        <label for="email" class="block text-sm font-medium text-black">E-mail</label>
        <input value="{{ old('email') }}" type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Digite seu e-mail">
    </div>

    <div class="flex flex-col gap-1">
        <label for="password" class="block text-sm font-medium text-black">Senha</label>
        <input type="password" name="password" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Sua senha">
    </div>

    <div class="flex flex-col gap-1">
        <label for="password_confirmation" class="block text-sm font-medium text-black">Confirme a Senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Confirme a Senha">
    </div>

    <button class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cadastrar</button>
</form>

@endsection