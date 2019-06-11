@extends('layout/master')

@section('maincontent')
<section id="slider" class="mt-4">
    <!-- 슬라이더 섹션 -->
    <div class="container">
        <div class="slider">
            <div class="btn-div">
                <button class="btn btn-outline-light">&lt;</button>
                <button class="btn btn-outline-light">&gt;</button>
            </div>
            <div class="slide-image" style="background-image:url('/imgs/slide1.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>개발 포스팅</h1>
                    <p>개발 일지</p>
                </div>
            </div>
            <div class="slide-image" style="background-image:url('/imgs/slide2.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>일상 포스팅</h1>
                    <p>평범한 일상</p>
                </div>
            </div>
            <div class="slide-image" style="background-image:url('/imgs/slide3.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>취미 포스팅</h1>
                    <p>취미 관련 이야기</p>
                </div>
            </div>
        </div>
        <div class="indicator">
            <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>

<div class="container mt-5">
    <section id="editorPick">
        @foreach($list as $item)
        <div class="item">
            <div class="img-box">
                {!!$item->thumbnail!!}
            </div>
            <div class="item_box">
                <div class="info-box">
                    <h3>{{$item->title}}</h3>
                    <p>{{$item->content}}</p>
                    <p class="wdate">{{$item->wdate}}</p>
                </div>

                <div class="button_box">
                    <a href="/view?id={{$item->id}}">글 바로가기</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <div class="page mt-5">
        <ul>
            @if($p->prev)
                <li><a href="/?p={{$p->start - 1 }}" class="prev">이전</a></li>
            @endif
            
            @for($i = $p->start; $i <= $p->end; $i++)

                @if($i == $p->current)
                    <li><a href="/?p={{$i}}" style="background-color: rgb(89, 155, 255); color:#fff;">{{ $i }}</a></li>

                @else
                    <li><a href="/?p={{$i}}">{{ $i }}</a></li>
                @endif

            @endfor

           
            @if($p->next)
                <li><a href="/?p={{$p->end + 1 }}" class="next">다음</a></li>
            @endif
        </ul>
    </div>
</div>
@endsection