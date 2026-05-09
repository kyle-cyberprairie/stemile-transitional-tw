<x-layout :title="$title" :description="$description" :url="$url">  
    <section class="w-full px-4 lg:px-0 bg-primary-dark flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
            <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                <img src="{{ asset('img/men/tmiy.jpg')}}" alt="That man is you" class="w-full">
            </div>
        </div>
    </section>
    <section class="w-full px-4 lg:px-0 bg-white flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
            <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                <h2 class="border-b font-cinzel w-full text-3xl text-center">Men's Leadership Program</h2>
            </div>
            <div class="flex flex-col md:flex-row md:gap-12 md:mb-0 mb-6">
                <div class="flex-1 justify-center items-center">
                    <img src="{{ asset('img/men/St. Emile_Trifold with QR Code_page-0001.jpg') }}" alt="">
                    <img src="{{ asset('img/men/tmiytrifold2.png') }}" alt="">
                    <p class="mt-8 uppercase text-center text-xl">
                        Join us saturday mornings!
                    </p>
                    <p class="uppercase text-center text-xl">
                         7:30 AM <strong>FELLOWSHIP</strong>
                    </p>
                    <p class="uppercase text-center text-xl">
                        7:50 AM <strong>PRESENTATION BEGINS</strong>
                    </p>
                    <p class="uppercase text-center text-xl">
                        8:30 AM <strong>SMALL GROUP</strong>
                    </p>
                    <p class="uppercase text-center text-xl">
                        9:00 AM <strong>PROGRAM ENDS</strong>
                    </p>
                    <p class="uppercase text-center text-xl">
                         9:30 AM <strong>MASS (OPTIONAL) </strong>
                    </p>
                    <p class="text-center text-xl">
                        For more information, please contact Adam at<br>
                        <a href="mailto:TMIY.mb@gmail.com">TMIY.mb@gmail.com</a> 
                        or call / text <a href="tel:204-930-9484">204-930-9484</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>