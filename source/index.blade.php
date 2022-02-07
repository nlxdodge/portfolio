@extends('_layouts.master')
@section('body')

<div class="swiper">
  <div class="swiper-wrapper">
    <a class="swiper-slide" href="/work/korfbal_trainer/" aria-label="Check the Korfbal Trainer project">
      <div data-background="/assets/images/works/korfbal_trainer.webp" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        <p>Korfbal Trainer <span>(Java)</span></p>
      </div>
    </a>
    <a class="swiper-slide" href="/work/keydungeon/" aria-label="Check the Keydungeon project">
      <div data-background="/assets/images/works/keydungeon_c.webp" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        <p>Keydungeon <span>(PHP)</span></p>
      </div>
    </a>
    <a class="swiper-slide" href="/work/aq3d_bot/" aria-label="Check the AQ3D project">
      <div data-background="/assets/images/works/aq3d_bot_c.webp" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        <p>AQ3D Bot <span>(Javascript)</span></p>
      </div>
    </a>
    <a class="swiper-slide" href="/work/Scrapyard/" aria-label="Check the Scrapyard project">
      <div data-background="/assets/images/works/scrapyard_c.webp" class="swiper-lazy">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        <p>Scrapyard Mod <span>(Java)</span></p>
      </div>
    </a>
  </div>
  <div class="swiper-pagination"></div>
</div>

<div>
  <h1>Backend redefined</h1>
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