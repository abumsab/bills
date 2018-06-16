<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boughtproduct $boughtproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Boughtproduct'), ['action' => 'edit', $boughtproduct->buyingbill_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Boughtproduct'), ['action' => 'delete', $boughtproduct->buyingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $boughtproduct->buyingbill_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Boughtproducts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boughtproduct'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buyingbills'), ['controller' => 'Buyingbills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyingbill'), ['controller' => 'Buyingbills', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="boughtproducts view large-9 medium-8 columns content">
    <h3><?= h($boughtproduct->buyingbill_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Buyingbill') ?></th>
            <td><?= $boughtproduct->has('buyingbill') ? $this->Html->link($boughtproduct->buyingbill->id, ['controller' => 'Buyingbills', 'action' => 'view', $boughtproduct->buyingbill->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $boughtproduct->has('product') ? $this->Html->link($boughtproduct->product->name, ['controller' => 'Products', 'action' => 'view', $boughtproduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($boughtproduct->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($boughtproduct->total) ?></td>
        </tr>
    </table>
</div>
