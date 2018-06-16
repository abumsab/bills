<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Returnedproduct[]|\Cake\Collection\CollectionInterface $returnedproducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Returnedproduct'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['controller' => 'Sellingbills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['controller' => 'Sellingbills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="returnedproducts index large-9 medium-8 columns content">
    <h3><?= __('Returnedproducts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sellingbill_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quatiny') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($returnedproducts as $returnedproduct): ?>
            <tr>
                <td><?= $returnedproduct->has('sellingbill') ? $this->Html->link($returnedproduct->sellingbill->id, ['controller' => 'Sellingbills', 'action' => 'view', $returnedproduct->sellingbill->id]) : '' ?></td>
                <td><?= $returnedproduct->has('product') ? $this->Html->link($returnedproduct->product->name, ['controller' => 'Products', 'action' => 'view', $returnedproduct->product->id]) : '' ?></td>
                <td><?= $this->Number->format($returnedproduct->quatiny) ?></td>
                <td><?= h($returnedproduct->created) ?></td>
                <td><?= h($returnedproduct->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $returnedproduct->sellingbill_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $returnedproduct->sellingbill_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $returnedproduct->sellingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $returnedproduct->sellingbill_id)]) ?>
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
