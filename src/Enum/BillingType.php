<?php

namespace Asaas\Enum;

class BillingType{
    public const UNDEFINED = 'UNDEFINED';
    public const BOLETO = 'BOLETO';
    public const PIX = 'PIX';
    public const CREDIT_CARD = 'CREDIT_CARD';

    public static function description(string $billingType): string{
        switch ($billingType) {
            case self::UNDEFINED:
                return 'Não definida.';

            case self::BOLETO:
                return 'Boleto Bancário.';

            case self::PIX:
                return 'Pix.';

            case self::CREDIT_CARD:
                return 'Cartão de crédito.';

            default: 
                return '';
        }
    }
}