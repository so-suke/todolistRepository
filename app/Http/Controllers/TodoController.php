<?php

namespace App\Http\Controllers;
use App\Repositories\Todo\TodoRepositoryInterface;
use Illuminate\Http\Request;

class TodoController extends Controller {
  public function __construct(TodoRepositoryInterface $todo_repository) {
    $this->todo_repository = $todo_repository;
  }

  public function index() {
    return $this->todo_repository->getTodos();
  }

  public function add(Request $request) {
    return $this->todo_repository->addTodo($request);
  }

  public function delete(Request $request) {
    return $this->todo_repository->deleteTodo($request);
  }

  public function toggleState(Request $request) {
    return $this->todo_repository->toggleTodoState($request);
  }
}
