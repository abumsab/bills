<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Damagedproduct $damagedproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Damagedproduct'), ['action' => 'edit', $damagedproduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Damagedproduct'), ['action' => 'delete', $damagedproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $damagedproduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Damagedproduct'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Damagedproduct'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="damagedproduct view large-9 medium-8 columns content">
    <h3><?= h($damagedproduct->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $damagedproduct->has('product') ? $this->Html->link($damagedproduct->product->name, ['controller' => 'Products', 'action' => 'view', $damagedproduct->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($damagedproduct->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quatiny') ?></th>
            <td><?= $this->Number->format($damagedproduct->quatiny) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= $this->Number->format($damagedproduct->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($damagedproduct->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($damagedproduct->created) ?></td>
        </tr>
    </table>
</div>
