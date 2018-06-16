<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>

<div style="float:right;" class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($customer->address) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sellingbills') ?></h4>
        <?php if (!empty($customer->sellingbills)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('TruckingNo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->sellingbills as $sellingbills): ?>
            <tr>
                <td><?= h($sellingbills->id) ?></td>
                <td><?= h($sellingbills->created) ?></td>
                <td><?= h($sellingbills->customer_id) ?></td>
                <td><?= h($sellingbills->total) ?></td>
                <td><?= h($sellingbills->truckingNo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('عرض'), ['controller' => 'Sellingbills', 'action' => 'view', $sellingbills->id]) ?>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
