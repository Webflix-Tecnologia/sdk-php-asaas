<?php

namespace Asaas\Enum;

enum PaymentStatus: string {
    case PAYMENT_CREATED = 'PAYMENT_CREATED';
    case PAYMENT_AWAITING_RISK_ANALYSIS = 'PAYMENT_AWAITING_RISK_ANALYSIS';
    case PAYMENT_APPROVED_BY_RISK_ANALYSIS = 'PAYMENT_APPROVED_BY_RISK_ANALYSIS';
    case PAYMENT_REPROVED_BY_RISK_ANALYSIS = 'PAYMENT_REPROVED_BY_RISK_ANALYSIS';
    case PAYMENT_AUTHORIZED = 'PAYMENT_AUTHORIZED';
    case PAYMENT_UPDATED = 'PAYMENT_UPDATED';
    case PAYMENT_CONFIRMED = 'PAYMENT_CONFIRMED';
    case PAYMENT_RECEIVED = 'PAYMENT_RECEIVED';
    case PAYMENT_CREDIT_CARD_CAPTURE_REFUSED = 'PAYMENT_CREDIT_CARD_CAPTURE_REFUSED';
    case PAYMENT_ANTICIPATED = 'PAYMENT_ANTICIPATED';
    case PAYMENT_OVERDUE = 'PAYMENT_OVERDUE';
    case PAYMENT_DELETED = 'PAYMENT_DELETED';
    case PAYMENT_RESTORED = 'PAYMENT_RESTORED';

    case PAYMENT_REFUNDED = 'PAYMENT_REFUNDED';
    case PAYMENT_PARTIALLY_REFUNDED = 'PAYMENT_PARTIALLY_REFUNDED';
    case PAYMENT_REFUND_IN_PROGRESS = 'PAYMENT_REFUND_IN_PROGRESS';
    case PAYMENT_REFUND_DENIED = 'PAYMENT_REFUND_DENIED';
    case PAYMENT_RECEIVED_IN_CASH_UNDONE = 'PAYMENT_RECEIVED_IN_CASH_UNDONE';
    case PAYMENT_CHARGEBACK_REQUESTED = 'PAYMENT_CHARGEBACK_REQUESTED';
    case PAYMENT_CHARGEBACK_DISPUTE = 'PAYMENT_CHARGEBACK_DISPUTE';
    case PAYMENT_AWAITING_CHARGEBACK_REVERSAL = 'PAYMENT_AWAITING_CHARGEBACK_REVERSAL';

    case PAYMENT_DUNNING_REQUESTED = 'PAYMENT_DUNNING_REQUESTED';
    case PAYMENT_DUNNING_RECEIVED = 'PAYMENT_DUNNING_RECEIVED';
    case PAYMENT_BANK_SLIP_CANCELLED = 'PAYMENT_BANK_SLIP_CANCELLED';
    case PAYMENT_BANK_SLIP_VIEWED = 'PAYMENT_BANK_SLIP_VIEWED';
    case PAYMENT_CHECKOUT_VIEWED = 'PAYMENT_CHECKOUT_VIEWED';

    case PAYMENT_SPLIT_CANCELLED = 'PAYMENT_SPLIT_CANCELLED';
    case PAYMENT_SPLIT_DIVERGENCE_BLOCK = 'PAYMENT_SPLIT_DIVERGENCE_BLOCK';
    case PAYMENT_SPLIT_DIVERGENCE_BLOCK_FINISHED = 'PAYMENT_SPLIT_DIVERGENCE_BLOCK_FINISHED';
    case PAYMENT_SPLIT_DONE = 'PAYMENT_SPLIT_DONE';

    public function description(): string
    {
        return match ($this) {
            self::PAYMENT_CREATED =>
                'Geração de nova cobrança.',

            self::PAYMENT_AWAITING_RISK_ANALYSIS =>
                'Pagamento em cartão aguardando aprovação pela análise manual de risco.',

            self::PAYMENT_APPROVED_BY_RISK_ANALYSIS =>
                'Pagamento em cartão aprovado pela análise manual de risco.',

            self::PAYMENT_REPROVED_BY_RISK_ANALYSIS =>
                'Pagamento em cartão reprovado pela análise manual de risco.',

            self::PAYMENT_AUTHORIZED =>
                'Pagamento em cartão autorizado e que precisa ser capturado.',

            self::PAYMENT_UPDATED =>
                'Alteração no vencimento ou valor de cobrança existente.',

            self::PAYMENT_CONFIRMED =>
                'Pagamento efetuado, mas com saldo ainda não disponibilizado.',

            self::PAYMENT_RECEIVED =>
                'Cobrança recebida, com valor disponível na conta Asaas.',

            self::PAYMENT_CREDIT_CARD_CAPTURE_REFUSED =>
                'Falha na captura do pagamento com cartão de crédito.',

            self::PAYMENT_ANTICIPATED =>
                'Cobrança antecipada.',

            self::PAYMENT_OVERDUE =>
                'Cobrança vencida.',

            self::PAYMENT_DELETED =>
                'Cobrança removida.',

            self::PAYMENT_RESTORED =>
                'Cobrança restaurada.',

            self::PAYMENT_REFUNDED =>
                'Cobrança estornada.',

            self::PAYMENT_PARTIALLY_REFUNDED =>
                'Cobrança estornada parcialmente.',

            self::PAYMENT_REFUND_IN_PROGRESS =>
                'Estorno em processamento. A liquidação já está agendada e a cobrança será estornada após sua execução.',

            self::PAYMENT_REFUND_DENIED =>
                'Estorno negado. Disponível somente para boletos.',

            self::PAYMENT_RECEIVED_IN_CASH_UNDONE =>
                'Recebimento em dinheiro desfeito.',

            self::PAYMENT_CHARGEBACK_REQUESTED =>
                'Chargeback recebido.',

            self::PAYMENT_CHARGEBACK_DISPUTE =>
                'Chargeback em disputa após apresentação de documentos para contestação.',

            self::PAYMENT_AWAITING_CHARGEBACK_REVERSAL =>
                'Disputa vencida, aguardando repasse da adquirente.',

            self::PAYMENT_DUNNING_REQUESTED =>
                'Requisição de negativação.',

            self::PAYMENT_DUNNING_RECEIVED =>
                'Recebimento de negativação.',

            self::PAYMENT_BANK_SLIP_CANCELLED =>
                'Registro do boleto cancelado por expiração do prazo de pagamento após o vencimento. Não indica a remoção da cobrança.',

            self::PAYMENT_BANK_SLIP_VIEWED =>
                'Boleto da cobrança visualizado pelo cliente.',

            self::PAYMENT_CHECKOUT_VIEWED =>
                'Fatura da cobrança visualizada pelo cliente.',

            self::PAYMENT_SPLIT_CANCELLED =>
                'Um Split da cobrança foi cancelado.',

            self::PAYMENT_SPLIT_DIVERGENCE_BLOCK =>
                'Valor da cobrança bloqueado por divergência de Split.',

            self::PAYMENT_SPLIT_DIVERGENCE_BLOCK_FINISHED =>
                'Bloqueio por divergência de Split finalizado.',

            self::PAYMENT_SPLIT_DONE =>
                'Um Split da cobrança foi liquidado.',
        };
    }
}
