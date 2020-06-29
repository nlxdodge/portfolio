<nav>
    <a href="/"><img src="/assets/images/home.png" alt="homepage" /></a>
    <a class="{{ $page->selected('works') }}" href="{{ $page->baseUrl }}/works">Works</a>
    <a class="{{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">Posts</a>
    <a class="{{ $page->selected('contact') }}" href="{{ $page->baseUrl }}/contact">Contact</a>
</nav>
