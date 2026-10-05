<?php

namespace Asaas\Enum;

class PaymentStatus{
    public const PENDING = 'PENDING';
    public const CONFIRMED = 'CONFIRMED';
    public const RECEIVED = 'RECEIVED';
    public const OVERDUE = 'OVERDUE';
    public const REFUNDED = 'REFUNDED';
    public const RECEIVED_IN_CASH = 'RECEIVED_IN_CASH';
    public const REFUND_REQUESTED = 'REFUND_REQUESTED';
    public const REFUND_IN_PROGRESS = 'REFUND_IN_PROGRESS';
    public const REFUND_DENIED = 'REFUND_DENIED';
    public const CHARGEBACK_REQUESTED = 'CHARGEBACK_REQUESTED';
    public const CHARGEBACK_DISPUTE = 'CHARGEBACK_DISPUTE';
    public const AWAITING_CHARGEBACK_REVERSAL = 'AWAITING_CHARGEBACK_REVERSAL';
    public const AWAITING_RISK_ANALYSIS = 'AWAITING_RISK_ANALYSIS';
    public const APPROVED_BY_RISK_ANALYSIS = 'APPROVED_BY_RISK_ANALYSIS';
    public const REPROVED_BY_RISK_ANALYSIS = 'REPROVED_BY_RISK_ANALYSIS';
    public const AUTHORIZED = 'AUTHORIZED';
    public const CREDIT_CARD_CAPTURE_REFUSED = 'CREDIT_CARD_CAPTURE_REFUSED';

    public static function description(string $paymentStatus): string{
        switch ($paymentStatus) {
            case self::PENDING:
                return 'Aguardando pagamento';

            case self::CONFIRMED:
                return 'Pagamento confirmado';

            case self::RECEIVED:
                return 'Pagamento recebido';

            case self::OVERDUE:
                return 'Pagamento vencido';

            case self::REFUNDED:
                return 'Pagamento estornado';

            case self::RECEIVED_IN_CASH:
                return 'Pagamento recebido em dinheiro';

            case self::REFUND_REQUESTED:
                return 'Estorno solicitado';

            case self::REFUND_IN_PROGRESS:
                return 'Estorno em processamento';

            case self::REFUND_DENIED:
                return 'Estorno negado';

            case self::CHARGEBACK_REQUESTED:
                return 'Chargeback solicitado';

            case self::CHARGEBACK_DISPUTE:
                return 'Chargeback em disputa';

            case self::AWAITING_CHARGEBACK_REVERSAL:
                return 'Aguardando reversão do chargeback';

            case self::AWAITING_RISK_ANALYSIS:
                return 'Aguardando análise de risco';

            case self::APPROVED_BY_RISK_ANALYSIS:
                return 'Aprovado pela análise de risco';

            case self::REPROVED_BY_RISK_ANALYSIS:
                return 'Reprovado pela análise de risco';

            case self::AUTHORIZED:
                return 'Pagamento autorizado';

            case self::CREDIT_CARD_CAPTURE_REFUSED:
                return 'Captura do cartão de crédito recusada';

            default:
                return '';
        }
    }
}