@extends('_layouts.master')
@section('body')

<div class="swiper-container">
  <div class="swiper-wrapper">
    <a class="swiper-slide" href="/work/Scrapyard/" aria-label="Read the Scrapyard Project">
      <div data-background="/assets/images/works/scrapyard_c.jpg" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
    </a>
    <a class="swiper-slide" href="/work/keydungeon/" aria-label="Read the Keydungeon Project">
      <div data-background="/assets/images/works/keydungeon_c.jpg" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
    </a>
    <a class="swiper-slide" href="/post/aq3d_bot/" aria-label="Read the AQ3D Project">
      <div data-background="/assets/images/works/aq3d_bot_c.jpg" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
    </a>
  </div>
  <div class="swiper-pagination"></div>
</div>

<div>
  <h1>A Back-end developer as intended.</h1>
  <p>Welcome to my website, you can find all sorts of informational posts and all my proud works. While also giving a download for you to try it out yourselves.</p>
  <h2>Some info about myself</h2>
  <p>I Started of my career with interests in computer science at a very young age. And took that to school where I choose to be an aspiring game developer. But soon
    found out that making games was almost the same as writing code for websites or other applications. Hence, I started to learn a new and higher degree for application
    development. At which I am running my last year of right now.</p>
  <p>Here is a short list of things I have experience with:</p>
  <ul>
    <li>Java, Ruby, Pyton, PHP, C# (Unity), C# .NET and more</li>
    <li>Vue & Angular with NPM and Yarn</li>
    <li>UML-Diagrams</li>
    <li>Creation of REST API's</li>
  </ul>
  <p>Want more info about me? Get into contact and I can send you my full <span class="italic">Curriculum Vitae.</span></p>
</div>
@endsection