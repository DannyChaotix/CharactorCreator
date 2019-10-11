<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Habilete $habilete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Habilete'), ['action' => 'edit', $habilete->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Habilete'), ['action' => 'delete', $habilete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $habilete->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Habiletes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Habilete'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="habiletes view large-9 medium-8 columns content">
    <h3><?= h($habilete->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($habilete->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($habilete->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ShortDesc') ?></th>
            <td><?= h($habilete->ShortDesc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($habilete->id) ?></td>
        </tr>
    </table>
</div>
