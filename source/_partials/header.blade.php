<header>
    <a href="/"><img class="icon center-block" src="/assets/images/home.png" alt="homepage" /></a>
    <nav class="navigation center-block">
        <a class="{{ $page->selected('works') }}" href="{{ $page->baseUrl }}/works">Works</a>
        <a class="{{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">Posts</a>
        <a class="{{ $page->selected('contact') }}" href="{{ $page->baseUrl }}/contact">Contact</a>
    </nav>
</header>
