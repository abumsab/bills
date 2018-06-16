<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Damagedproduct $damagedproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $damagedproduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $damagedproduct->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Damagedproduct'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="damagedproduct form large-9 medium-8 columns content">
    <?= $this->Form->create($damagedproduct) ?>
    <fieldset>
        <legend><?= __('Edit Damagedproduct') ?></legend>
        <?php
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('user_name');
            echo $this->Form->control('quatiny');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
