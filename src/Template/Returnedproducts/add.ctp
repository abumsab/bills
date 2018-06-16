<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Returnedproduct $returnedproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Returnedproducts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['controller' => 'Sellingbills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['controller' => 'Sellingbills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="returnedproducts form large-9 medium-8 columns content">
    <?= $this->Form->create($returnedproduct) ?>
    <fieldset>
        <legend><?= __('Add Returnedproduct') ?></legend>
        <?php
            echo $this->Form->control('quatiny');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
