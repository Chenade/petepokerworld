@include('includes.language')
@extends('layouts.default', ['page_header' =>'Single Room','page_parent' =>'Room','page_parent_path' =>'/room','page_path' =>'single room'])
@section('content')

    <section id="room" class="section">
        <div class="col-12 col-sm-10 col-lg-8 d-flex flex-wrap">
            <div class="col-12 col-lg-8">
                <div id="slider">
                    <div class="slideshow-container col-12">
                        <div class="mySlides custom-fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="/img/Room1-1.jpg" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides custom-fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="/img/Room1-2.jpg" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides custom-fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="/img/Room1-3.jpg" style="width:100%">
                            <div class="text">Caption Three</div>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <div style="text-align:center; white-space: nowrap; overflow-y: auto">
                        <img class="indicator selected" src="/img/Room1-1.jpg" onclick="currentSlide(1)"/>
                        <img class="indicator" src="/img/Room1-2.jpg" onclick="currentSlide(2)"/>
                        <img class="indicator" src="/img/Room1-3.jpg" onclick="currentSlide(3)"/>
                    </div>
                </div>


                <div id="detail" class="d-flex flex-column mt-5" style="">

                    <div class=" d-flex flex-wrap">
                        <div class="room-feature-box col-6 col-sm-3 d-flex flex-column justify-content-around">
                            <h6>Size:&ensp;</h6>
                            <p>2.5???</p>
                        </div>
                        <div class="room-feature-box col-6 col-sm-3 d-flex flex-column justify-content-around">
                            <h6>Gender Availability:&ensp;</h6>
                            <p>??? / ???</p>
                        </div>
                        <div class="room-feature-box col-6 col-sm-3 d-flex flex-column justify-content-around">
                            <h6>Bed:&ensp;</h6>
                            <p>100 x 190 cm ?????????</p>
                        </div>
                        <div class="room-feature-box col-6 col-sm-3 d-flex flex-column justify-content-around">
                            <h6>Check-in / Check-out</h6>
                            <p>15:00??? / 11:00???</p>
                        </div>
                    </div>

                    <h4 class="col-12 tag">PRICE</h4>
                    <div class="room-service d-flex flex-wrap">
                        <div class="col-12 col-sm-6"><i class="fas fa-dollar-sign"></i><span>?????????</span><strong>NT$ 800 - 1000</strong></div>
                        <div class="col-12 col-sm-6"><i class="fas fa-dollar-sign"></i><span>?????????</span><strong>NT$ 900 - 1200</strong></div>
                        <div class="col-12 col-sm-6"><i class="fas fa-dollar-sign"></i><span>?????????</span><strong>NT$ 1200 - 1600</strong></div>
                    </div>

                    <h4 class="col-12 tag">PRICE include</h4>
                    <div class="room-service d-flex flex-wrap">
                        <div class="col-12"><i class="fa fa-check"></i>?????????????????????????????????????????????????????????????????????3M??????</div>
                        <div class="col-12 col-sm-6"><i class="fa fa-check"></i>???????????????</div>
                        <div class="col-12 col-sm-6"><i class="fa fa-check"></i>?????????????????????</div>
                        <div class="col-12 col-sm-6"><i class="fa fa-check"></i>????????????wi-fi??????</div>
                        <div class="col-12 col-sm-6"><i class="fa fa-check"></i>??????????????????</div>
                    </div>

                    <h4 class="col-12 tag">Room Services</h4>
                    <div class="room-service d-flex flex-wrap">
                        <div class="col-12 col-sm-4"><img src="/img/core-img/icon1.png" alt=""> ??????</div>
                        <div class="col-12 col-sm-4"><img src="/img/core-img/icon2.png" alt=""> ??????????????????</div>
                        <div class="col-12 col-sm-4"><img src="/img/core-img/icon3.png" alt=""> ????????????????????????</div>
                        <div class="col-12 col-sm-4"><img src="/img/core-img/icon4.png" alt=""> ???????????????</div>
                        <div class="col-12 col-sm-4"><img src="/img/core-img/icon5.png" alt=""> ??????Wifi</div>
                        <div class="col-12 col-sm-4"><img src="/img/core-img/icon6.png" alt=""> 24??????????????????</div>
                    </div>

                    <h4 class="col-12 tag">????????????</h4>
                    <div class="room-service d-flex flex-wrap">
                        <div class="col-12 col-sm-4"><i class="fa fa-exclamation" style="color:red;"></i> ?????????????????????</div>
                        <div class="col-12 col-sm-4"><i class="fa fa-exclamation" style="color:red;"></i> ??????????????????</div>
                        <div class="col-12 col-sm-4"><i class="fa fa-exclamation" style="color:red;"></i> ?????????0-10?????????</div>
                        <div class="col-12 col-sm-4"><i class="fa fa-exclamation" style="color:red;"></i> ?????????????????????</div>
                        <div class="col-12 col-sm-4"><i class="fa fa-exclamation" style="color:red;"></i> ???????????????????????????????????????</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <!-- Hotel Reservation Area -->
                <div class="hotel-reservation--area mb-100">
                    <div align="center"><h2>Booking</h2></div>
                    <form action="#" method="post">
                        <div class="form-group mb-30">
                            <label for="checkIn">Check In</label>
                            <input type="date" class="form-control" id="checkIn" name="checkin-date"><br>
                            <label for="checkIn">Check Out</label>
                            <input type="date" class="form-control" id="checkOut" name="checkout-date">
                        </div>

                        <div class="form-group mb-30">
                            <label for="room">Room Type</label>
                            <select name="room" class="form-control">
                                <option value="01">???????????????</option>
                                <option value="02">???????????????</option>
                                <option value="03">???????????????</option>
                                <option value="04">???????????????</option>
                                <option value="05">???????????????</option>
                            </select>
                        </div>
                        <br><br>

                        <div class="form-group mb-30">
                            <label for="children">Quantity</label>
                            <select name="children" id="children" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <br><br>



                        <div class="form-group">
                            <button type="submit" class="btn roberto-btn w-100">Check Available</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@stop
@section('end_script')
    <script src="/js/room.min.js"></script>
@stop
