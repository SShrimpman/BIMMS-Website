<div>
    {{-- Navbar --}}

        <div id="navbar" class="absolute z-10 transition-all duration-500">
            @livewire('navigationmenu')
        </div>

    {{-- Parallax --}}

        <div id="parallax" style="perspective: 10px;" class="relative h-screen overflow-y-auto overflow-x-hidden">

            {{-- Primeira secção  --}}

                <div class="flex justify-center">
                    <h1 id="bimms" class="absolute mt-32 desktop:mt-56 text-8xl desktop:text-[7rem] text-white drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all ease-in duration-1000 z-10">BIM<span class="text-bimmsGreen">MS</span></h1>
                    <img id="handshake" class="absolute h-20 w-20 mt-64 desktop:mt-[375px] drop-shadow-[0_0_5px_rgba(0,20,20,1)] font-extrabold opacity-0 transition-all ease-in delay-500 duration-1000 z-10" src="{{ asset('assets/handshake.svg')}}">
                    <img id="cts" class="absolute h-80 w-80 mt-52 desktop:mt-[335px] drop-shadow-[0_0_5px_rgba(0,20,20,1)] opacity-0 transition-all ease-in delay-1000 duration-1000 z-10" src="{{ asset('assets/cts.svg')}}">
                    <h2 id="partOf" class="absolute mt-[430px] desktop:mt-[575px] text-lg text-white font-extrabold opacity-0 transition-all delay-[1500ms] duration-1000 z-10"><span class="drop-shadow-[0_0_5px_rgba(0,136,175,1)]">BIM<span class="text-bimmsGreen">MS</span></span> is now part of <span class="text-[#0051D6] drop-shadow-[0_0_5px_rgba(0,20,20,1)]">CTS Nordics</span></h2>
                    <img class="h-screen w-screen shadow-shadowBot" src="{{ asset('assets/bgSara.png')}}">
                    <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-70"></div>
                </div>

            {{-- Secção Parallax --}}

                <div style="transform-style: preserve-3d;" class="relative flex justify-center h-full w-screen -z-10">
                    <img src="{{ asset('assets/bgCut.jpg')}}" style="transform: translateZ(-15px) scale(2.5);" class="absolute h-full w-full object-cover -z-10">
                    <img src="{{ asset('assets/pngCut2.png')}}" style="transform: translateZ(-5px) scale(1.5);" class="absolute h-full w-full object-cover -z-10">
                    <div class="flex flex-col z-10">
                        <div id="future" class="flex justify-center mt-20 desktop:mt-36 w-screen text-[3.25rem] desktop:text-8xl text-white drop-shadow-[0_0_5px_rgba(0,20,20,1)] font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-100 duration-1000">The Future of</div>
                        <div id="dataCenters" class="flex justify-center desktop:mt-8 w-screen text-[2.75rem] desktop:text-[5rem] text-[#6fc3c0] drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-200 duration-1000">Data Centers!</div>
                        <div id="partnership" class="flex justify-center w-screen desktop:text-lg mt-20 desktop:mt-24 text-white font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-300 duration-1000">
                            <div class="desktop:w-72 text-center drop-shadow-[0_0_5px_rgba(0,20,20,1)]">
                                This partnership drives <span class="drop-shadow-[0_0_5px_rgba(0,136,175,1)]">BIM<span class="text-bimmsGreen">MS</span></span> to the forefront of Data Center Construction
                            </div>
                        </div>
                    </div>
                    <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-40"></div>
                </div>

            {{-- Conteúdo depois do Parallax --}}

                <div class="flex justify-center shadow-shadowTop">
                    <h1 id="markets" class="absolute mt-14 text-center desktop:mt-28 text-[3.25rem] desktop:text-[5.5rem] text-white drop-shadow-[0_0_5px_rgba(0,20,20,1)] font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-100 duration-1000 z-20">Creating Sustainable Outcomes</h1>
                    <div id="nordicMarkets" class="absolute h-full w-full font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-300 duration-1000 z-20">
                        <div class="grid grid-cols-5 content-center h-full">
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" height="4em" viewBox="0 0 448 512">
                                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                                </svg>
                            </div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" height="4em" viewBox="0 0 448 512">
                                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="h-screen w-screen fixed object-cover bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-50 z-10"></div>
                    <img class="h-screen w-screen -z-10" src="{{ asset('assets/dataCenter.png')}}">
                </div>
        </div>
