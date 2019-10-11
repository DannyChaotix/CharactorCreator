<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personnage $personnage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Personnage'), ['action' => 'edit', $personnage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Personnage'), ['action' => 'delete', $personnage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Personnage'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personnage view large-9 medium-8 columns content">
    <h3><?= h($personnage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($personnage->Nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($personnage->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($personnage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Habiletes') ?></th>
            <td><?= $this->Number->format($personnage->Habiletes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Allies') ?></th>
            <td><?= $this->Number->format($personnage->Allies) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $this->Number->format($personnage->Image) ?></td>
        </tr>
    </table>
</div>
