<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="footer__news">
        <h5>News</h5>
        @foreach ($news as $newsItem)
        <a href="#" class="footer__news__item">
            {{ substr($newsItem->title, 0, 30) }}@if (strlen($newsItem->title) > 30)...@endif
            <span>{{ date('F m, Y', strtotime($newsItem->created_at)) }}</span>
        </a>
        @endforeach
    </div>
</div>
