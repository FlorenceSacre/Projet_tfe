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
                        {{--@can('isCustomer')--}}
                            {{--<p>Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo--}}
                                {{--vel maleficia? De Apocalypsi undead dictum mauris. Hi mortuis soulless creaturas, imo monstra adventus--}}
                                {{--vultus comedat cerebella viventium. Qui offenderit rapto, terribilem incessu. The voodoo sacerdos--}}
                                {{--suscitat mortuos comedere carnem. Search for solum oculi eorum defunctis cerebro. Nescio an Undead--}}
                                {{--zombies. Sicut malus movie horror.</p>--}}
                        {{--@endcan--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection