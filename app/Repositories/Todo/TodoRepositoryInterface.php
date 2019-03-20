<?php

namespace App\Repositories\Todo;
use Illuminate\Http\Request;

interface TodoRepositoryInterface {
  /**
   * 全てのtodoを取得。
   *
   * @return object
   */
  public function getTodos();

  /**
   * DBにtodoを追加。
   *
   * @var Request $request
   * @return object
   */
  public function addTodo(Request $request);

  /**
   * 該当idのtodoを削除。
   *
   * @var Request $request
   * @return object
   */
  public function deleteTodo(Request $request);

  /**
   * todoの状態を切替(作業中 <=> 完了)。
   *
   * @var Request $request
   * @return object
   */
  public function toggleTodoState(Request $request);
}
