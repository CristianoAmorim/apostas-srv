<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Painel de Controle</li>
                </ol>
            </nav>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="/usuarios/controle" class="underline text-gray-900 dark:text-white">1 - Controle de Usuários (Administradores)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
