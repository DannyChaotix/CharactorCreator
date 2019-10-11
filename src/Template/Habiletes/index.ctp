<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Habilete[]|\Cake\Collection\CollectionInterface $habiletes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Habilete'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="habiletes index large-9 medium-8 columns content">
    <h3><?= __('Habiletes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ShortDesc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($habiletes as $habilete): ?>
            <tr>
                <td><?= $this->Number->format($habilete->id) ?></td>
                <td><?= h($habilete->name) ?></td>
                <td><?= h($habilete->Description) ?></td>
                <td><?= h($habilete->ShortDesc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $habilete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $habilete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $habilete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $habilete->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
