<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px8">
            @livewire('payment-method-create')

            <div class="mt-8">
                @livewire('payment-method-list')
            </div>
        </div>
    </div>
</x-app-layout>
