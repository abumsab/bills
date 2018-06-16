<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sellingbill $sellingbill
 */
echo $this->Html->css('autocomplete');

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sellingbills'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Returnedproducts'), ['controller' => 'Returnedproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Returnedproduct'), ['controller' => 'Returnedproducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Soldproducts'), ['controller' => 'Soldproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Soldproduct'), ['controller' => 'Soldproducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellingbills form large-9 medium-8 columns content">
    <?= $this->Form->create($sellingbill,['horizontal' => true]) ?>
    <fieldset>
        <legend><?= __('Add Sellingbill') ?></legend>
        
        <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="width: 25%;"><?= $this->Paginator->sort('رقم الجوال') ?></th>
                <th scope="col" style="width: 50%;"><?= $this->Paginator->sort('اسم الزبون') ?></th>
                <th scope="col" style="width: 25%;"><?= $this->Paginator->sort('المدينة') ?></th>
            </tr>
        </thead>
       
        <tbody>
             <tr>
                <td> <?php
                 echo $this->Form->control('customer_id', ['type' => 'text','label'=> false]);?> </td>

                 <td> <?php echo '<input type="text" id="customer-name" maxlength="12">';?> </td>

                 <td> <?php  echo '<input type="text" id="customer-address" maxlength="12" value="الرياض">' ?> </td>


            
            </tr>

        </tbody>
    </table>

            
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col" style="width: 10%;"><?= $this->Paginator->sort('رقم المنتج') ?></th>
                <th scope="col" style="width: 35%;"><?= $this->Paginator->sort('اسم المنتج') ?></th>
                <th scope="col" style="width: 18%;"><?= $this->Paginator->sort('الضمان') ?></th>
                <th scope="col" style="width: 8%;"><?= $this->Paginator->sort('العدد') ?></th>
                <th scope="col" style="width: 10%;"><?= $this->Paginator->sort('السعر') ?></th>
                <th scope="col" style="width: 10%;"><?= $this->Paginator->sort('المجموع') ?></th>
                <th scope="col" style="width: 10%;"><?= $this->Paginator->sort('الكمية المتوفرة') ?></th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            echo "<button type='button' id='new_customer'>زبون جديد</button>";

             $i=0;?>
            <?php 
            $t=10;
            if(isset($_GET['t'])) $t=$_GET['t'];
            //echo "<pre>",var_dump($products), "</pre>";
            $temp  = array('a' => 1, 'b'=> 2, 'c'=> 3);
            while ( $i<$t) { ?>
            <tr>
                <td> <?php echo $this->Form->control('Soldproducts.'.$i.'.product_id',['type'=>'text', 'label' => false , 'class'=> 'product_id ' ]); ?> </td>

                 <td> <?php echo $this->Form->control('Soldproducts.'.$i.'.name',['type'=>'text', 'label' => false  , 'class'=> 'name', 'autocomplete'=> 'on']); ?> </td>

                 <td> <?php echo $this->Form->control('Soldproducts.'.$i.'.waranty',[ 'disabled'=> true,  'label' => false , 'class'=> 'waranty']); ?> </td>


                <td><?php echo $this->Form->control('Soldproducts.'.$i.'.quantity', ['label' => false , 'value' => 0 , 'class'=> 'quantity']); ?></td>

                 <td> <?php echo $this->Form->control('Soldproducts.'.$i.'.price',[ 'disabled'=> true, 'value' => 0, 'label' => false , 'class'=> 'price']); ?> </td>

                <td><?php echo $this->Form->control('Soldproducts.'.$i.'.total', ['label' => false , 'value' => 0 , 'class'=> 'total'  ]); ?></td>
                <td> <?php echo $this->Form->control('Soldproducts.'.$i.'.avquantity',[ 'disabled'=> true, 'value' => 0, 'label' => false , 'class'=> 'avquantity']); ?> </td>
                
                
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>



    <?php

           
            
            

            echo $this->Form->control('total', [ 'value' => 0 ]);
            echo $this->Form->control('isaramex');
            echo $this->Form->control('ispost');
            echo $this->Form->control('truckingNo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ;
    
    echo $this->Html->script('jQuery');
    echo $this->Html->script('autocomplete');
    echo $this->Html->script('Sellingbill');
?>

</div>
