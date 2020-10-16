<header>
    <nav>
        <a class="icon" href="/" aria-label="Home"><i aria-hidden="true" class="fas fa-code"></i></a>
        <a class="{{ $page->selected('works') }}" href="{{ $page->baseUrl }}/works">Works</a>
        <a class="{{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">Posts</a>
        <a class="icon toggle-colors" href="#" aria-label="Toggle Color"><i aria-hidden="true" class="fas fa-adjust"></i></a>
    </nav>
</header>
