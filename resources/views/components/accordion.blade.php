@props([
'title' => 'Accordion Title',
'id' => 'accordion-1',
])
<div class="w-full">
    <div class="accordion w-full border-b border-gray-300">
        <button onclick="
            document.querySelector('#{{ $id }}').classList.toggle('hidden');
            document.querySelector('#{{ $id }}-plus-icon').classList.toggle('hidden');
            document.querySelector('#{{ $id }}-minus-icon').classList.toggle('hidden')
            " class="accordion-header flex justify-between w-full text-left py-4 px-6 bg-gray-200 rounded-t focus:outline-none">
            {{ $title }}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="{{ $id }}-plus-icon" class="min-w-6 size-6 ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="{{ $id }}-minus-icon" class="min-w-6 size-6 ml-2 hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

        </button>
        <div id="{{ $id }}" class="accordion-content hidden w-full p-6 border-t bg-gray-100 rounded-b">
            {{ $slot }}
        </div>
    </div>
</div>