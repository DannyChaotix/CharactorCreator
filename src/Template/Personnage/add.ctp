<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personnage $personnage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Personnage'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="personnage form large-9 medium-8 columns content">
    <?= $this->Form->create($personnage) ?>
    <fieldset>
        <legend><?= __('Add Personnage') ?></legend>
        <?php
            echo $this->Form->control('Nom');
            echo $this->Form->control('Description');
            echo $this->Form->control('Habiletes');
            echo $this->Form->control('Allies');
            echo $this->Form->control('Image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
