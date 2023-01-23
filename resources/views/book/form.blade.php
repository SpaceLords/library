<?php
/**
 * @var \App\Models\Book $model
 * @var \App\Models\Author[] $authors
 * @var int[] $author_ids
 */
?>

<form method="post">
    @csrf
    <input type="text" name="title" value="{{$model->title}}" placeholder="Название"><br><br>
    <input type="number" name="year" value="{{$model->year}}" placeholder="Год издания"><br><br>
    <select name="author[]" multiple>
        @foreach($authors as $author)
            <option value="{{$author->id}}">{{ $author->full_name }}</option>
        @endforeach
    </select><br><br>
    <input type="submit">
</form>
