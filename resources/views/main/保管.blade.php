<h3 class="col-lg-9 col-md-9 md-ml-5  col-sm-5 headline-top">記事・日記TOPIX</h3>
            
                <div class="d-flex flex-wrap justify-content-around">
                    @foreach ($articles as $article)
                    <div class="card article-index-card mb-3">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        @if ($article->category == "気仙沼の遊ぶ")
                        <div class="tags1">
                            <span>{{ $article->category }}</span>
                        </div>
                        @elseif ($article->category == "気仙沼の食べる")
                        <div class="tags2">
                            <span>{{ $article->category }}</span>
                        </div>
                        @else
                        <div class="tags3">
                            <span>{{ $article->category }}</span>
                        </div>
                        @endif
                        <p class="card-title">{{ $article->title }}</p>
                        <div class="card-text">{{ $article->body }}</div>
                        <a class="card-link mt-3 mb-1" href="/article/detail/?id={{ $article->id }}">続きを見る</a>
                    </div>
                    @endforeach