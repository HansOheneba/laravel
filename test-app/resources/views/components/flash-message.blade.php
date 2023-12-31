@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(()=> show = false, 2500)" 
    x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" 
        class="fixed top-0 left-1/2 transform w-fit -translate-x-1/2 bg-laravel text-white text-center px-10 py-3"><p>
    {{session('message')}}</p></div>
@endif