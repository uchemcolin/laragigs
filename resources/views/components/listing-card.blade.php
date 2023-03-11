@props(['listing'])

<!-- Item 1 -->
<x-card>
    <div class="flex">
        <!--<img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />-->
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            @php
                $listing_tags = $listing["tags"];
            @endphp
            <x-listing-tags :tagsCsv="$listing_tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>