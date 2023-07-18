@extends('client.blocks.master')
@section('body')
<main style="padding: 0 97px">
    @include('client.blocks.homeContent.carousel')
    @include('client.blocks.homeContent.flashSale')
    @include('client.blocks.homeContent.newproduct')
    @include('client.blocks.homeContent.tinhdau')
    @include('client.blocks.homeContent.aboutus')
    @include('client.blocks.homeContent.slider')
</main>
@endsection
