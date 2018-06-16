<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['controller' => 'Sellingbills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['controller' => 'Sellingbills', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?php


            echo'<div class="input text required"><label for="id">phone</label><input type="text" name="id" required="required" maxlength="12" id="id"></div>';
            echo $this->Form->control('name');
            echo $this->Form->control('address');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
