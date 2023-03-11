@extends('layout')

@section("content")

    <a href="/" class="inline-block text-black ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <!--<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">-->
        
    <!--</div>-->

    <x-card>
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <!--<img
                class="w-48 mr-6 mb-6"
                src="{{asset('images/acme.png')}}"
                alt=""
            />-->

            <img
                class="w-48 mr-6 mb-6"
                src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}" 
                alt=""
            />

            <h3 class="text-2xl mb-2"><a href="/listings/{{$listing["id"]}}">Senior Laravel Developer</a></h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>

            @php
                $listing_tags = $listing["tags"];
            @endphp
            
            <x-listing-tags :tagsCsv="$listing_tags" />
            
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Job Description
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                        {{$listing->description}}
                    </p>
                    <!--<p>
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Quaerat praesentium eos
                        consequuntur ex voluptatum necessitatibus
                        odio quos cupiditate iste similique rem in,
                        voluptates quod maxime animi veritatis illum
                        quo sapiente.
                    </p>-->

                    <a
                        href="mailto:test@test.com"
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact Employer</a
                    >

                    <a
                        href="https://test.com"
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                        Website</a
                    >
                </div>
            </div>
        </div>
    <!--</div>-->
    </x-card>

    {{--@if(auth()->id == $listing->user_id)
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{$listing->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>

            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method("DELETE")
                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </x-card>
    @endif--}}

@endsection