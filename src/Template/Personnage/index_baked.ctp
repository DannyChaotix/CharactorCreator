<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personnage[]|\Cake\Collection\CollectionInterface $personnage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="personnage index large-9 medium-8 columns content">
    <h3><?= __('Personnage') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Habiletes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Allies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personnage as $personnage): ?>
            <tr>
                <td><?= $this->Number->format($personnage->id) ?></td>
                <td><?= h($personnage->Nom) ?></td>
                <td><?= h($personnage->Description) ?></td>
                <td><?= $this->Number->format($personnage->Habiletes) ?></td>
                <td><?= $this->Number->format($personnage->Allies) ?></td>
                <td><?= $this->Number->format($personnage->Image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $personnage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personnage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $personnage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnage->id)]) ?>
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
