@extends('_layouts.master')

@section('content')
<div class="container mx-auto mb-12">
    <h1 class="font-headline text-center mt-12 mb-8 text-neutral-darkest">Bones For Loans</h1>



    <div class="about text-neutral-darkest">

        <div class="flex flex-wrap justify-center lg:flex-no-wrap lg:justify-between">

            <div class="mx-2 mb-4">
                @include('_partials.skull')
            </div>

            <div class="mx-2 mb-4 px-2">
                @include('_partials.welcome')

                @include('_partials.more')
            </div>
        </div>

    </div>

    <div class="flex flex-wrap justify-center lg:flex-no-wrap lg:justify-between">
        <div class="mx-2 flex-grow">
            @include('_partials.form')
        </div>

        <div class="mx-2 flex-grow">
            @include('_partials.pobox')
        </div>
    </div>

</div>
@endsection
