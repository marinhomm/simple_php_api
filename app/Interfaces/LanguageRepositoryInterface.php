<?php

namespace App\Interfaces;

interface LanguageRepositoryInterface
{
    public function get();
    public function save($data);
    public function getById($id);
    public function update($id);
    public function delete($id);
}