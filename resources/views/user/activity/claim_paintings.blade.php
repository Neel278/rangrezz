@extends('user.layouts.master')

@section('title','Rangrezz | Solded Paintings')

@section('content')

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
           <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Description:You got the deal :)
                            </h2>
                        </div>
                        <div class="body">
                             <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="header">
                            <h2>
                                {{ $painting->title }} <small>{{ $painting->sub_title }}</small>
                            </h2>
                            <img src="{{asset($painting->painting)}}" class="img-thumbnail">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="body">
                            <h4>Description:</h4>
                            {{ $painting->description }}
                            <br>
                            Ended On:
                            <p id="demo">{{ $painting->end_date }}</p>
                            <p>Highest bid : Rs.{{ $painting->bidded_price }}</p>
                            <p><label>Buyer Details:<label></p>
                            <p>First Name: {{ $seller->firstname }}</p>
                            <p>Last Name : {{ $seller->lastname }}</p>
                            <p>E-mail    : {{ $seller->email }}</p>
                            <!-- <p>Address   : </p> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
