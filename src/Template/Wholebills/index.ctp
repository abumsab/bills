<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wholebill[]|\Cake\Collection\CollectionInterface $wholebills
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wholebill'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wholesoldproducts'), ['controller' => 'Wholesoldproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wholesoldproduct'), ['controller' => 'Wholesoldproducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wholebills index large-9 medium-8 columns content">
    <h3><?= __('Wholebills') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customerId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wholebills as $wholebill): ?>
            <tr>
                <td><?= $this->Number->format($wholebill->ID) ?></td>
                <td><?= h($wholebill->username) ?></td>
                <td><?= h($wholebill->created) ?></td>
                <td><?= h($wholebill->customerId) ?></td>
                <td><?= $this->Number->format($wholebill->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wholebill->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wholebill->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wholebill->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $wholebill->ID)]) ?>
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
