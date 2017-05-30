<?php

namespace App\Models\system\folks;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function PhysicalPerson()
    {
        return $this->hasOne(PhysicalPerson::class);
    }
}
