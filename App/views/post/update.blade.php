@extends('layout/master')

@section('scriptsection')
    <script src="/js/editor.js"></script>
@endsection

@section('maincontent')
<div class="write_wrapper">
    <h2>글 작성</h2>
    <div class="post_wrap">
    <form action="/post" method="post">
        <label for="category">카테고리</label>
        <select name="category" id="category">
            <option value="develop">개발</option>
            <option value="daylife">일상</option>
            <option value="hobby">취미</option>
        </select>

        <label for="title">글 제목</label>
        <input type="hidden" value="{{ $data->id }}" name="id">
        <input type="text" id="title" name="title" value="{{ $data->title }}">

        <label for="content">글 내용</label>
        <textarea name="content" id="editor"> {{ $data->content }} </textarea>
        

        <div class="row">
            <div class="col-12 text-right">
                <button type="submit" class="btn btn-outline-primary">글쓰기</button>
                <button type="reset" class="btn btn-outline-danger">취소</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection