<x-layout :title="$title" :description="$description" :url="$url">  
    <section class="w-full px-4 lg:px-0 bg-white flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                    <h1 class="border-b font-cinzel w-full text-4xl">Frequently-Asked Questions</h1>
                </div>
                <div class="flex-1 mb-12">
                    <div class="w-full border mt-6">
                        <div class="accordions w-full">
                            <x-accordion id="faq-q1" title="Where is the chapel entrance?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>The entrance to the chapel is on the south side of the church property.</p>
                                        <p>If you park in the big parking lot, walk past the church and down the sidewalk towards the triplex and go right around the building, then keep walking away from St. Anne's Road towards the school.  The triplex will be on your left and the church on your right.</p>
                                        <p>Walk up the sidewalk to the chapel. You will see the chapel’s stained glass windows on your left as you go up the sidewalk.</p>
                                        <p>Turn left after you enter the building.</p>
                                    </section>
                                    <img
                                        alt="St. Emile Chapel Entrance"
                                        src="{{asset('img/faqs/StEmileChapelEntrance.jpg')}}"
                                        class="ml-4"
                                    />
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q2" title="Where is the parish office?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>The door to the parish office is on St. Anne’s Road.</p>
                                        <p>Walk from the main parking lot past the church proper and look to the right.  The parish office door is plainly marked.</p>
                                        <p>Press the button marked "office" and open the door when you hear the lock click.</p>
                                    </section>
                                    <img
                                        alt="St. Emile Parish Office"
                                        src="{{asset('img/faqs/StEmileOffice.jpg')}}"
                                        class="ml-4"
                                    />
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q3" title="Where is the entrance to the parish centre?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>The entrance to the parish hall is near St. Emile school.  Look for the wide double doors.  If there is an evening event in the parish centre, this is the way to get in.</p>
                                        <p> Entry to the parish centre is also available from the chapel entrance when the chapel is open.  When the church is open, you can get to the parish centre from the church:  walk toward the altar, turn left at the front between the front pews and the steps, and go through the doors, then turn right again.</p>
                                    </section>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q4" title="My dad can't get out to Mass? Could someone bring him communion?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>Yes!  Send a request by email to <a href="mailto:st-emile@shaw.ca">st-emile@shaw.ca</a> or call the parish office at <a href="tel:2042534176">204-253-4176</a> and leave a message for Geraldine.</p>
                                    </section>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q5" title="How do I arrange for a pastoral visit to my mother who can't get to Mass?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>Contact the parish office at <a href="tel:2042534176">204-253-4176</a></p>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q6" title="Can I carry the offertory gifts at a Mass at which my intention is being offered?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>Absolutely! Liturgical hosts are scheduled to carry the offertory gifts, 
                                            but if asked they will step aside to allow you to carry the gifts. 
                                            To arrange it beforehand, contact the hosting scheduler at <a href="mailto:st-emile@shaw.ca">st-emile@shaw.ca</a>
                                            as soon as you can so that she can contact the scheduled hosts ahead of time 
                                            to let them know they aren’t needed. If you will be alone, it is possible to 
                                            cancel only one of the scheduled hosts and have the other carry the gifts with you.
                                        </p>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q7" title="How can I become a communion minister or lector?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>
                                            To become a communion minister or lector, complete the Get Involved in St. Emile Parish form. 
                                            The form is available as a pamphlet on the shelf in front of the bulletin board in the church.
                                        </p>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q8" title="How can I sign up as a greeter or collector or to carry the offertory gifts?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>
                                            Members of the liturgical hosting ministry serve as greeters and collectors and carry the offertory gifts. 
                                            To become a liturgical host, complete the Get Involved in St. Emile Parish form. 
                                            The form is available as a pamphlet on the shelf in front of the bulletin board in the church.
                                        </p>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q9" title="How do I get more involved in the parish?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>
                                            Check out the Ministries page on this site for a list of ministries and organizations in the parish.
                                             Then complete the Get Involved in St. Emile Parish form. The form is available 
                                            as a pamphlet on the shelf in front of the bulletin board in the church.
                                        </p>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q10" title="Where is the library?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>
                                            The library is in the parish centre across the hall from the chapel entrance. If you attend the morning Mass in the chapel, just step down the hallway and choose a book. At other times, the library is available during office hours (most Mondays to Fridays between 9 a.m. and 3 p.m.), when there is an event in the parish centre, and when the church is open. Access to the parish centre during the week is through the office unless there is a special event going on.
                                        </p>
                                </div>
                            </x-accordion>
                            <x-accordion id="faq-q11" title="How can I put information on the St. Emile web site?">
                                <div class="flex flex-col lg:flex-row w-full">
                                    <section>
                                        <p>
                                            Contact the parish email address at <a href="mailto:st-emile@shaw.ca">st-emile@shaw.ca</a>.
                                        </p>
                                </div>
                            </x-accordion>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-layout>