<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Returnedproduct $returnedproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Returnedproduct'), ['action' => 'edit', $returnedproduct->sellingbill_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Returnedproduct'), ['action' => 'delete', $returnedproduct->sellingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $returnedproduct->sellingbill_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Returnedproducts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Returnedproduct'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['controller' => 'Sellingbills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['controller' => 'Sellingbills', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="returnedproducts view large-9 medium-8 columns content">
    <h3><?= h($returnedproduct->sellingbill_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sellingbill') ?></th>
            <td><?= $returnedproduct->has('sellingbill') ? $this->Html->link($returnedproduct->sellingbill->id, ['controller' => 'Sellingbills', 'action' => 'view', $returnedproduct->sellingbill->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $returnedproduct->has('product') ? $this->Html->link($returnedproduct->product->name, ['controller' => 'Products', 'action' => 'view', $returnedproduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($returnedproduct->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quatiny') ?></th>
            <td><?= $this->Number->format($returnedproduct->quatiny) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($returnedproduct->created) ?></td>
        </tr>
    </table>
</div>
