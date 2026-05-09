<x-layout :title="$title" :description="$description" :url="$url">  
    <section class="w-full px-4 lg:px-0 bg-white flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
            <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                <h1 class="border-b font-cinzel w-full text-4xl"> Catechism & Sacramental Preparation Classes </h1>
            </div>
            <div class="flex flex-col md:flex-row md:gap-12 md:mb-0 mb-6">

                <div class="flex-1 mb-12">
                    <h3 class="border-b font-cinzel w-full text-2xl">Children's Catechism</h3>
                    <p>Sacramental Preparation (First Holy Communion, Catechism, and Confirmation, and Reconciliation) are starting this October!</p>
                    <p><strong>Catechism (for Grade 1-9): </strong></p>
                    <p>The group meets every Monday of the month from 6-7 pm in the Parish Hall. It is mandatory to attend if you are enrolled in other sacramental classes and you don't attend a Catholic School. If you attend a Catholic school, then catechism classes are optional, yet encouraged.</p>
                    <p>Catechism is held on Mondays from October to May.</p>
                    <p><strong>Reconciliation:</strong></p>
                    <p>For students ages 8 and above. The group meets every 1st and 3rd Wednesday each month, from 7-8pm in the Church (1st Semester October-January).</p>
                    <p><strong>Holy Communion:</strong></p>
                    <p>The group meets every 1st and 3rd Wednesday each month, from 7-8 pm in the Church (2nd Semester from January-June).</p>
                    <p><strong>Confirmation (must be 13+ or turning 13 by December to enroll): </strong></p>
                    <p>The group meets on the 2nd and 4th Wednesday evening from 7 to 8 p.m. in the parish centre (October to May).</p>
                    <p>Please register your children before <strong>September 22, 2025</strong>. You can find registration forms at the back of the church, at the parish office or you may download it below:</p>
                    <p><a href="{{ asset('documents/2025/8/Catechism Registration form 2025-2026.pdf') }}" target="_blank">Catechism Registration Form</a></p>
                    <p> If you have any questions, please email <a href="mailto:stemilecatechism@gmail.com">stemilecatechism@gmail.com</a>. We look forward to seeing you all there!</p>
                </div>
                <div class="flex-1">
                    <div class="mb-6">
                        <p class="italic"><img src="{{ asset('img/catechism/JesusChn.jpg') }}" alt="Jesus and Children" class="float-left mr-4">People were bringing even infants to him that he might touch them, and when the disciples saw this, they rebuked them. Jesus, however, called the children to himself and said, "Let the children come to me and do not prevent them; for the kingdom of God belongs to such as these.
                        <br>(Lk 18:15-16)</p>
                        <div class="">
                            <img src="{{ asset('img/catechism/CatechismStEmile.jpg')}}" alt="Procession" class="float-right ml-4">
                            <p class="italic"> If you don't behave as you believe, you will end by believing as you behave.</p>
                            <p> -- Fulton J. Sheen</p>
                            <p class="italic"> What you are is God's gift to you, what you become is your gift to God.</p>
                            <p> -- Hans Urs von Balthasar</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="w-full px-4 lg:px-0 bg-primary-dark text-secondary flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
            <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                <h2 class="border-b font-cinzel w-full text-3xl text-center">Sacramental Preparation</h2>
            </div>
            <div class="flex flex-col md:flex-row md:gap-12 md:mb-0 mb-6">
                <div class="flex-1">
                    <h3 class="border-b font-cinzel w-full text-2xl">First Confession</h3>
                    <p>For students ages 8 and above. The group meets once a month on a Wednesday evening from 7 to 8 p.m. in the parish centre with parents. </p>
                </div>
                <div class="flex-1">
                    <h3 class="border-b font-cinzel w-full text-2xl">First Communion</h3>
                    <p>The class meets once a month on a Wednesday evening from 7 to 8 p.m. in the parish centre with parents.</p>
                </div>
                <div class="flex-1">
                    <h3 class="border-b font-cinzel w-full text-2xl">Confirmation</h3>
                    <p>For students 13 years and over.  The group meets once a month on a Tuesday evening from 7 to 8 p.m. in the parish centre with parents.  Date to be determined by Archbishop Albert LeGatt.</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>