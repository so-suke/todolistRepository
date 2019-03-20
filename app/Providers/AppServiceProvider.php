<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register() {
    $this->app->bind(
      \App\Repositories\Todo\TodoRepositoryInterface::class,
      \App\Repositories\Todo\TodoRepository::class
    );
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot() {
    //
  }
}
