<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="uk-container uk-margin-top">
    <h1 class="uk-heading-divider">Dashboard Financeiro</h1>
    <a href="/financial/create_charge" class="uk-button uk-button-primary uk-margin-bottom">Nova Cobrança</a>
    <table class="uk-table uk-table-divider">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Data de Vencimento</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($charges as $charge): ?>
                <tr>
                    <td><?= $charge['id'] ?></td>
                    <td><?= $charge['description'] ?></td>
                    <td><?= $charge['amount'] ?></td>
                    <td><?= $charge['due_date'] ?></td>
                    <td><?= $charge['status'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
