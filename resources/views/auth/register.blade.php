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
        <label for="name" class="block text-sm font-medium text-white">Nome</label>
        <input value="{{ old('name') }}" type="text" name="name" id="name" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Digite seu nome">
    </div>

    <div class="flex flex-col gap-1">
        <label for="email" class="block text-sm font-medium text-white">E-mail</label>
        <input value="{{ old('email') }}" type="email" name="email" id="email" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Digite seu e-mail">
    </div>

    <div class="flex flex-col gap-1">
        <label for="password" class="block text-sm font-medium text-white">Senha</label>
        <input type="password" name="password" id="password" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Sua senha">
    </div>

    <div class="flex flex-col gap-1">
        <label for="password_confirmation" class="block text-sm font-medium text-white">Confirme a Senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Confirme a Senha">
    </div>

    <button class="p-2 bg-white text-black w-full rounded-lg">Login</button>
</form>

@endsection