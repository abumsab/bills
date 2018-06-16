<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soldproduct[]|\Cake\Collection\CollectionInterface $soldproducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Soldproduct'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['controller' => 'Sellingbills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sellingbill'), ['controller' => 'Sellingbills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="soldproducts index large-9 medium-8 columns content">
    <h3><?= __('Soldproducts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sellingbill_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($soldproducts as $soldproduct): ?>
            <tr>
                <td><?= $soldproduct->has('sellingbill') ? $this->Html->link($soldproduct->sellingbill->id, ['controller' => 'Sellingbills', 'action' => 'view', $soldproduct->sellingbill->id]) : '' ?></td>
                <td><?= $soldproduct->has('product') ? $this->Html->link($soldproduct->product->name, ['controller' => 'Products', 'action' => 'view', $soldproduct->product->id]) : '' ?></td>
                <td><?= $this->Number->format($soldproduct->quantity) ?></td>
                <td><?= $this->Number->format($soldproduct->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $soldproduct->sellingbill_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $soldproduct->sellingbill_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete',$soldproduct->product_id , $soldproduct->sellingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $soldproduct->sellingbill_id)]) ?>
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
