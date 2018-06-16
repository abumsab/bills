<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boughtproducts'), ['controller' => 'Boughtproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boughtproduct'), ['controller' => 'Boughtproducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Returnedproducts'), ['controller' => 'Returnedproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Returnedproduct'), ['controller' => 'Returnedproducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Soldproducts'), ['controller' => 'Soldproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Soldproduct'), ['controller' => 'Soldproducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wholesoldproducts'), ['controller' => 'Wholesoldproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wholesoldproduct'), ['controller' => 'Wholesoldproducts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Waranty') ?></th>
            <td><?= h($product->waranty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($product->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($product->quantity) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Boughtproducts') ?></h4>
        <?php if (!empty($product->boughtproducts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Buyingbill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->boughtproducts as $boughtproducts): ?>
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
    <div class="related">
        <h4><?= __('Related Returnedproducts') ?></h4>
        <?php if (!empty($product->returnedproducts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sellingbill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quatiny') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->returnedproducts as $returnedproducts): ?>
            <tr>
                <td><?= h($returnedproducts->sellingbill_id) ?></td>
                <td><?= h($returnedproducts->product_id) ?></td>
                <td><?= h($returnedproducts->quatiny) ?></td>
                <td><?= h($returnedproducts->created) ?></td>
                <td><?= h($returnedproducts->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Returnedproducts', 'action' => 'view', $returnedproducts->sellingbill_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Returnedproducts', 'action' => 'edit', $returnedproducts->sellingbill_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Returnedproducts', 'action' => 'delete', $returnedproducts->sellingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $returnedproducts->sellingbill_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Soldproducts') ?></h4>
        <?php if (!empty($product->soldproducts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sellingbill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quatiny') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->soldproducts as $soldproducts): ?>
            <tr>
                <td><?= h($soldproducts->sellingbill_id) ?></td>
                <td><?= h($soldproducts->product_id) ?></td>
                <td><?= h($soldproducts->quatiny) ?></td>
                <td><?= h($soldproducts->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Soldproducts', 'action' => 'view', $soldproducts->sellingbill_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Soldproducts', 'action' => 'edit', $soldproducts->sellingbill_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Soldproducts', 'action' => 'delete', $soldproducts->sellingbill_id], ['confirm' => __('Are you sure you want to delete # {0}?', $soldproducts->sellingbill_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Wholesoldproducts') ?></h4>
        <?php if (!empty($product->wholesoldproducts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Wholebill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quatiny') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->wholesoldproducts as $wholesoldproducts): ?>
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
