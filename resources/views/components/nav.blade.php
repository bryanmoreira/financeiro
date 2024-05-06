@vite('resources/css/app.css')
<nav class="bg-gray-100 h-full w-fit">
    <ul class="list-none flex flex-col justify-center h-full p-5">
        <div class="flex flex-col justify-center flex-grow">

            <x-nav-item :href="route('inicio')" :active="request()->routeIs('inicio')" class="mb-2 p-2 hover:text-green-600 font-bold text-lg flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-power mr-2"><path d="M12 2v10"/><path d="M18.4 6.6a9 9 0 1 1-12.77.04"/></svg>
                {{ __('Início') }}
            </x-nav-item>

            <x-nav-item :href="route('registrar')" :active="request()->routeIs('registrar')" class="mb-2 p-2 hover:text-green-600 font-bold text-lg flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-left mr-2"><path d="m16 3 4 4-4 4"/><path d="M20 7H4"/><path d="m8 21-4-4 4-4"/><path d="M4 17h16"/></svg>
            {{ __('Registrar transação') }}
            </x-nav-item>

            <x-nav-item :href="route('extrato')" :active="request()->routeIs('extrato')" class="mb-2 p-2 hover:text-green-600 font-bold text-lg flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-minus mr-2"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M9 14h6"/></svg>
                {{ __('Extrato') }}
            </x-nav-item>

            <x-nav-item :href="route('contas')" :active="request()->routeIs('contas')" class="mb-2 p-2 hover:text-green-600 font-bold text-lg flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark mr-2"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
                {{ __('Minhas contas') }}
            </x-nav-item>

            <x-nav-item :href="route('cartoes')" :active="request()->routeIs('cartoes')" class="mb-2 p-2 hover:text-green-600 font-bold text-lg flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card mr-2"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                {{ __('Cartões de crédito') }}
            </x-nav-item>

            <x-nav-item :href="route('objetivos')" :active="request()->routeIs('objetivos')" class="mb-2 p-2 hover:text-green-600 font-bold text-lg flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-goal mr-2"><path d="M12 13V2l8 4-8 4"/><path d="M20.561 10.222a9 9 0 1 1-12.55-5.29"/><path d="M8.002 9.997a5 5 0 1 0 8.9 2.02"/></svg>
                {{ __('Objetivos') }}
            </x-nav-item>
        </div>

        <x-nav-item :href="route('perfil')" :active="request()->routeIs('perfil')" class="mb-2 p-2 hover:text-green-600 font-bold text-lg flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user mr-2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            {{ __('Perfil') }}
        </x-nav-item>
    </ul>
</nav>
