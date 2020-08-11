<div class="col-lg-2 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
    <div class="footer__widget">
        <h5>Quick Link</h5>
        <ul>
            <ul>
                @foreach ($quick_links as $quickLink)
                    <li><a href="{{ $quickLink->url }}">{{ $quickLink->text }} <span class="arrow_right"></span></a></li>
                @endforeach
            </ul>
        </ul>
    </div>
</div>
