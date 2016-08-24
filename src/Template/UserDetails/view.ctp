<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Detail'), ['action' => 'edit', $userDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Detail'), ['action' => 'delete', $userDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userDetails view large-9 medium-8 columns content">
    <h3><?= h($userDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $userDetail->has('user') ? $this->Html->link($userDetail->user->name, ['controller' => 'Users', 'action' => 'view', $userDetail->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Profession') ?></th>
            <td><?= h($userDetail->profession) ?></td>
        </tr>
        <tr>
            <th><?= __('Designation') ?></th>
            <td><?= h($userDetail->designation) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile No') ?></th>
            <td><?= h($userDetail->mobile_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Office Address') ?></th>
            <td><?= h($userDetail->office_address) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($userDetail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($userDetail->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($userDetail->updated_at) ?></td>
        </tr>
    </table>
</div>
