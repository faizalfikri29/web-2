<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
          <div class="p-6">
        <h1 class="text-2xl font-bold">Halo, {{ Auth::user()->name }}</h1>
        <p></p>
    </div>
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="bg-black dark:bg-neutral-800 rounded-xl shadow p-6">
                    <h2 class="text-lg font-semibold">Total Ruang</h2>
                    <p class="text-3xl font-bold mt-2">{{ $totalRuang }}</p>
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="bg-black dark:bg-neutral-800 rounded-xl shadow p-6">
                    <h2 class="text-lg font-semibold">Total Pegawai</h2>
                    <p class="text-3xl font-bold mt-2">{{ $totalPegawai }}</p>
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                  <div class="bg-black dark:bg-neutral-800 rounded-xl shadow p-6">
                <h2 class="text-lg font-semibold">Total Peminjaman</h2>
                <p class="text-3xl font-bold mt-2">{{ $totalPeminjaman }}</p>
            </div>
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>
