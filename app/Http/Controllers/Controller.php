<?php

namespace App\Http\Controllers;
use App\Plate;
use App\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
      $users = User::inRandomOrder() -> limit(5) -> get();
      // dd($users);
      $idUser = [];
      foreach ($users as $user) {
        $idUser[] = $user['id'];
      }
      // dd($idUser);
      $plates = [];

      $platesAll = Plate::all();
      // $plate['user_id'] == $idUser
      foreach ($platesAll as $plate) {
        if (in_array($plate['user_id'], $idUser)) {
          $plates[] = $plate;
        }
      }

      // dd($plates);
      return view('welcome-home', compact('plates'));
    }
}
