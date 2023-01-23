<?php
/**
 * @var \App\Models\Book[] $books
 */
?>
<a href="/book/add">Добавить</a>

<table border="1">
    <thead>
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Автор(ы)</th>
        <th>Год издания</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>
                @foreach ($book->authors as $author)
                    {{ $author->full_name }}<br>
                @endforeach
            </td>
            <td>{{$book->year}}</td>
            <td>
                <a href="/book/edit/{{$book->id}}">Редактировать</a>
                <a href="/book/delete/{{$book->id}}">Удалить</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
