<?php

namespace App\Interfaces;

interface LanguageRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function save($data);
    public function update($id);
    public function delete($id);
}