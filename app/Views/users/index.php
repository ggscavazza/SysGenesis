<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-container uk-margin-top">
    <h1 class="uk-heading-divider">Lista de Usuários</h1>
    <a href="/users/create" class="uk-button uk-button-primary uk-margin-bottom">Novo Usuário</a>
    <table class="uk-table uk-table-divider">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['role'] ?></td>
                    <td>
                        <a href="/users/edit/<?= $user['id'] ?>" class="uk-button uk-button-default">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
