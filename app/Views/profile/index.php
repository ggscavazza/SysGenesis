<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-container uk-margin-top">
    <h1 class="uk-heading-divider">Perfil</h1>
    <form action="/profile/update" method="post" class="uk-form-stacked">
        <div class="uk-margin">
            <label class="uk-form-label" for="name">Nome</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="name" name="name" type="text" value="<?= $user['name'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="surname">Sobrenome</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="surname" name="surname" type="text" value="<?= $user['surname'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="cpf">CPF</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="cpf" name="cpf" type="text" value="<?= $user['cpf'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="rg">RG</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="rg" name="rg" type="text" value="<?= $user['rg'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="profession">Profissão</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="profession" name="profession" type="text" value="<?= $user['profession'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="position">Cargo</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="position" name="position" type="text" value="<?= $user['position'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="company">Nome da Empresa</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="company" name="company" type="text" value="<?= $user['company'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="phone">Telefone</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="phone" name="phone" type="text" value="<?= $user['phone'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="email">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="email" name="email" type="email" value="<?= $user['email'] ?>" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="password">Senha</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="password" name="password" type="password">
            </div>
        </div>
        <div class="uk-margin">
            <button type="submit" class="uk-button uk-button-primary">Atualizar</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
