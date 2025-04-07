<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    //
    public function create() {
        return view('menus.create');
    }

    public function store(Request $request) {
        Menu::create($request->all());
        return redirect()->route('home');
    }

    public function edit($id) {
        $menu = Menu::find($id);

        if(!$menu) {
            return redirect()->route('home');
        }

        return view('menus.edit', ['menu' => $menu]);
    }

    public function update($id, Request $request) {
        $menu = Menu::find($id);
        if(!$menu) {
            return redirect()->route('home');
        }

        $menu->update($request->all());
        return redirect()->route('home');
    }

    public function destroy($id) {
        $menu = Menu::find($id);
        if(!$menu) {
            return redirect()->route('home');
        }

        $menu->delete();
        return redirect()->route('home');
    }
}
