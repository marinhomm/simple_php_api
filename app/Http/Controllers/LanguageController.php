<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LanguageService;

class LanguageController extends Controller
{
    public function __construct(protected LanguageService $languageService)
    {
        
    }
    
    public function save(Request $request)
    {
       try {
        return $this->languageService->save($request->name, $request->release_year);
       } catch (Throwable $th) {
        throw $th;
       }
    }
}
