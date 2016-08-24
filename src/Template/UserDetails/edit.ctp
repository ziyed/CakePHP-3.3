<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($userDetail) ?>
    <fieldset>
        <legend><?= __('Edit User Detail') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('profession');
            echo $this->Form->input('designation');
            echo $this->Form->input('mobile_no');
            echo $this->Form->input('office_address');
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
