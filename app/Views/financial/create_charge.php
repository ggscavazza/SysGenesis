<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-container uk-margin-top">
    <h1 class="uk-heading-divider">Nova Cobrança</h1>
    <form action="/financial/store_charge" method="post" class="uk-form-stacked">
        <div class="uk-margin">
            <label class="uk-form-label" for="customer_id">ID do Cliente</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="customer_id" name="customer_id" type="text" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="amount">Valor</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="amount" name="amount" type="number" step="0.01" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="description">Descrição</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" id="description" name="description" rows="5" required></textarea>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="due_date">Data de Vencimento</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="due_date" name="due_date" type="date" required>
            </div>
        </div>
        <div class="uk-margin">
            <button type="submit" class="uk-button uk-button-primary">Criar</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
