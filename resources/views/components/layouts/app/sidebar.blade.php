<flux:navlist variant="outline">
   <flux:navlist.group :heading="__('Platform')" class="grid">
      <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
      <flux:navlist.item icon="building-office" :href="route('ruang.index')" :current="request()->routeIs('ruang')" wire:navigate>{{ __('Manajemen Ruang') }}</flux:navlist.item>
    </flux:navlist.group>
</flux:navlist>