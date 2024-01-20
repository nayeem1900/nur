
@extends('frontend.layouts.master')
@section('content')
            <!--header section-->

            <!--Marquee part-->
            <div class ="1">
                <nav class="navbar navbar-red bg-red">
                    <a class="navbar-brand"><font color="white">Automated Test Equipment</font></a>
                    <form class="form-inline">


                        <button class="btn btn-outline-success my-2 my-sm-0"><a href=""><font color="white">Learn More</font> </a></button>
                    </form>
                </nav>

            </div>
           {{-- <marquee behavior="scroll" direction="left">শুরু করছি আল্লাহর নামে যিনি পরম করুণাময়, অতি দয়ালু।</marquee>--}}

<div class="2">
    <strong>About Us</strong>
    <p>W360 is a full-service engineering services provider rooted in a deep history of industry experience. We specialize in automotive testing, design and development, and have a wealth of knowledge to offer. We pride ourselves on being a one-stop shop for all of your engineering needs, and are dedicated to providing you with tailored solutions and best in class customer service.</p>

</div>
            <!----slider section--->
{{--@include('frontend.layouts.slider')--}}

            <!--Contact us-->

          {{--  <section>

                <p>W360 is a full-service engineering services provider rooted in a deep history of industry experience. We specialize in automotive testing, design and development, and have a wealth of knowledge to offer. We pride ourselves on being a one-stop shop for all of your engineering needs, and are dedicated to providing you with tailored solutions and best in class customer service.</p>
            </section>--}}

            <!--Middle-->
{{--            <section class="middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="card-link"><h3>Education</h3></a>

                            <p>If anyone travels on a road in search of knowledge, Allah will cause him to travel on one of the roads of Paradise.</p>
                            <p class="text-end">"Holy Prophet".</p>


                        </div>

                        <div class="col-md-4">
                            <a href="#" class="card-link"><h3>Health</h3></a>

                            <p>Seek your health fullness, for, besides the blessing of (unwavering) faith, man has not been granted a better gift"

                                Islami bank foundation established many health institutes all over the country.<a href="#" class="card-link"> readmore</a></p>


                        </div>

                        <div class="col-md-4">
                            <a href="{{route('jakat')}}" class="card-link"><h3>Social Welfare</h3></a>

                            <p>Islami Bank Foundation do many Social Welfare Activities.
                                Some recent social welfare activities of Islami Bank Foundation are described here.<a href="{{route('jakat')}}" class="card-link"> readmore</a></p>

                        </div>

                    </div>
                </div>

            </section>

            <!--Important LInk-->

   --}}         {{--<section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    Notice
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="{{route('jakat')}}">Jakat</a> </li>

                                </ul>
                            </div>


                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    News & Events
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="{{route('hospital-info')}}">Hospital-Info</a> </li>
                                    <li class="list-group-item"><a href="{{route('educational-institute')}}">Educational Institute</a> </li>
                                </ul>
                            </div>


                        </div>

                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    Links
                                </div>
                                <ul class="list-group list-group-flush" >
                                    <li class="list-group-item"><a href="http://192.168.88.6:7071/ERP/login/auth">HR</a></li>
                                    <li class="list-group-item"><a href="http://114.129.9.111:8080/accounts/users/login">Accounts</a></li>
                                    <li class="list-group-item"><a href="http://114.129.9.111:8082/PmisReport/">PMIS</a></li>
                                    <li class="list-group-item"><a href="http://114.129.9.111:8081/leave/">Leave</a></li>
                                    <li class="list-group-item"><a href="https://www.islamibankbd.com/">Islami Bank Bangladesh</a> </li>


                                </ul>
                            </div>


                        </div>

                    </div>
                </div>

            </section>--}}
            <!--Footer Part-->

@endsection
