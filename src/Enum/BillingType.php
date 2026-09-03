<?php

namespace Asaas\Enum;

enum BillingType: string {
    case UNDEFINED = 'UNDEFINED';
    case BOLETO = 'BOLETO';
    case PIX = 'PIX';
    case CREDIT_CARD = 'CREDIT_CARD';
    
    public function description(): string
    {
        return match ($this) {
            self::UNDEFINED =>
                'Não definida.',

            self::BOLETO =>
                'Boleto Bancário.',
            
            self::PIX =>
                'Pix.',
            
            self::CREDIT_CARD =>
                'Cartão de crédito.',
        };
    }
}
