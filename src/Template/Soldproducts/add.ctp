<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soldproduct $soldproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Soldproducts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['controller' => 'Sellingbills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['controller' => 'Sellingbills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="soldproducts form large-9 medium-8 columns content">
    <?= $this->Form->create($soldproduct) ?>
    <fieldset>
        <legend><?= __('Add Soldproduct') ?></legend>
        <?php
            echo $this->Form->control('sellingbills', ['options',$sellingbills]);
            echo $this->Form->control('products', ['options',$products]);
            echo $this->Form->control('quantity');
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
