<?php

namespace UpTest;

use UPFlex\MixUp\Core\Base;
use UPFlex\MixUp\Utils\Fields\Validate;
use UPFlex\MixUp\Utils\Message;

class Contact extends Base
{
    use Message;
    use Validate;

    public function __construct()
    {
        self::send();
        exit();
    }

    protected static function send()
    {
        $fields = self::getFieldsValidated('get');
        $validate = $fields['success'] ?? true;

        if ($validate) {
            echo 'Mensagem enviada';
        } else {
            echo 'Mensagem não enviada';
        }
    }

    protected static function setFields(): array
    {
        return [
            'name' => 'required|min:1|max:20',
            'email' => 'required',
        ];
    }
}