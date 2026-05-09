<x-layout :title="$title" :description="$description" :url="$url">  
    <section class="w-full px-4 lg:px-0 bg-white flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
            <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                <h1 class="border-b font-cinzel w-full text-4xl">Faith & Spiritual Growth</h1>
            </div>
            <div class="flex flex-col md:flex-row md:gap-12 md:mb-0 mb-6">

                <div class="flex flex-wrap flex-col lg:flex-row lg:gap-12 lg:*:mb-0 *:mb-6 items-center justify-center w-full">
                    <div class="flex-1">
                        <iframe width="450" height="260" src="https://www.youtube.com/embed/5v-YuHDLZ-s?si=X8BMNf-hf6jAFi1b" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="flex-1">
                        <iframe width="450" height="260" src="https://www.youtube.com/embed/Oahb7RE0FNQ?si=WZDtFg0RXIiO2jA9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="flex-1">
                        <iframe width="450" height="260" src="https://www.youtube.com/embed/hsYJiAmEJVI?si=9wlGgKxA2gPYay6a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="w-full px-4 lg:px-0 bg-primary text-secondary flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
            <h2 class="border-b font-cinzel w-full text-3xl text-center mb-4">Prayer for Parish Renewal</h2>
            <p>
                Archbishop LeGatt is asking parishes to join in prayer for parish renewal, 
                asking the Spirit to make us "flames of faith, hope and love
                within our families, in our communities and in our workplaces."
            </p>
            <div class="mx-4 italic">
                <p>God, Father full of tenderness for your children, you fill us with your grace, your joy and your peace.</p>
                <p> As disciples of Christ, we ask that every member of our Christian community be made aware of their vocation to share their gifts and charisms by putting them at the service of their brothers and sisters.</p>
                <p>
                     Send your Spirit so that, in this new effort of evangelization, we become flames of faith, hope and love within our families, in our communities and in our workplaces.
                </p>
                <p>
                     We are committed to becoming your hands, your feet, your eyes in this world.  Put in us the desire to live like You so that, through our actions and words, we radiate your love and divine mercy.
                </p>
                <p>
                     Bless our families; may they be environments that encourage the vocation of marriage, priesthood or religious life.  Saint Emile, pray for us.
                </p>
                <p>
                    Amen
                </p>
            </div>
            <p><a class="text-blue-200" href="{{ asset('documents/2020/4/PrayerOfParishRenewal.pdf') }}" target="_blank">Download the prayer for parish renewal for printing here.</a></p>
        </div>
    </section>
    <section class="w-full px-4 lg:px-0 bg-primary-dark text-secondary flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
            <h2 class="border-b font-cinzel w-full text-3xl text-center mb-4">Lectio Divina with Cardinal Collins</h2>
            <p>Join Cardinal Thomas Collins in Lectio Divina on the <a class="text-blue-200" href="https://www.archtoronto.org/lectio" target="_blank">web site of the Archdiocese of Toronto</a>.</p>
        </div>
    </section>
</x-layout>