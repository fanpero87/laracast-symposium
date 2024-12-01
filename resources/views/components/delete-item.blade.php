<form method="POST" action="{{ $route }}">
    @method('DELETE')
    @csrf

    <a class="hover:underline" href="#"
        onclick="event.preventDefault();
                this.closest('form').submit();">
        {{ $text }}
    </a>

</form>
