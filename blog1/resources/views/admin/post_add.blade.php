@extends('admin.layouts.main')
@section('contenido')
<h1>Agregar Posts</h1>

@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

 @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="/dashboard/posts" method="POST" id="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input value="{{ old('title' )}}" type="text" name="title" id="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="description" class="form-label">Description</label>
        <input value=" {{ old('description' )}}" name="description" id="description" class="form-control" type="text"></input>
    </div>
    
    <div class="form-group">
        <label for="file">Img</label>
        <input  type="file" name="image" id="file" class="form-control">
    </div>
    <div class="form-group">
        <label for="category_id" >Category</label>
        <select name="category_id" id="category_id" class="form-control">
           @foreach($categories as $cate)
                <option value="{{ $cate->id }}">{{ $cate->name }}</option>
            @endforeach
        </select>
    </div>
    <input type="text" name="content" id="content">
    <div id="editor">
        <p><strong>Hello World!</strong></p>
        <p>Some Initial<strong>Bold</strong>text</p>
    </div>
    <div class="form-group">
    <button class="btn btn-primary">Insertar</button>
   </div>
    
</form>
</div>

@endsection