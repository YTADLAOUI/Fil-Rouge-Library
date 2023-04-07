<?php
namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

class ReserveStatusEnum extends Enum
{
    const ENATTEND = 'en attendant';
    const  VALIDE= 'valide';
    const  EMPRUNT= 'emprunt';
    const  RETURN='return';

    public static function getValues(): array
    {
        return [
            self::ENATTEND,
            self::VALIDE,
            self::EMPRUNT,
            self::RETURN,
        ];
    }
}