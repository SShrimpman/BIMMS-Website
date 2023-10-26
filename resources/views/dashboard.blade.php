<div>
    <div id="navbar" class="absolute z-10 transition-all duration-500">
        @livewire('navigationmenu')
    </div>
    <div id="parallax" style="perspective: 10px;" class="relative h-screen overflow-y-auto overflow-x-hidden">
        <div class="flex justify-center">
            <h1 id="bimms" class="absolute mt-32 desktop:mt-56 text-[6rem] desktop:text-[7rem] text-white drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all ease-in duration-1000 z-10">BIM<span class="text-bimmsGreen">MS</span></h1>
            <img id="handshake" class="absolute h-20 w-20 mt-64 desktop:mt-[375px] drop-shadow-[0_0_5px_rgba(0,20,20,1)] font-extrabold opacity-0 transition-all ease-in delay-500 duration-1000 z-10" src="{{ asset('assets/handshake.svg')}}">
            <img id="cts" class="absolute h-80 w-80 mt-52 desktop:mt-[335px] drop-shadow-[0_0_5px_rgba(0,20,20,1)] opacity-0 transition-all ease-in delay-1000 duration-1000 z-10" src="{{ asset('assets/cts.svg')}}">
            <h2 id="partOf" class="absolute mt-[430px] desktop:mt-[575px] text-lg text-white font-extrabold opacity-0 transition-all delay-[1500ms] duration-1000 z-10"><span class="drop-shadow-[0_0_5px_rgba(0,136,175,1)]">BIM<span class="text-bimmsGreen">MS</span></span> is now part of <span class="text-[#0051D6] drop-shadow-[0_0_5px_rgba(0,20,20,1)]">CTS Nordics</span></h2>
            <img class="h-screen w-screen shadow-shadowBot" src="{{ asset('assets/bgSara.png')}}">
            <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-70"></div>
        </div>
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
        <div class="text-[2rem] text-black bg-white p-8 h-[692px] shadow-shadowTop">
            The content in here needs to occupy at least 692 pixels
        </div>
    </div>
</div>

<script>
    const navbar = document.getElementById('navbar');
    const viewportWidth = window.innerWidth;
    const parallaxDiv = document.getElementById('parallax');
    const bimms = document.getElementById('bimms');
    const handshake = document.getElementById('handshake');
    const cts = document.getElementById('cts');
    const partOf = document.getElementById('partOf');
    const future = document.getElementById('future');
    const dataCenters = document.getElementById('dataCenters');
    const partnership = document.getElementById('partnership');
    let lastScrollTop = parallaxDiv.scrollY  || parallaxDiv.scrollTop;

    function adjustWidth() {
        const scrollBarWidth = parallaxDiv.offsetWidth - parallaxDiv.clientWidth;
        const adjustedWidth = window.innerWidth - scrollBarWidth;

        navbar.style.width = `${adjustedWidth}px`;
    }

    window.onload = adjustWidth;
    window.addEventListener('resize', adjustWidth);

    parallaxDiv.addEventListener('scroll', function() {
        if( parallaxDiv.scrollTop > 0 ) {
            @this.dispatch('scrolled');
        } else {
            @this.dispatch('scrollOnTop');
        }

        if (viewportWidth < 1281) {
            const scrollTopPosition = parallaxDiv.scrollTop;
            if (scrollTopPosition > lastScrollTop) {
                navbar.classList.add('-translate-y-20');
                console.log('scrolling down');
            } else if (scrollTopPosition < lastScrollTop || scrollTopPosition === 0) {
                navbar.classList.remove('-translate-y-20');
                console.log('scrolling up or at the top');
            }
            lastScrollTop = scrollTopPosition <= 0 ? 0 : scrollTopPosition;
        }

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const isBelow = entry.boundingClientRect.top > 0;

                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0');
                    entry.target.classList.remove('translate-y-20');
                } else if (isBelow) {
                    entry.target.classList.add('opacity-0');
                    entry.target.classList.add('translate-y-20');
                }
            });
        });

        observer.observe(future);
        observer.observe(dataCenters);
        observer.observe(partnership);
    });

    document.addEventListener('DOMContentLoaded', function() {
        bimms.classList.remove('opacity-0');
        handshake.classList.remove('opacity-0');
        cts.classList.remove('opacity-0');
        partOf.classList.remove('opacity-0');
    });
</script>
