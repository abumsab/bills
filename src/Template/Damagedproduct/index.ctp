<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Damagedproduct[]|\Cake\Collection\CollectionInterface $damagedproduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Damagedproduct'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="damagedproduct index large-9 medium-8 columns content">
    <h3><?= __('Damagedproduct') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quatiny') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($damagedproduct as $damagedproduct): ?>
            <tr>
                <td><?= $damagedproduct->has('product') ? $this->Html->link($damagedproduct->product->name, ['controller' => 'Products', 'action' => 'view', $damagedproduct->product->id]) : '' ?></td>
                <td><?= h($damagedproduct->user_name) ?></td>
                <td><?= $this->Number->format($damagedproduct->quatiny) ?></td>
                <td><?= $this->Number->format($damagedproduct->note) ?></td>
                <td><?= h($damagedproduct->created) ?></td>
                <td><?= $this->Number->format($damagedproduct->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $damagedproduct->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $damagedproduct->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $damagedproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $damagedproduct->id)]) ?>
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
