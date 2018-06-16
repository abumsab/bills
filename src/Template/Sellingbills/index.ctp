<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sellingbill[]|\Cake\Collection\CollectionInterface $sellingbills
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Returnedproducts'), ['controller' => 'Returnedproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Returnedproduct'), ['controller' => 'Returnedproducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Soldproducts'), ['controller' => 'Soldproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Soldproduct'), ['controller' => 'Soldproducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellingbills index large-9 medium-8 columns content">
    <h3><?= __('Sellingbills') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isaramex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ispost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('truckingNo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sellingbills as $sellingbill): ?>
            <tr>
                <td><?= $this->Number->format($sellingbill->id) ?></td>
                <td><?= h($sellingbill->user_name) ?></td>
                <td><?= h($sellingbill->created) ?></td>
                <td><?= $sellingbill->has('customer') ? $this->Html->link($sellingbill->customer->name, ['controller' => 'Customers', 'action' => 'view', $sellingbill->customer->id]) : '' ?></td>
                <td><?= $this->Number->format($sellingbill->total) ?></td>
                <td><?= h($sellingbill->isaramex) ?></td>
                <td><?= h($sellingbill->ispost) ?></td>
                <td><?= h($sellingbill->truckingNo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sellingbill->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sellingbill->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sellingbill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sellingbill->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
