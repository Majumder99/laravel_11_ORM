<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MyController extends Controller {
    public function index() {
        return view("welcome");
    }
    public function next() {
        return response()->json(["name" => "John Doe", "age" => 24]);
    }
    public function prev($id) {
        return response($id)->header("name", $id)->header("age", 24);
    }

    public function first() {
        return response()->json(["name" => "", "" => 24]);
    }

    public function second() {
        return "This is the second page";
    }

    public function catch(Request $request) {
        return $request;
    }
}
