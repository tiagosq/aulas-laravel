<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Meal;

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

        //* Toda vez que você não esqpecificar o comparador, ele vai ser ==        
        //* Caso tu coloque vários where, eles vão funcionar como E
        $meals = Meal::where('menu_id', $id)->get();

        $params = [
            'id' => $id,
            'visited_at' => date('H:i:s d/m/Y'),
            'options' => $meals,
        ];
        return view('view-menu', $params);
    }
}
