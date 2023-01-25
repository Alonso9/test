<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    //
    public function getApiRest(){
        // Obtenemos los datos de la API
        $post = Http::get('https://jsonplaceholder.typicode.com/posts');
        
        // Convertimos los datos en un array para su manejo
        $postArray = $post->json();

        // dd($postArray);
        // retornamos los datos de la Api a la vist principal
        return view('welcome', compact('postArray'));
    }
}
