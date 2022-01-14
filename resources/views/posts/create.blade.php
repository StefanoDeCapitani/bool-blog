@extends('layouts.default')

@section("title", "Crea nuovo post")

@section("header-title", "Crea un nuovo Post!")

@section('main-content')
<form action="">
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="subtitle" class="form-label">Sottotitolo</label>
        <input type="text" class="form-control" id="subtitle" name="subtitle">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea class="form-control" id="content" name="content" rows="6"></textarea>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Autore</label>
        <input type="text" class="form-control" id="author" name="author">
    </div>
    <div class="mb-3">
        <label for="coverImg" class="form-label">URL immagine</label>
        <input type="text" class="form-control" id="coverImg" name="coverImg">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoria</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>
    <button class="btn btn-success mb-3">Crea</button>
</form>

<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@endsection