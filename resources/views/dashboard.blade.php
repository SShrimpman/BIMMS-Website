<x-app-layout>
    <div class="flex justify-center absolute w-screen z-10">
            @livewire('navigationmenu')
    </div>
    <div style="perspective: 10px;" class="h-screen overflow-y-auto overflow-x-hidden">
        <div class="flex justify-center">
            <h1 id="bimms" class="absolute mt-28 desktop:mt-56 text-[7rem] text-white drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all ease-in duration-1000 z-10">BIM<span class="text-bimmsGreen">MS</span></h1>
            <img id="X" class="absolute h-20 w-20 mt-64 desktop:mt-[375px] drop-shadow-[0_0_8px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all ease-in delay-1000 duration-1000 z-10" src="{{ asset('assets/handshake.svg')}}">
            <img id="cts" class="absolute h-80 w-80 mt-52 desktop:mt-[335px] drop-shadow-[0_0_3px_rgba(0,136,175,1)] opacity-0 transition-all ease-in delay-[2000ms] duration-1000 z-10" src="{{ asset('assets/cts.svg')}}">
            <h2 id="partOf" class="absolute mt-[430px] desktop:mt-[575px] text-lg text-white font-extrabold opacity-0 transition-all delay-[3000ms] duration-1000 z-10"><span class="drop-shadow-[0_0_5px_rgba(0,136,175,1)]">BIM<span class="text-bimmsGreen">MS</span></span> is now part of <span class="text-[#0051D6] drop-shadow-[0_0_5px_rgba(0,20,20,1)]">CTS Nordics</span></h2>
            <img class="h-screen w-screen shadow-lg shadow-gray-800" src="{{ asset('assets/bgSara.png')}}">
            <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-70"></div>
        </div>
        <div style="transform-style: preserve-3d;" class=" relative flex justify-center h-full w-screen -z-10">
            <img src="{{ asset('assets/bgCut.jpg')}}" style="transform: translateZ(-15px) scale(2.5);" class="absolute h-full w-full object-cover -z-10">
            <img src="{{ asset('assets/pngCut2.png')}}" style="transform: translateZ(-5px) scale(1.5);" class="absolute h-full w-full object-cover -z-10">
            <div class="flex flex-col z-10">
                <div id="bimms2" class="flex justify-center mt-36 desktop:mt-36 w-screen text-5xl desktop:text-[7rem] text-white drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all ease-in delay-[1500ms] duration-1000">The Future of</div>
                <div id="bimms3" class="flex justify-center desktop:mt-20 w-screen text-4xl desktop:text-[5.5rem] text-[#6fc3c0] drop-shadow-[0_0_5px_rgba(0,136,175,1)] font-extrabold opacity-0 transition-all ease-in delay-[2500ms] duration-1000">Data Centers!</div>
                <div id="bimms4" class="flex justify-center w-screen desktop:text-lg mt-24 text-white font-extrabold opacity-0 transition-all ease-in delay-[3500ms] duration-1000">
                    <div class="desktop:w-72 text-center">
                        This partnership drives <span class="drop-shadow-[0_0_5px_rgba(0,136,175,1)]">BIM<span class="text-bimmsGreen">MS</span></span> to the forefront of Data Center Construction
                    </div>
                </div>
            </div>
            <div class="h-screen fixed object-cover inset-x-0 inset-y-0 bg-gradient-to-r from-[#041C2B] to-[#041C2B] opacity-40"></div>
        </div>
        <div class="text-[2rem] bg-gray-900 p-8 h-screen text-white shadow-shadowTop">
            Hello
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const element = document.getElementById('bimms');
        const x = document.getElementById('X');
        const cts = document.getElementById('cts');
        const partOf = document.getElementById('partOf');
        const element2 = document.getElementById('bimms2');
        const element3 = document.getElementById('bimms3');
        const element4 = document.getElementById('bimms4');

        element.classList.remove('opacity-0');
        x.classList.remove('opacity-0');
        cts.classList.remove('opacity-0');
        partOf.classList.remove('opacity-0');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    element2.classList.remove('opacity-0');
                    element3.classList.remove('opacity-0');
                    element4.classList.remove('opacity-0');
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(element2);
        observer.observe(element3);
        observer.observe(element4);
    })
</script>
