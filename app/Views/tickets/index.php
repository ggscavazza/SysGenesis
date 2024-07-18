<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-container uk-margin-top">
    <h1 class="uk-heading-divider">Lista de Chamados</h1>
    <a href="/tickets/create" class="uk-button uk-button-primary uk-margin-bottom">Novo Chamado</a>
    <table class="uk-table uk-table-divider">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Status</th>
                <th>Prioridade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tickets as $ticket): ?>
                <tr>
                    <td><?= $ticket['id'] ?></td>
                    <td><?= $ticket['title'] ?></td>
                    <td><?= $ticket['status'] ?></td>
                    <td><?= $ticket['priority'] ?></td>
                    <td>
                        <a href="/tickets/update/<?= $ticket['id'] ?>" class="uk-button uk-button-default">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
