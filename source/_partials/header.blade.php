<header>
    <nav>
        <a class="{{ $page->selected('') }}" href="/"><i aria-hidden="true" aria-label="Home" class="fas fa-code"></i></a>
        <a class="{{ $page->selected('works') }}" href="{{ $page->baseUrl }}/works">Works</a>
        <a class="{{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">Posts</a>
        <a href="#" class="toggle-colors"><i aria-hidden="true" aria-label="Toggle Color" class="fas fa-adjust"></i></a>
    </nav>
</header>
