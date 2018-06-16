<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wholebill $wholebill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wholebill'), ['action' => 'edit', $wholebill->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wholebill'), ['action' => 'delete', $wholebill->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $wholebill->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Wholebills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wholebill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wholesoldproducts'), ['controller' => 'Wholesoldproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wholesoldproduct'), ['controller' => 'Wholesoldproducts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wholebills view large-9 medium-8 columns content">
    <h3><?= h($wholebill->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($wholebill->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CustomerId') ?></th>
            <td><?= h($wholebill->customerId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($wholebill->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($wholebill->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($wholebill->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Wholesoldproducts') ?></h4>
        <?php if (!empty($wholebill->wholesoldproducts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Wholebill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quatiny') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($wholebill->wholesoldproducts as $wholesoldproducts): ?>
            <tr>
                <td><?= h($wholesoldproducts->wholebill_id) ?></td>
                <td><?= h($wholesoldproducts->product_id) ?></td>
                <td><?= h($wholesoldproducts->quatiny) ?></td>
                <td><?= h($wholesoldproducts->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Wholesoldproducts', 'action' => 'view', $wholesoldproducts->wholebill_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Wholesoldproducts', 'action' => 'edit', $wholesoldproducts->wholebill_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Wholesoldproducts', 'action' => 'delete', $wholesoldproducts->wholebill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $wholesoldproducts->wholebill_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
