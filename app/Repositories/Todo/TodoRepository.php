<?php

namespace App\Repositories\Todo;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoRepository implements TodoRepositoryInterface {
  protected $todo;

  /**
   * 全てのtodoを取得。
   *
   * @return object
   */
  public function getTodos() {
    $todos = Todo::all();
    return $todos;
  }

  /**
   * DBにtodoを追加。
   *
   * @var Request $request
   * @return object
   */
  public function addTodo(Request $request) {
    $todo = new Todo;
    $todo->comment = $request->comment;
    $todo->state = $request->state;
    $todo->save();
    return $todo;
  }

  /**
   * 該当idのtodoを削除。
   *
   * @var Request $request
   * @return object
   */
  public function deleteTodo(Request $request) {
    $todo = Todo::find($request->id);
    $todo->delete();
    return $todo;
  }

  /**
   * todoの状態を切替(作業中 <=> 完了)。
   *
   * @var Request $request
   * @return object
   */
  public function toggleTodoState(Request $request) {
    $todo = Todo::find($request->id);
    $todo->state = $request->new_state;
    $todo->save();
    return $todo;
  }
}
