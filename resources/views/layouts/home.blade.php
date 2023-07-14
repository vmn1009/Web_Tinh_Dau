@extends('client.blocks.master')
@section('body')
@php
$var1 = "Tinh dầu khuyếch tán";
$var2 = "Tinh dầu treo xe";
$var3 = "Tinh dầu treo xe";
@endphp
<main style="padding: 0 97px" >

    @include('client.blocks.homeContent.carousel')
    @include('client.blocks.homeContent.flashSale')
    @include('client.blocks.homeContent.newproduct')
    @include('client.blocks.homeContent.tinhdau')
    @include('client.blocks.homeContent.aboutus')
    <?php
    ?>
</main>
@endsection
