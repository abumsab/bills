<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wholesoldproduct $wholesoldproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wholesoldproduct'), ['action' => 'edit', $wholesoldproduct->wholebill_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wholesoldproduct'), ['action' => 'delete', $wholesoldproduct->wholebill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $wholesoldproduct->wholebill_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wholesoldproducts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wholesoldproduct'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wholebills'), ['controller' => 'Wholebills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wholebill'), ['controller' => 'Wholebills', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wholesoldproducts view large-9 medium-8 columns content">
    <h3><?= h($wholesoldproduct->wholebill_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wholebill') ?></th>
            <td><?= $wholesoldproduct->has('wholebill') ? $this->Html->link($wholesoldproduct->wholebill->ID, ['controller' => 'Wholebills', 'action' => 'view', $wholesoldproduct->wholebill->ID]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $wholesoldproduct->has('product') ? $this->Html->link($wholesoldproduct->product->name, ['controller' => 'Products', 'action' => 'view', $wholesoldproduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quatiny') ?></th>
            <td><?= $this->Number->format($wholesoldproduct->quatiny) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($wholesoldproduct->total) ?></td>
        </tr>
    </table>
</div>
