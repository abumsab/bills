<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyingbill $buyingbill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $buyingbill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $buyingbill->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Buyingbills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Boughtproducts'), ['controller' => 'Boughtproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Boughtproduct'), ['controller' => 'Boughtproducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="buyingbills form large-9 medium-8 columns content">
    <?= $this->Form->create($buyingbill) ?>
    <fieldset>
        <legend><?= __('Edit Buyingbill') ?></legend>
        <?php
            echo $this->Form->control('user_name');
            echo $this->Form->control('total');
            echo $this->Form->control('provider');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
