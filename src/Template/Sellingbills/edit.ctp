<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sellingbill $sellingbill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sellingbill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sellingbill->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Returnedproducts'), ['controller' => 'Returnedproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Returnedproduct'), ['controller' => 'Returnedproducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Soldproducts'), ['controller' => 'Soldproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Soldproduct'), ['controller' => 'Soldproducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellingbills form large-9 medium-8 columns content">
    <?= $this->Form->create($sellingbill) ?>
    <fieldset>
        <legend><?= __('Edit Sellingbill') ?></legend>
        <?php
            echo $this->Form->control('user_name');
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('total');
            echo $this->Form->control('isaramex');
            echo $this->Form->control('ispost');
            echo $this->Form->control('truckingNo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
