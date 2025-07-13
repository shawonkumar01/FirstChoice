<div>
    <button 
        wire:click="logout"
        wire:loading.attr="disabled"
        wire:target="logout"
        type="button"
        class="w-full text-start"
    >
        <x-dropdown-link>
            <div class="flex items-center gap-2">
                <span wire:loading wire:target="logout">
                    <x-spinner class="h-4 w-4" />
                </span>
                <span>{{ __('Log Out') }}</span>
            </div>
        </x-dropdown-link>
    </button>

    @script
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('logout-error', (event) => {
                alert(event.message);
            });
        });
    </script>
    @endscript
</div>