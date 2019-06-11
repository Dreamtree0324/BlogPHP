@extends('layout/master')

@section('maincontent')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    {{$data->title}} 
                    <span class="badge badge-light">
                        {{ $data->writer }}
                    </span>
                    <span class="badge badge-primary">
                        {{ $data->wdate }}
                    </span>
                </div>
                <div class="card-body">
                    {!!$data->content!!}
                </div>
            </div>
        </div>  
    </div>
    @if( isset($_SESSION['user']))
        <div class="row mt-5 mb-5 mr-5">
            <div class="col-12 text-right">
                <a href="/update?id={{ $data->id }}" class="btn btn-outline-primary">글 수정</a>
                <a href="/delete?id={{$data->id}}" class="btn btn-outline-danger">글 삭제</a>
            </div>
        </div>
    @endif
    
</div>
@endsection