@extends('_layouts.master')
@section('body')

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
</div>

<div class="glide">
  <div data-glide-el="track" class="glide__track">
    <ul class="glide__slides">
      <li class="glide__slide">
        <a href="/work/korfbal_trainer/" aria-label="Check the Korfbal Trainer project">
          <picture>
            <source srcset="/assets/images/works/korfbal_trainer.webp" type="image/webp" loading="lazy"/>
            <img src="/assets/images/works/korfbal_trainer.png" alt="Korfbal Trainer" loading="lazy" />
          </picture>
          <p>Korfbal Trainer <span>(Javascript)</span></p>
        </a>
      </li>
      <li class="glide__slide">
        <a href="/work/keydungeon/" aria-label="Check the Keydungeon project">
          <picture>
            <source srcset="/assets/images/works/keydungeon.webp" type="image/webp" loading="lazy"/>
            <img src="/assets/images/works/keydungeon.png" alt="Keydungeon" loading="lazy" />
          </picture>
          <p>Keydungeon <span>(PHP)</span></p>
        </a>
      </li>
      <li class="glide__slide">
        <a href="/work/aq3d_bot/" aria-label="Check the AQ3D Bot project">
          <picture>
            <source srcset="/assets/images/works/aq3d_bot.webp" type="image/webp" loading="lazy"/>
            <img src="/assets/images/works/aq3d_bot.png" alt="AQ3D Bot" loading="lazy" />
          </picture>
          <p>AQ3D Bot <span>(Java)</span></p>
        </a>
      </li>
      <li class="glide__slide">
        <a href="/work/scrapyard/" aria-label="Check the Scrapyard Mod project">
          <picture>
            <source srcset="/assets/images/works/scrapyard.webp" type="image/webp" loading="lazy"/>
            <img src="/assets/images/works/scrapyard.png" alt="Scrapyard Mod" loading="lazy" />
          </picture>
          <p>Scrapyard Mod <span>(Java)</span></p>
        </a>
      </li>
    </ul>
  </div>
  <div class="glide__bullets" data-glide-el="controls[nav]">
    <div class="glide__bullet" data-glide-dir="=0"></div>
    <div class="glide__bullet" data-glide-dir="=1"></div>
    <div class="glide__bullet" data-glide-dir="=2"></div>
    <div class="glide__bullet" data-glide-dir="=3"></div>
  </div>
</div>

<div>
  <h3>Want more info about me?</h3>
  <p>Sent me a message though one of the following social media outlets to get my full <span class="italic">Curriculum Vitae.</span></p>
</div>
@endsection