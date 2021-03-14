<?php

namespace App\Models\Vinograd;

use Illuminate\Database\Eloquent\Model;

class ModificationProps extends Model
{
    protected $table = 'vinograd_modifications';
    public $timestamps = false;
    protected $fillable = ['name'];

    public static function create($fields)
    {
        $modification = new static;
        $modification->fill($fields);
        $modification->save();
        return $modification;
    }

    public function edit($name)
    {
        $this->name = $name;
        $this->save();
    }

    public function remove()
    {
        $this->delete();
    }

}
