<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Buyingbill $buyingbill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Buyingbill'), ['action' => 'edit', $buyingbill->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Buyingbill'), ['action' => 'delete', $buyingbill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyingbill->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buyingbills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyingbill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boughtproducts'), ['controller' => 'Boughtproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boughtproduct'), ['controller' => 'Boughtproducts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="buyingbills view large-9 medium-8 columns content">
    <h3><?= h($buyingbill->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($buyingbill->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provider') ?></th>
            <td><?= h($buyingbill->provider) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($buyingbill->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($buyingbill->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($buyingbill->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Boughtproducts') ?></h4>
        <?php if (!empty($buyingbill->boughtproducts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Buyingbill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($buyingbill->boughtproducts as $boughtproducts): ?>
            <tr>
                <td><?= h($boughtproducts->buyingbill_id) ?></td>
                <td><?= h($boughtproducts->product_id) ?></td>
                <td><?= h($boughtproducts->quantity) ?></td>
                <td><?= h($boughtproducts->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Boughtproducts', 'action' => 'view', $boughtproducts->buyingbill_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Boughtproducts', 'action' => 'edit', $boughtproducts->buyingbill_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Boughtproducts', 'action' => 'delete', $boughtproducts->buyingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $boughtproducts->buyingbill_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