</div>

<script>
    // -------------------------------------------------Variáveis-----------------------------------------------------

        const navbar = document.getElementById('navbar'); // Navbar Element
        const viewportWidth = window.innerWidth; // Element com a largura do Ecrã/Viewport
        const parallaxDiv = document.getElementById('parallax'); // Parallax Element
        const bimms = document.getElementById('bimms'); // Bimms Element no centro da primeira secção
        const handshake = document.getElementById('handshake'); // Handshake SVG Element logo a seguir ao Bimms element
        const cts = document.getElementById('cts'); // CTS Logo Element logo a seguir ao Handshake
        const partOf = document.getElementById('partOf'); // Element da Frase logo a seguir ao CTs Logo
        const elementsToAnimate = [bimms, handshake, cts, partOf]; // Array com os 4 elements acima
        const future = document.getElementById('future'); // Primeiro titulo dentro do Parallax element
        const dataCenters = document.getElementById('dataCenters'); // Segundo titulo dentro do Parallax element
        const partnership = document.getElementById('partnership'); // Frase dentro do Parallax element
        const markets = document.getElementById('markets'); // Primeiro titulo após o Parallax element
        const nordicMarkets = document.getElementById('nordicMarkets'); // Frase após os titulos
        let lastScrollTop = parallaxDiv.scrollY || parallaxDiv.scrollTop; // Posição da última vez que o scroll se mexeu e parou

    // ---------------------------------------------------------------------------------------------------------------

    // -------------------------------------Código para ajustar a largura da Navbar------------------------------------

        function adjustWidth() {
            const scrollBarWidth = parallaxDiv.offsetWidth - parallaxDiv.clientWidth; // Variável para calcular a largura da barra do scroll
            const adjustedWidth = window.innerWidth - scrollBarWidth; // Variável com a largura ajustada (sem a scrollbar)

            navbar.style.width = `${adjustedWidth}px`; // Largura ajustada aplicada à navbar
        }

        // Código para ajustar dinamicamente a largura da navbar
            window.addEventListener('resize', adjustWidth);
            window.onload = adjustWidth;

    // --------------------------------------------------------------------------------------------------------------

    // -----------------------------------------Código dos Eventos de Scroll--------------------------------------------

        function handleScroll() {
            const scrollTopPosition = parallaxDiv.scrollTop; // Variável para verificar se o scroll está no topo da página, se for igual a 0 está no topo, se for maior não está

            // Condição para verificar se ocorreu um scroll para enviar eventos para a navbar component para o estilizar
            if (scrollTopPosition > 0) {
                @this.dispatch('scrolled');
            } else {
                @this.dispatch('scrollOnTop');
            }

            // Condição para verificar se a viewport é para Tablet ou Mobile para ocultar a navbar ao dar scroll para baixo e mostrá-la ao dar scroll para cima
            if (viewportWidth < 1281) {
                navbar.classList.toggle('-translate-y-20', scrollTopPosition > lastScrollTop && scrollTopPosition > 0);
                lastScrollTop = Math.max(scrollTopPosition, 0); // Isto assegura que lastScrollTop é sempre maior ou igual a 0. Se 'scrollTopPosition' for negativo, define lastScrollTop para 0.
            }

            // Código para verificar quando os elementos estão a ser intersectados na view para remover/adicionar estilos e animá-los
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    const isBelow = entry.boundingClientRect.top > 0; // Variável para verificar se a posição do elemento está abaixo no ecrã/viewport

                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-20');
                    } else if (isBelow) {
                        entry.target.classList.add('opacity-0', 'translate-y-20');
                    }
                });
            });

            [future, dataCenters, partnership, markets, nordicMarkets].forEach(element => observer.observe(element));
        }

        parallaxDiv.addEventListener('scroll', handleScroll);

    // -------------------------------------------------------------------------------------------------------------

    // ---------------------Código para remover a opacidade no carregamento inicial da página-----------------------

        document.addEventListener('DOMContentLoaded', function() {
            elementsToAnimate.forEach(element => element.classList.remove('opacity-0'));
        });

    // -------------------------------------------------------------------------------------------------------------
</script>
