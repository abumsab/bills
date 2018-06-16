<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('name',['label'=> 'اسم المستخدم']) ?>
<?= $this->Form->control('password',['label'=> 'كلمة المرور']) ?>
<?= $this->Form->button('ادخل') ?>
<?= $this->Form->end() ?>