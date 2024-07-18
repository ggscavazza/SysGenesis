<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-container uk-margin-top">
    <h1 class="uk-heading-divider">Níveis de Acesso</h1>
    <a href="/access_levels/create" class="uk-button uk-button-primary uk-margin-bottom">Novo Nível de Acesso</a>
    <table class="uk-table uk-table-divider">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($access_levels as $level): ?>
                <tr>
                    <td><?= $level['id'] ?></td>
                    <td><?= $level['name'] ?></td>
                    <td>
                        <a href="/access_levels/edit/<?= $level['id'] ?>" class="uk-button uk-button-default">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
