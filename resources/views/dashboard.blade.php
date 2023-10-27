<div>
    {{-- Navbar --}}

        <div id="navbar" class="absolute z-10 transition-all duration-500">
            @livewire('navigationmenu')
        </div>

    {{-- Parallax Page --}}

        <div id="parallax" style="perspective: 10px;" class="relative h-screen overflow-y-auto overflow-x-hidden">

            {{-- First Section  --}}

                <div class="flex justify-center">
                    <h1 id="bimms" class="absolute mt-32 desktop:mt-56 text-[6rem] desktop:text-[7rem] text-white drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all ease-in duration-1000 z-10">BIM<span class="text-bimmsGreen">MS</span></h1>
                    <img id="handshake" class="absolute h-20 w-20 mt-64 desktop:mt-[375px] drop-shadow-[0_0_5px_rgba(0,20,20,1)] font-extrabold opacity-0 transition-all ease-in delay-500 duration-1000 z-10" src="{{ asset('assets/handshake.svg')}}">
                    <img id="cts" class="absolute h-80 w-80 mt-52 desktop:mt-[335px] drop-shadow-[0_0_5px_rgba(0,20,20,1)] opacity-0 transition-all ease-in delay-1000 duration-1000 z-10" src="{{ asset('assets/cts.svg')}}">
                    <h2 id="partOf" class="absolute mt-[430px] desktop:mt-[575px] text-lg text-white font-extrabold opacity-0 transition-all delay-[1500ms] duration-1000 z-10"><span class="drop-shadow-[0_0_5px_rgba(0,136,175,1)]">BIM<span class="text-bimmsGreen">MS</span></span> is now part of <span class="text-[#0051D6] drop-shadow-[0_0_5px_rgba(0,20,20,1)]">CTS Nordics</span></h2>
                    <img class="h-screen w-screen shadow-shadowBot" src="{{ asset('assets/bgSara.png')}}">
                    <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-70"></div>
                </div>

            {{-- Parallax Section --}}

                <div style="transform-style: preserve-3d;" class=" relative flex justify-center h-full w-screen -z-10">
                    <img src="{{ asset('assets/bgCut.jpg')}}" style="transform: translateZ(-15px) scale(2.5);" class="absolute h-full w-full object-cover -z-10">
                    <img src="{{ asset('assets/pngCut2.png')}}" style="transform: translateZ(-5px) scale(1.5);" class="absolute h-full w-full object-cover -z-10">
                    <div class="flex flex-col z-10">
                        <div id="future" class="flex justify-center mt-36 desktop:mt-36 w-screen text-5xl desktop:text-[6rem] text-white drop-shadow-[0_0_5px_rgba(0,20,20,1)] font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-100 duration-1000">The Future of</div>
                        <div id="dataCenters" class="flex justify-center desktop:mt-8 w-screen text-4xl desktop:text-[5rem] text-[#6fc3c0] drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-200 duration-1000">Data Centers!</div>
                        <div id="partnership" class="flex justify-center w-screen desktop:text-lg mt-20 desktop:mt-24 text-white font-extrabold opacity-0 transition-all translate-y-20 ease-in delay-300 duration-1000">
                            <div class="desktop:w-72 text-center drop-shadow-[0_0_5px_rgba(0,20,20,1)]">
                                This partnership drives <span class="drop-shadow-[0_0_5px_rgba(0,136,175,1)]">BIM<span class="text-bimmsGreen">MS</span></span> to the forefront of Data Center Construction
                            </div>
                        </div>
                    </div>
                    <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-40"></div>
                </div>

            {{-- Content After Parallax --}}

                <div class="text-[2rem] text-black bg-white p-8 h-[692px] shadow-shadowTop">
                    The content in here needs to occupy at least 692 pixels
                </div>
        </div>
</div>

<script>
    // -------------------------------------------------Variables-----------------------------------------------------

        const navbar = document.getElementById('navbar'); // Navbar Element
        const viewportWidth = window.innerWidth; // Element with the Width of the screen
        const parallaxDiv = document.getElementById('parallax'); // Parallax Element
        const bimms = document.getElementById('bimms'); // Bimms Text Element in the center of the first section
        const handshake = document.getElementById('handshake'); // Handshake SVG Element right next to Bimms Text
        const cts = document.getElementById('cts'); // CTS Logo Element right next to the Handshake
        const partOf = document.getElementById('partOf'); // Phrase Element right next to the CTs Logo
        const elementsToAnimate = [bimms, handshake, cts, partOf]; // Array of the 4 elements above
        const future = document.getElementById('future'); // First Text Title inside the Parallax effect element
        const dataCenters = document.getElementById('dataCenters'); // Second Text Title inside the Parallax effect element
        const partnership = document.getElementById('partnership'); // Phrase inside the Parallax effect element
        let lastScrollTop = parallaxDiv.scrollY || parallaxDiv.scrollTop; // Position of the scroll last time it moved and stopped

    // ---------------------------------------------------------------------------------------------------------------

    // -------------------------------------Code to Adjust the Width of The Navbar------------------------------------

        function adjustWidth() {
            const scrollBarWidth = parallaxDiv.offsetWidth - parallaxDiv.clientWidth; // Variable to calculate the width of the scrollbar
            const adjustedWidth = window.innerWidth - scrollBarWidth; // Variable with the adjusted width without the scrollbar

            navbar.style.width = `${adjustedWidth}px`; // Navbar width applied with the adjusted width without the scrollbar
        }

        // Code to dynamically adjust the width of the navbar
            window.addEventListener('resize', adjustWidth);
            window.onload = adjustWidth;

    // --------------------------------------------------------------------------------------------------------------

    // -----------------------------------------Code of the Scroll Events--------------------------------------------

        function handleScroll() {
            const scrollTopPosition = parallaxDiv.scrollTop; // Variable to verify if the scroll is on top of the page, if it is equal to 0 it is on top, if it is bigger it's not

            // Condition to verify if a scrolled ocurred to dispatch events to the navbar to stylise it accordingly
            if (scrollTopPosition > 0) {
                @this.dispatch('scrolled');
            } else {
                @this.dispatch('scrollOnTop');
            }

            // Condition to verify if the viewport is for Tablet or Mobile to Hide the navbar on scroll down and show it on scroll up
            if (viewportWidth < 1281) {
                navbar.classList.toggle('-translate-y-20', scrollTopPosition > lastScrollTop && scrollTopPosition > 0);
                lastScrollTop = Math.max(scrollTopPosition, 0); // This line ensures that lastScrollTop is always greater than or equal to 0. If scrollTopPosition is negative, it sets lastScrollTop to 0.
            }

            // Code to verify when the elements are intersecting in the view to remove/add styles to animate them
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    const isBelow = entry.boundingClientRect.top > 0; // Variable to check if the element position is below in the viewport

                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-20');
                    } else if (isBelow) {
                        entry.target.classList.add('opacity-0', 'translate-y-20');
                    }
                });
            });

            [future, dataCenters, partnership].forEach(element => observer.observe(element));
        }

        parallaxDiv.addEventListener('scroll', handleScroll);

    // -------------------------------------------------------------------------------------------------------------

    // ---------------Code to remove the opacity for the animation in the initial load of the page------------------

        document.addEventListener('DOMContentLoaded', function() {
            elementsToAnimate.forEach(element => element.classList.remove('opacity-0'));
        });

    // -------------------------------------------------------------------------------------------------------------
</script>
