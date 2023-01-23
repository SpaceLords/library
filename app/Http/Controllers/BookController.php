<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
  public function show() {
      $books = Book::all();

      return view('index', [
          'books' => $books
      ]);
  }

    public function addOrEdit(Request $request, $id = null) {
        $model = null !== $id
            ? Book::query()->where(['id' => $id])->first()
            : new Book();

        if (null !== $request->post('title')) {
            $model->fill([
                'title' => $request->post('title'),
                'year' => $request->post('year'),
            ]);
            $model->save();

            $model->authors()->sync($request->post('author'));

            return redirect('/');
        }

        return view('book/form', [
            'model' => $model,
            'authors' => Author::all(),
        ]);
    }

    public function delete($id) {
        /** @var Book $model */
        $model = Book::query()->where(['id' => $id])->first();
        $model->authors()->detach();
        $model->delete();
        return redirect('/');
    }
}
