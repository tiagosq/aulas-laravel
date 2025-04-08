<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class MealController extends Controller
{
    //
    public function index() {
        //Lista todos os pratos.
    }

    public function create($id) {
        return view('meals.create', ['id' => $id]);
    }

    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'menu_id' => 'required|exists:menus,id',
                'name' => 'required|string|max:16',
                'description' => 'nullable|string|max:50',
                'price' => 'required|numeric|between:1,99.99',
            ]);

            if($validator->fails()) {
                return redirect()->route('meals.create', [$request->menu_id])
                    ->withInput()
                    ->withErrors($validator);
            }

            Meal::create($request->all());
            return redirect()->route('menus.view', [$request->menu_id]);
        } catch (Exception $e) {
            Log::info('Erro durante a operação: ' . $e->getMessage());
            return back()->withInput();
        }
    }

    public function edit($id) {
        return view('meals.edit', ['id' => $id]);
    }

    public function update(Request $request, $id) {
        //Validaçaõ e redirecionamento
    }

    public function destroy($id) {
        //Validação e redirecionamento        
    }
}
