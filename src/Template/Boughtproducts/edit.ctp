<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boughtproduct $boughtproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $boughtproduct->buyingbill_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $boughtproduct->buyingbill_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Boughtproducts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buyingbills'), ['controller' => 'Buyingbills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buyingbill'), ['controller' => 'Buyingbills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boughtproducts form large-9 medium-8 columns content">
    <?= $this->Form->create($boughtproduct) ?>
    <fieldset>
        <legend><?= __('Edit Boughtproduct') ?></legend>
        <?php
            echo $this->Form->control('quantity');
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
