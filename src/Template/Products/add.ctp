<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Boughtproducts'), ['controller' => 'Boughtproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Boughtproduct'), ['controller' => 'Boughtproducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Returnedproducts'), ['controller' => 'Returnedproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Returnedproduct'), ['controller' => 'Returnedproducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Soldproducts'), ['controller' => 'Soldproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Soldproduct'), ['controller' => 'Soldproducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wholesoldproducts'), ['controller' => 'Wholesoldproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wholesoldproduct'), ['controller' => 'Wholesoldproducts', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('price');
            echo $this->Form->control('cost');
            echo $this->Form->control('waranty');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
