<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-card uk-card-default uk-card-hover uk-padding uk-border-rounded uk-margin-top uk-width-1-1" style="border-radius: 20px;">
    <div class="uk-container">
        <?php if(session()->getFlashdata('msg')):?>
            <div class="uk-alert-danger" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p><?= session()->getFlashdata('msg') ?></p>
            </div>
        <?php endif;?>
        <form action="/login/authenticate" method="post" class="uk-form-stacked">
            <p class="uk-h3 uk-text-center">PAINEL DE SUPORTE</p><br>

            <div class="uk-margin">
                <label class="uk-form-label" for="email">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="email" name="email" type="email" required>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="password">Senha</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="password" name="password" type="password" required>
                </div>
                <small><a href="/recover-password" class="uk-button uk-text-danger uk-text-small uk-button-link">Esqueceu a senha?</a></small>
            </div>

            <div class="uk-margin">
                <button type="submit" class="uk-button uk-border-pill uk-width-1-1 uk-button-primary uk-text-bold">Login</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
