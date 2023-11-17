<?php

namespace App\Services;

use App\Repositories\LanguageRepository;

class LanguageService
{
    public function __construct(protected LanguageRepository $languageRepository)
    {

    }

    public function get()
    {
        return $this->languageRepository->get();
    }
    
    public function save($name, $releaseYear){
        
        $data = [
            'name' => $name,
            'release_year' => $releaseYear
        ];

        return $this->languageRepository->save($data);
  
    }
}