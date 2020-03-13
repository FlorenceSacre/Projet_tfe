@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <div class="card-body">

                        {{--@can('isAdmin')--}}
                            {{--<div class="btn btn-success btn-lg">--}}
                                {{--You have Admin Access--}}
                            {{--</div>--}}
                        {{--@elsecan('isCustomer')--}}

                            {{--<div class="btn btn-primary btn-lg">--}}
                                {{--You have Customer Access--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--<div class="btn btn-info btn-lg">--}}
                                {{--You have Tourist Access--}}
                            {{--</div>--}}
                        {{--@endcan--}}
                        {{--@can('isAdmin')--}}
                            {{--<p>Cake sugar plum sweet roll sweet jujubes jelly pastry. Macaroon cake wafer sweet brownie gummies sugar plum.--}}
                                {{--Sweet jelly beans donut candy canes chocolate cake dragée donut topping. Topping pastry sweet cake oat cake--}}
                                {{--chocolate. Gummi bears fruitcake pastry chupa chups oat cake apple pie sweet. Cake pastry caramels tootsie--}}
                                {{--roll cake lollipop tootsie roll jelly-o toffee. Toffee marzipan marshmallow gingerbread pie toffee danish.--}}
                                {{--Chocolate cake cookie fruitcake. Candy icing jujubes chocolate bar wafer caramels carrot cake donut. Cookie--}}
                                {{--cake cupcake cake candy. Sweet dessert cupcake marshmallow bonbon tootsie roll candy. Chupa chups candy--}}
                                {{--jelly bonbon. Bonbon apple pie sweet roll brownie sweet roll lemon drops wafer sweet halvah.</p>--}}
                        {{--@endcan--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection