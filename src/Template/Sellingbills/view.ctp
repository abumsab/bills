<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sellingbill $sellingbill
 */
?>
<div style="float: right;" class="sellingbills view large-9 medium-8 columns content">
    <h3><?= h($sellingbill->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($sellingbill->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $sellingbill->has('customer') ? $this->Html->link($sellingbill->customer->name, ['controller' => 'Customers', 'action' => 'view', $sellingbill->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TruckingNo') ?></th>
            <td><?= h($sellingbill->truckingNo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sellingbill->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($sellingbill->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sellingbill->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isaramex') ?></th>
            <td><?= $sellingbill->isaramex ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ispost') ?></th>
            <td><?= $sellingbill->ispost ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        
        <?php if (!empty($sellingbill->returnedproducts)): ?>
        <h4><?= __('Related Returnedproducts') ?></h4>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Sellingbill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sellingbill->returnedproducts as $returnedproducts): ?>
            <tr>
                <td><?= h($returnedproducts->sellingbill_id) ?></td>
                <td><?= h($returnedproducts->product_id) ?></td>
                <td><?= h($returnedproducts->quantity) ?></td>
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
        <?php if (!empty($sellingbill->soldproducts)): ?>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                
                <th scope="col" style="width: 10%;"><?= $this->Paginator->sort('رقم المنتج') ?></th>
                <th scope="col" style="width: 40%;"><?= $this->Paginator->sort('اسم المنتج') ?></th>
                <th scope="col" style="width: 20%;"><?= $this->Paginator->sort('الضمان') ?></th>
                <th scope="col" style="width: 8%;"><?= $this->Paginator->sort('العدد') ?></th>
                <th scope="col" style="width: 11%;"><?= $this->Paginator->sort('السعر') ?></th>
                <th scope="col" style="width: 11%;"><?= $this->Paginator->sort('المجموع') ?></th>
                
            </tr>
        </thead>
        <tbody>


            <?php 
           
                $i=0;
            foreach ($sellingbill->soldproducts as $soldproducts): ?>
            <tr class="soldproduct">
                <td <?php echo ('id="product-id-'.$i.'"');?>> <?php echo($soldproducts->product_id); ?></td>
                <td <?php echo ('id="product-name-'.$i.'"');?>><?php echo($soldproducts->product_name); ?> </td>
                <td <?php echo ('id="product-waranty-'.$i.'"');?>><?php echo($soldproducts->product_waranty); ?></td>
                <td <?php echo ('id="product-quantity-'.$i.'"');?>><?php echo($soldproducts->quantity); ?></td>
                <td <?php echo ('id="product-price-'.$i.'"');?>><?php echo($soldproducts->product_price); ?></td>
                <td><?php echo($soldproducts->total); ?></td>
            </tr>

            <?php $i++;
             endforeach; ?>
        </tbody>
        </table>
        <?php endif; ?>
        
    </div>
</div>
