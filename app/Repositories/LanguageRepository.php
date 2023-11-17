<?php

namespace App\Repositories;

use App\Interfaces\LanguageRepositoryInterface;
use App\Models\Language;

class LanguageRepository implements LanguageRepositoryInterface
{
    
    public function getAll()
    {
        return NULL;
    }

    public function getById($id)
    {
        return NULL;
    }

    public function save($data)
    {
        return Language::create($data);
    }

    public function update($id)
    {
        return NULL;
    }

    public function delete($id)
    {
        return NULL;
    }
}