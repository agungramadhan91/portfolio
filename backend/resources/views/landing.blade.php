@extends('layouts.master')

@section('content')
    <!--slider------------->
    <ul id="autoWidth" class="cs-hidden">
        <!--1------------------------------>
        <li class="item-a">
            <a href="/profile">
                <div class="box box-img01">
                    <div class="slide-details">
                        <p>Who is</p>
                        <p>Agung Ramadhan Suyono</p>
                    </div>
                    <div class="user user-img01"></div>
                </div>
            </a>
        </li>
        <!--2------------------------------>
        <li class="item-b">
            <div class="box box-img02">
                <div class="slide-details">
                    <p>Design</p>
                    <p>Graphic Designing</p>
                </div>
                <div class="user user-img02"></div>
            </div>
        </li>
        <!--3------------------------------>
        <li class="item-c">
            <div class="box box-img03">
                <div class="slide-details">
                    <p>Design</p>
                    <p>Graphic Designing</p>
                </div>
                <div class="user user-img03"></div>
            </div>
        </li>
        <!--4------------------------------>
        <li class="item-d">
            <div class="box box-img04">
                <div class="slide-details">
                    <p>Design</p>
                    <p>Graphic Designing</p>
                </div>
                <div class="user user-img04"></div>
            </div>
        </li>
        <!--5------------------------------>
        <li class="item-e">
            <div class="box box-img05">
                <div class="slide-details">
                    <p>Design</p>
                    <p>Graphic Designing</p>
                </div>
                <div class="user user-img05"></div>
            </div>
        </li>
        <!--6------------------------------>
        <li class="item-f">
            <div class="box box-img06">
                <div class="slide-details">
                    <p>Design</p>
                    <p>Graphic Designing</p>
                </div>
                <div class="user user-img06"></div>
            </div>
        </li>
    </ul>
    <!------------graphic-------------------->
    <div class="graphics">
        <!----------heading-------------------->
        <div class="g-heading">
            <span></span>
            <p>Spesifikasi Website</p>
        </div>
        <!-----------details---------------->
        <p class="g-details">
            <ul>
                <li>PHP 8</li>
                <li>Laravel 8</li>
                <li>Websocket 8</li>
            </ul>
        </p>
        <p class="g-details">Laravel 8.x</p>
        <p class="g-details">MySQL</p>
    </div>
@endsection