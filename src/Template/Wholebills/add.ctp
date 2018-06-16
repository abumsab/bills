<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wholebill $wholebill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Wholebills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wholesoldproducts'), ['controller' => 'Wholesoldproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wholesoldproduct'), ['controller' => 'Wholesoldproducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wholebills form large-9 medium-8 columns content">
    <?= $this->Form->create($wholebill) ?>
    <fieldset>
        <legend><?= __('Add Wholebill') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('customerId');
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
