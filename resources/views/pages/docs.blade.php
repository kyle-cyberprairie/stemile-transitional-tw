<x-layout :title="$title" :description="$description" :url="$url">  
    <section class="w-full px-4 lg:px-0 bg-white flex justify-center">
        <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                <div class="container w-full max-w-c flex-col lg:flex-row items-center justify-center gap-12 py-12">
                    <h1 class="border-b font-cinzel w-full text-4xl">Documents</h1>
                </div>
                <div class="flex-1 mb-12">
                    <h2 class="border-b font-cinzel w-full text-2xl">Bulletins, Forms, Guideliness, and other documents</h2>
                    <div class="w-full border mt-6">
                        <div class="accordions w-full">
                            <x-accordion id="bulletins" title="Bulletins">
                                <p>Bulletins are published weekly and are available for download here.</p>
                                <ul class="list-disc list-inside">
                                    <li><a class="text-blue-500" target="_blank" href="/documents/2026/5/btn2026-05-31.pdf">31 May 2026, Holy Trinity Sunday</a></li>
                                    <li><a class="text-blue-500" target="_blank" href="/documents/2026/5/btn2026-05-24.pdf">24 May 2026, Pentecost Sunday</a></li>
                                    <li><a class="text-blue-500" target="_blank" href="/documents/2026/5/btn2026-05-17.pdf">17 May 2026, Ascension of the Lord</a></li>
                                    <li><a class="text-blue-500" target="_blank" href="/documents/2026/5/btn2026-05-10.pdf">10 May 2026, Sixth Sunday of Easter</a></li>
                                    <li><a class="text-blue-500" target="_blank" href="/documents/2026/5/btn2026-05-03.pdf">03 May 2026, Fifth Sunday of Easter</a></li>
                                    <li><a class="text-blue-500" target="_blank" href="/documents/2026/4/btn2026-04-26.pdf">26 April 2026, Fourth Sunday of Easter</a></li>
                                    
                                </ul>
                                <p class="max-w-96">
                                    To have an announcement published in the bulletin, 
                                    submit the text either in print to the parish office 
                                    or by email to st-emile@shaw.ca no later than 12 noon 
                                    on the Tuesday before the publication date.
                                </p>
                            </x-accordion>
                            <x-accordion id="registration" title="Registration Forms">
                                <p>Click <a class="text-blue-500" target="_blank" href="{{ asset('documents/2025/11/Registration Form 2025.pdf') }}">here</a> to download the parish registration form.</p>
                                <p>
                                    The registration form may be printed and filled out or opened in Acrobat to be completed electronically.
                                    Submit your form to the parish in one of four ways:
                                </p>
                                <ul class="">
                                    <li>Print the completed form and drop it into the collection basket at Mass.</li>
                                    <li>Print the completed form and take it to the parish office during office hours (Monday to Friday between 9 a.m. and 2 p.m.).  Mornings are best.</li>
                                    <li>Email the completed form to St-Emile@shaw.ca.  Note that email is never a very secure method of mailing personal information, so this method is not recommended, but it is left to your discretion.</li>
                                    <li>Mail the completed form to:</li>
                                    <div class="ml-12 my-2">
                                        St. Emile Parish
                                        <br>556 St. Anne’s Road
                                        <br>Winnipeg, MB
                                        <br>R2M 3G4
                                    </div>
                                </ul>
                            </x-accordion>
                            <x-accordion id="pre-auth" title="Debit Form">
                                <p><strong>Pre-authorized Donation Plan (Automatic Debit)</strong></p>
                                <p>
                                    Pre-authorized debit is an alternative to using collection envelopes. 
                                    <br>When you sign up for the pre-authorized donation plan, you authorize a monthly debit from your account to the parish for an amount that you determine.
                                </p>
                                <p><strong>How to enrol in the pre-authorized donation plan:</strong></p>
                                <ul class="mb-4">
                                    <li><a class="text-blue-500 underline" target="_blank" href="/documents/2023/12/pre-auth_donation_plan-fillable.pdf">Download the form by clicking here.</a></li>
                                    <li>Complete the form.  Note that the form may be opened in Acrobat and completed electronically, but it must be printed and signed.</li>
                                    <li>Print "VOID" across a cheque .  Do not sign, date, or complete any part of the cheque. Just print "VOID". (<a class="text-blue-500 underline" href="https://www.cibc.com/en/personal-banking/ways-to-bank/how-to/void-cheque.html" target="_blank">Click here to read how void cheques work.</a>)</li>
                                </ul>
                                <p><strong>Submit the form and void cheque in one of three ways:</strong></p>
                                <ol class="mb-4 list-decimal list-inside">
                                    <li>Scan the void cheque and signed form and email both files to the parish office at <a href="mailto:st-emile@shaw.ca">st-emile@shaw.ca</a>.</li>
                                    <li>Mail the form and void cheque using Canada Post to:</li>
                                    <div class="ml-12 my-2">
                                        St. Emile Parish
                                        <br>556 St. Anne’s Road
                                        <br>Winnipeg, MB
                                        <br>R2M 3G4
                                    </div>
                                    <li>Leave the application at the office between 9:00am and 2:00pm Monday through Friday.  (Please call first to make sure someone is in the office).</li>
                                </ol>
                                <p><strong>Note</strong>: <span class="underline">Both</span> the signed form <span class="underline">and</span> void cheque are absolutely essential.</p>
                            </x-accordion>
                            <x-accordion id="catechism" title="Catechism Registration Form">
                                <h2 class="border-b font-cinzel w-full text-2xl">Children's Catechism 2025/26</h2>
                                <p>Please complete form and submit it to the parish office.</p>
                                <a class="text-blue-500" target="_blank" href="/documents/2025/8/Catechism Registration form 2025-2026.pdf">Download the Registration Form</a>                                    
                            </x-accordion>
                            <x-accordion id="history" title="Parish History">
                                <h2 class="border-b font-cinzel w-full text-2xl">A Brief Parish History</h2>
                                <p>In 1934, the question arose of dividing the Saint Boniface Cathedral parish to serve parishioners living in the area of St. Mary's Road and St. Anne's Road.  The Great Depression was pressing hard and many could not afford even a street car ticket to attend Mass at the cathedral.</p>
                                <img src="{{asset('/img/docs/StEmile1934Sm.jpg')}}" alt="St. Emile Parish in 1934" class="my-4 w-full">
                                <p><a class="text-blue-500 mb-4" target="_blank" href="/img/docs/StEmile1934.jpg">[View larger picture]</a></p>
                                <p>Archbishop Yelle, who had been appointed to the Archdiocese of St. Boniface a few months earlier, did a study of the situation and sent the pastor of the cathedral, Monsignor Jubinville, to meet the people.  In the spring and summer of 1934, it was decided to build a chapel on St. Anne’s Road for the Catholic families of the district.  The new Community was dedicated to St. Emile in honour of Archbishop Emile Yelle.
                                    </p><p>Prior to 1941, sacraments were entered in the parish registers of St. Boniface Cathedral for francophones and at Holy Cross parish for anglophones.  That ended in 1941 when the mission became a parish.
                                    </p><p>Construction began on St. Emile School on March 12th, 1960 and the official opening took place in October of the same year. 
                                    </p><p>The opening and blessing of the current church building took place on September 10th, 1961.
                                    </p><p>The Parish Centre and Parish Hall officially opened on August 18, 1988.</p>
                            </x-accordion>
                            <x-accordion id="liturgy" title="Liturgical Ministry Guides">
                                <ul class="list-disc list-inside">
                                    <li><a class="text-blue-500" target="_blank" href="{{asset('documents/2023/3/LITURGICAL%20MINISTRY%20GUIDE%20FOR%20%20EXTRAORDINARY%20MINISTERS%20OF%20THE%20EUCHARIST%20%20Nov%202022.pdf')}}">Guide for Extraordinary Ministers of the Eucharist</a></li>
                                    <li><a class="text-blue-500" target="_blank" href="{{asset('documents/2023/3/LITURGICAL%20MINISTRY%20GUIDE%20FOR%20%20LECTORS%20%20November%20%202022.pdf?t=1679578453000')}}">Liturgical Ministry Guide for Lectors</a></li>
                                    <li><a class="text-blue-500" target="_blank" href="{{asset('documents/2023/3/LITURGICAL%20%20HOSTING%20MINISTRY%20GUIDE%20%20I%20%20Nov%202022.pdf?t=1679578405000')}}">Liturgical Ministry Hosting Guide</a></li>     
                                </ul>
                            </x-accordion>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-layout>
                                   