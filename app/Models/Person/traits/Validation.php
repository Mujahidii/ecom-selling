<?php

namespace App\Models\Person\traits;

use Illuminate\Validation\Rule;

trait Validation
{
    /**
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'id_card' => ['regex:/(?:\d{17}|\d{13}|\d{10})/', Rule::unique('persons', 'ic_card')]
        ];
    }
}
