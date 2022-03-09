@extends('main.main')

@section('title')
Welcome
@endsection
@section('bodyclass')
welcomebody
@endsection

@section('body')

<img src="images/background.jpg" alt="background" class="background">
<section id="section01" class="demo">
    <img class="sectionlogo" src="images/logo finance.png" alt="logo">
  <h1>you're money manager</h1>
  <a href="#about"><span></span>learn more</a>
</section>

<div id="about" name="about" class="about-a">
    <strong>Manage you're money easy with Finance </strong>
</div>


@endsection