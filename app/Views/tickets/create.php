<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-container uk-margin-top">
    <h1 class="uk-heading-divider">Novo Chamado</h1>
    <form action="/tickets/store" method="post" class="uk-form-stacked">
        <div class="uk-margin">
            <label class="uk-form-label" for="title">Título</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="title" name="title" type="text" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="description">Descrição</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea" id="description" name="description" rows="5" required></textarea>
            </div>
        </div>
        <div class="uk-margin">
            <button type="submit" class="uk-button uk-button-primary">Criar</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
