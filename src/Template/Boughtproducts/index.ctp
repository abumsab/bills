<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boughtproduct[]|\Cake\Collection\CollectionInterface $boughtproducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Boughtproduct'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buyingbills'), ['controller' => 'Buyingbills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buyingbill'), ['controller' => 'Buyingbills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boughtproducts index large-9 medium-8 columns content">
    <h3><?= __('Boughtproducts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('buyingbill_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($boughtproducts as $boughtproduct): ?>
            <tr>
                <td><?= $boughtproduct->has('buyingbill') ? $this->Html->link($boughtproduct->buyingbill->id, ['controller' => 'Buyingbills', 'action' => 'view', $boughtproduct->buyingbill->id]) : '' ?></td>
                <td><?= $boughtproduct->has('product') ? $this->Html->link($boughtproduct->product->name, ['controller' => 'Products', 'action' => 'view', $boughtproduct->product->id]) : '' ?></td>
                <td><?= $this->Number->format($boughtproduct->quantity) ?></td>
                <td><?= $this->Number->format($boughtproduct->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $boughtproduct->buyingbill_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $boughtproduct->buyingbill_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $boughtproduct->buyingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $boughtproduct->buyingbill_id)]) ?>
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
