<header>
    <nav>
        <a class="icon" href="/" aria-label="Home"><i aria-hidden="true" class="fas fa-code"></i></a>
        <a class="{{ $page->selected('works') }}" href="{{ $page->baseUrl }}/works">works</a>
        <a class="{{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">posts</a>
        <div class="icon toggle-colors"><i aria-hidden="true" class="fas fa-adjust"></i></div>
    </nav>
</header>
