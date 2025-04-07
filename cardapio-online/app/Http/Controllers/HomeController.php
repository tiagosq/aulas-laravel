<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    //
    public function Home() {
        $menus = Menu::all();
        return view('home', ['menus' => $menus]);
    }

    public function AboutUs() {
        return view('about-us');
    }

    public function ViewMenu($id) {
        //!Tudo que vem da rota é string.
        $id = implode(' ', explode('-', $id));
        $params = [
            'id' => $id,
            'visited_at' => date('H:i:s d/m/Y'),
            'options' => [],
        ];
        return view('view-menu', $params);
    }
}
