@extends('layout.layout')

@section('content')
    <h1>Создание треда</h1>
    <form method="post" action="{{ route('thread.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" name="title" placeholder="Название треда" required maxlength="100">
        <input type="file" class="form-control-file" name="image" accept="image/png, image/jpeg">
        <textarea class="form-control" name="content" id="editor" placeholder="Текст треда" required rows="4"></textarea>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection

