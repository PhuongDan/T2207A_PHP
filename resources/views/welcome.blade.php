@extends("layouts.layout")
@section("main")

        <div class="row">
            <div class="col-lg-3 col-md-5">
               @include("html.home.sidebar")
            </div>
            <div class="col-lg-9 col-md-7">
               @include("html.home.discount")

           @include("html.home.grid")

        </div>


{{--        // muon in html dung {!!  !!}--}}



</body>

</html>
@endsection
