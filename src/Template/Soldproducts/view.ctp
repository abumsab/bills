<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soldproduct $soldproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Soldproduct'), ['action' => 'edit', $soldproduct->sellingbill_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Soldproduct'), ['action' => 'delete', $soldproduct->sellingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $soldproduct->sellingbill_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Soldproducts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Soldproduct'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['controller' => 'Sellingbills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['controller' => 'Sellingbills', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="soldproducts view large-9 medium-8 columns content">
    <h3><?= h($soldproduct->sellingbill_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sellingbill') ?></th>
            <td><?= $soldproduct->has('sellingbill') ? $this->Html->link($soldproduct->sellingbill->id, ['controller' => 'Sellingbills', 'action' => 'view', $soldproduct->sellingbill->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $soldproduct->has('product') ? $this->Html->link($soldproduct->product->name, ['controller' => 'Products', 'action' => 'view', $soldproduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($soldproduct->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($soldproduct->total) ?></td>
        </tr>
    </table>
</div>
