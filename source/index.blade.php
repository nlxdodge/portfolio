@extends('_layouts.master')
@section('body')

<div class="swiper-container">
  <div class="swiper-wrapper">
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
    <a class="swiper-slide" href="/work/Scrapyard/" aria-label="Read the Scrapyard Project">
      <div data-background="/assets/images/works/scrapyard_c.jpg" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
    </a>
  </div>
  <div class="swiper-pagination"></div>
</div>

<div>
  <h1>Back-end redefined</h1>
  <p>Welcome to my humble site, you can find all sorts of informational posts and my proud works. While also giving a sneak peek for you to try it out yourselves.</p>
  <h2>How it al started</h2>
  <p>I Started of my career with interests in computer science at a very young age. And took that to school where I choose to be an aspiring game developer. But soon
    found out that making games was almost the same as writing code for websites or other applications. Hence, I started to learn a new and higher degree for application
    development. At which I am running my last year of right now.</p>
  <p>With a short list of some of my experiences:</p>
  <ul>
    <li>Backend | Java, Ruby, Pyton, PHP, C# (Unity), C# .NET</li>
    <li>Frontend | Vue & Angular with NPM & Yarn</li>
    <li>Cloud | AWS (Cloudformation, cloudfront, lambda's, gateway integration etc.)</li>
  </ul>
  <h3>Want more info about me?</h3>
  <p>Sent me a message though one of the following social media outlets to get my full <span class="italic">Curriculum Vitae.</span></p>
</div>
@endsection