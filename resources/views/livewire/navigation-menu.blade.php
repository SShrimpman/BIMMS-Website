<div x-data="{ showMenu: false, hamburger: false }">
    <div class="grid grid-cols-2 transition-colors duration-500 {{ $isScrolled ? 'bg-white' : 'bg-transparent' }}">
      <div class="flex justify-center">
        <a href="/" class="w-40 mt-1 mb-2 hover:scale-110 transition-all duration-500">
          <img style="transition: opacity 0.5s ease-in;" src="{{ $isScrolled ? asset('assets/bimmsLogo.png') : asset('assets/bimmsWhite.png') }}">
        </a>
      </div>

      {{-- MOBILE Menu --}}

      <div class="desktop:hidden flex items-center justify-end mr-1">
        <div class="mr-4 md:mr-20 lg:mr-10 z-50 {{ $isScrolled ? 'text-black' : 'text-white' }}">
          <button x-on:click="hamburger = !hamburger, showMenu = !showMenu, $dispatch('toggle-menu', showMenu)" class="flex items-center space-x-2 focus:outline-none">
              <div class="w-6 h-6 flex items-center justify-center relative">
                  <span x-bind:class="hamburger ? 'translate-y-0 rotate-45' : '-translate-y-2'"
                          class="transform transition w-full h-px bg-current absolute"></span>

                  <span x-bind:class="hamburger ? 'opacity-0 translate-x-3' : 'opacity-100'"
                          class="transform transition w-full h-px bg-current absolute"></span>

                  <span x-bind:class="hamburger ? 'translate-y-0 -rotate-45' : 'translate-y-2'"
                          class="transform transition w-full h-px bg-current absolute"></span>
              </div>
          </button>
        </div>
      </div>
      <div x-show="showMenu" x-on:enter="document.body.classList.add('overflow-hidden')" x-on:leave="document.body.classList.remove('overflow-hidden')"
           x-transition:enter="transition ease-in duration-300 transform"
           x-transition:enter-start="translate-x-full"
           x-transition:enter-end="translate-x-0"
           x-transition:leave="transition ease-in duration-300 transform"
           x-transition:leave-start="translate-x-0"
           x-transition:leave-end="translate-x-full"
           class="fixed h-full top-0 right-0 items-center backdrop-blur-xl z-10 w-full select-none">
        <div class="flex justify-center items-center h-full w-full mt-8">
            <nav class="float-left text-white">
                <ul class="list-none space-y-4 text-center" x-data="{ open: false, account: false }">
                    <li class="relative">
                        <div class="flex justify-center items-center">
                            <a wire:navigate href="/who-we-are" class="block outline-0 no-underline text-xl">WHO WE ARE</a>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="fill-white ml-2  transition-all"
                                 @click="open = !open"
                                 :class="{'rotate-0 duration-700': open, 'rotate-180 duration-1000': !open }"
                                 height="1em" viewBox="0 0 320 512">
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                        </div>
                        <ul class="space-y-2 overflow-hidden transition-all duration-1000 text-gray-300"
                            :class="{ 'max-h-[400px]': open, 'max-h-0': !open}">
                            <li><a class="block m-4 outline-0 no-underline" href="#">BIMMS Vision</a></li>
                            <li><a class="block m-4 outline-0 no-underline" href="#">OUR CULTURE</a></li>
                            <li><a class="block m-4 outline-0 no-underline" href="#">Leadership</a></li>
                            <li><a class="block m-4 outline-0 no-underline" href="#">SUSTAINABILITY COMMITMENT</a></li>
                            <li><a class="block m-4 outline-0 no-underline" href="#">INNOVATION</a></li>
                            <li><a class="block m-4 outline-0 no-underline" href="#">BIMMS POSITIVE IMPACT</a></li>
                        </ul>
                    </li>
                    <li><a wire:navigate href="/projects" class="block outline-0 no-underline text-xl" href="#">PROJECTS</a></li>
                    <li><a wire:navigate href="/markets" class="block outline-0 no-underline text-xl" href="#">MARKETS</a></li>
                    <li><a wire:navigate href="/careers" class="block outline-0 no-underline text-xl" href="#">CAREERS</a></li>
                    @auth
                      <li class="relative">
                        <div class="flex justify-center items-center cursor-default" @click="account = !account">
                            <span class="block outline-0 no-underline text-xl text-gray-400" href="#">MANAGE ACCOUNT</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="fill-gray-400 ml-2  transition-all"
                                :class="{'rotate-0 duration-700': account, 'rotate-180 duration-1000': !account }"
                                height="1em" viewBox="0 0 320 512">
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                        </div>
                        <ul class="space-y-2 overflow-hidden transition-all duration-1000 text-gray-400"
                            :class="{ 'max-h-[400px]': account, 'max-h-0': !account}">
                            <li><a wire:navigate href="{{ route('profile.show') }}" class="block m-4 outline-0 no-underline">Profile</a></li>
                            <li>
                              <a wire:navigate href="{{ route('logout') }}" class="block m-4 outline-0 no-underline"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                Logout
                              </a>
                            </li>
                        </ul>
                      </li>
                    @endauth
                </ul>
            </nav>
        </div>
      </div>

      {{-- DESKTOP Menu --}}

      <div class="desktop:flex justify-center items-center space-x-3 hidden">
        <div
          class="group flex items-center space-x-1 hover:text-bimmsGreen hover:scale-110 transition-all duration-500 cursor-default {{ $isScrolled ? 'text-black' : 'text-white' }}">
          <a wire:navigate href="/who-we-are">WHO WE ARE</a>
          <svg xmlns="http://www.w3.org/2000/svg"
            class="rotate-180 group-hover:rotate-0 group-hover:fill-bimmsGreen transition-all duration-500 {{ $isScrolled ? 'fill-black' : 'fill-white' }}"
            height="1em" viewBox="0 0 320 512">
            <path
              d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
          </svg>
          <div
            class="absolute bg-white text-black border border-bimmsGreen w-auto min-w-max m-2 top-4 text-sm rounded-md shadow-md transition-all duration-500 scale-0 group-hover:scale-100 origin-top">
            <ul class="flex flex-col">
              <a wire:navigate href=""
                class="hover:bg-gray-500 rounded-t-md py-1 hover:text-bimmsGreen px-2 transition-all duration-300">BIMMS Vision</a>
                <hr class="border-bimmsGreen">
              <a wire:navigate href=""
                class="hover:bg-gray-500 py-1 hover:text-bimmsGreen px-2 transition-all duration-300">Our Culture</a>
                <hr class="border-bimmsGreen">
              <a wire:navigate href=""
                class="hover:bg-gray-500 py-1 hover:text-bimmsGreen px-2 transition-all duration-300">Leadership</a>
                <hr class="border-bimmsGreen">
              <a wire:navigate href=""
                class="hover:bg-gray-500 py-1 hover:text-bimmsGreen px-2 transition-all duration-300">Sustainability Commitment</a>
                <hr class="border-bimmsGreen">
              <a wire:navigate href=""
                class="hover:bg-gray-500 py-1 hover:text-bimmsGreen px-2 transition-all duration-300">Innovation</a>
                <hr class="border-bimmsGreen">
              <a wire:navigate href=""
                class="hover:bg-gray-500 rounded-b-md py-1 hover:text-bimmsGreen px-2 transition-all duration-300">BIMMS Positive Impact</a>
            </ul>
          </div>
        </div>
        <a wire:navigate href="/projects"
          class="hover:text-bimmsGreen hover:scale-110 transition-all duration-500 {{ $isScrolled ? 'text-black' : 'text-white' }}">PROJECTS</a>
        <a wire:navigate href="/markets"
          class="hover:text-bimmsGreen hover:scale-110 transition-all duration-500 {{ $isScrolled ? 'text-black' : 'text-white' }}">MARKETS</a>
        <a wire:navigate href="/careers"
          class="hover:text-bimmsGreen hover:scale-110 transition-all duration-500 {{ $isScrolled ? 'text-black' : 'text-white' }}">CAREERS</a>
        @auth
        <div class="group flex items-center space-x-1 hover:text-bimmsGreen hover:scale-110 transition-all duration-500 cursor-default {{ $isScrolled ? 'text-black' : 'text-white' }}">
          <span>ACCOUNT</span>
          <svg xmlns="http://www.w3.org/2000/svg"
            class="rotate-180 group-hover:rotate-0 group-hover:fill-bimmsGreen transition-all duration-500 {{ $isScrolled ? 'fill-black' : 'fill-white' }}"
            height="1em" viewBox="0 0 320 512">
            <path
              d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
          </svg>
          <div
            class="absolute bg-white text-black border border-bimmsGreen w-32 m-2 top-4 rounded-md shadow-md transition-all duration-500 scale-0 group-hover:scale-100 origin-top">
            <ul class="flex flex-col">
              <a wire:navigate href="{{ route('profile.show') }}"
                class="hover:bg-gray-500 rounded-t-md py-1 hover:text-bimmsGreen px-2 transition-all duration-300">Profile</a>
              <hr class="border-bimmsGreen">
              <a wire:navigate href="{{ route('logout') }}"
                class="hover:bg-gray-500 rounded-b-md py-1 hover:text-bimmsGreen px-2 transition-all duration-300" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
            </ul>
          </div>
        </div>
        @endauth
      </div>
    </div>
  </div>
