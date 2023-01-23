<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller {
  public function show() {
      $authors = Author::all();

      return view('author/index', [
          'authors' => $authors
      ]);
  }

  public function addOrEdit(Request $request, $id = null) {
      $model = null !== $id ? Author::query()->where(['id' => $id])->first() : new Author();

      if (null !== $request->post('full_name')) {
          $model->fill([
              'full_name' => $request->post('full_name')
          ]);
          $model->save();

          return redirect('/author');
      }

      return view('author/form', ['model' => $model]);
  }

  public function delete($id = null) {
      /** @var Author $model */
      $model = Author::query()->where(['id' => $id])->first();
      $model->books()->detach();
      $model->delete();
      return redirect('/author');
  }
}
