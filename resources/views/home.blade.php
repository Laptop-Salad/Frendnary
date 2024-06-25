<x-layouts.app>
    <div class="lg:grid lg:grid-cols-2 flex flex-col justify-center lg:min-h-auto min-h-screen">
        <div class="p-6 md:h-screen flex flex-col justify-center items-start space-y-8">
            <h1 class="font-bold text-2xl md:text-8xl">Frendnary</h1>
            <p class="text-lg">Frendnary brings the memories and lore of friend groups into their own central and collaborative private dictionary.</p>
            <x-pack.link :route="route('register')" color="bg-primary">Start here</x-pack.link>
        </div>
        <div class="hidden lg:flex md:w-full w-1/2 justify-center p-2 md:p-20">
            <img src="images/friend-hug.png" alt="Frendnary logo">
        </div>
    </div>
</x-layouts.app>
