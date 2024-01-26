<x-splade-toggle>
	<nav
		class="absolute inset-x-0 top-0 z-50 rounded-md border-white bg-white bg-clip-padding text-black">
		<!-- Primary Navigation Menu -->
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="flex h-16 justify-between">
				<div class="flex">
					<!-- Logo -->
					<div class="flex shrink-0 items-center">
						<Link href="{{ route('dashboard') }}">
						<x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
						</Link>
					</div>

					<!-- Navigation Links -->
					<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
						<x-nav-link :href="route('guest')" :active="request()->routeIs('guest')">
							{{ __('Home') }}
						</x-nav-link>
					</div>
					<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
						<x-nav-link :href="route('artikel')" :active="request()->routeIs('artikel')">
							{{ __('Artikel') }}
						</x-nav-link>
					</div>
					<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
						<x-nav-link :href="route('prestasi')" :active="request()->routeIs('prestasi')">
							{{ __('Prestasi') }}
						</x-nav-link>
					</div>
					<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
						<x-nav-link :href="route('dokumentasi')" :active="request()->routeIs('dokumentasi')">
							{{ __('Dokumentasi') }}
						</x-nav-link>
					</div>
				</div>

				<!-- Hamburger -->
				<div class="-mr-2 flex items-center sm:hidden">
					<button @click="toggle"
						class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
						<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
							<path v-bind:class="{ hidden: toggled, 'inline-flex': !toggled }" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
							<path v-bind:class="{ hidden: !toggled, 'inline-flex': toggled }" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>
			</div>
		</div>

		<!-- Responsive Navigation Menu -->
		<div v-bind:class="{ block: toggled, hidden: !toggled }" class="sm:hidden">
			<div class="space-y-1 pb-3 pt-2">
				<x-nav-link :href="route('guest')" :active="request()->routeIs('guest')">
					{{ __('Home') }}
				</x-nav-link>
			</div>
			<div class="space-y-1 pb-3 pt-2">
				<x-nav-link :href="route('artikel')" :active="request()->routeIs('artikel')">
					{{ __('Artikel') }}
				</x-nav-link>
			</div>
			<div class="space-y-1 pb-3 pt-2">
				<x-nav-link :href="route('prestasi')" :active="request()->routeIs('prestasi')">
					{{ __('Prestasi') }}
				</x-nav-link>
			</div>
			<div class="space-y-1 pb-3 pt-2">
				<x-nav-link :href="route('dokumentasi')" :active="request()->routeIs('dokumentasi')">
					{{ __('Dokumentasi') }}
				</x-nav-link>
			</div>
		</div>
	</nav>
</x-splade-toggle>
