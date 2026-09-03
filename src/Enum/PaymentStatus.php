<?php

namespace Asaas\Enum;

enum PaymentStatus: string {
    case PENDING = 'PENDING';
    case CONFIRMED = 'CONFIRMED';
    case RECEIVED = 'RECEIVED';
    case OVERDUE = 'OVERDUE';
    case REFUNDED = 'REFUNDED';
    case RECEIVED_IN_CASH = 'RECEIVED_IN_CASH';
    case REFUND_REQUESTED = 'REFUND_REQUESTED';
    case REFUND_IN_PROGRESS = 'REFUND_IN_PROGRESS';
    case REFUND_DENIED = 'REFUND_DENIED';
    case CHARGEBACK_REQUESTED = 'CHARGEBACK_REQUESTED';
    case CHARGEBACK_DISPUTE = 'CHARGEBACK_DISPUTE';
    case AWAITING_CHARGEBACK_REVERSAL = 'AWAITING_CHARGEBACK_REVERSAL';
    case AWAITING_RISK_ANALYSIS = 'AWAITING_RISK_ANALYSIS';
    case APPROVED_BY_RISK_ANALYSIS = 'APPROVED_BY_RISK_ANALYSIS';
    case REPROVED_BY_RISK_ANALYSIS = 'REPROVED_BY_RISK_ANALYSIS';
    case AUTHORIZED = 'AUTHORIZED';
    case CREDIT_CARD_CAPTURE_REFUSED = 'CREDIT_CARD_CAPTURE_REFUSED';

    public function description(): string{
        return match ($this) {
            self::PENDING => 'Aguardando pagamento',
            self::CONFIRMED => 'Pagamento confirmado',
            self::RECEIVED => 'Pagamento recebido',
            self::OVERDUE => 'Pagamento vencido',
            self::REFUNDED => 'Pagamento estornado',
            self::RECEIVED_IN_CASH => 'Pagamento recebido em dinheiro',
            self::REFUND_REQUESTED => 'Estorno solicitado',
            self::REFUND_IN_PROGRESS => 'Estorno em processamento',
            self::REFUND_DENIED => 'Estorno negado',
            self::CHARGEBACK_REQUESTED => 'Chargeback solicitado',
            self::CHARGEBACK_DISPUTE => 'Chargeback em disputa',
            self::AWAITING_CHARGEBACK_REVERSAL => 'Aguardando reversão do chargeback',
            self::AWAITING_RISK_ANALYSIS => 'Aguardando análise de risco',
            self::APPROVED_BY_RISK_ANALYSIS => 'Aprovado pela análise de risco',
            self::REPROVED_BY_RISK_ANALYSIS => 'Reprovado pela análise de risco',
            self::AUTHORIZED => 'Pagamento autorizado',
            self::CREDIT_CARD_CAPTURE_REFUSED => 'Captura do cartão de crédito recusada',
        };
    }
}
