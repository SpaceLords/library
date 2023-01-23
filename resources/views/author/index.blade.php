<?php
/**
 * @var \App\Models\Author[] $authors
 */
?>
<a href="/author/add">Добавить</a>

<table border="1">
    <thead>
    <tr>
        <th>id</th>
        <th>ФИО</th>
        <th>Количество книг</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($authors as $author)
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->full_name }}</td>
            <td>{{ $author->books->count() }}</td>
            <td>
                <a href="/author/edit/{{$author->id}}">Редактировать</a>
                <a href="/author/delete/{{$author->id}}">Удалить</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
