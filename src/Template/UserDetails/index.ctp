<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userDetails index large-9 medium-8 columns content">
    <h3><?= __('User Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('profession') ?></th>
                <th><?= $this->Paginator->sort('designation') ?></th>
                <th><?= $this->Paginator->sort('mobile_no') ?></th>
                <th><?= $this->Paginator->sort('office_address') ?></th>
                <th><?= $this->Paginator->sort('created_at') ?></th>
                <th><?= $this->Paginator->sort('updated_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userDetails as $userDetail): ?>
            <tr>
                <td><?= $this->Number->format($userDetail->id) ?></td>
                <td><?= $userDetail->has('user') ? $this->Html->link($userDetail->user->name, ['controller' => 'Users', 'action' => 'view', $userDetail->user->id]) : '' ?></td>
                <td><?= h($userDetail->profession) ?></td>
                <td><?= h($userDetail->designation) ?></td>
                <td><?= h($userDetail->mobile_no) ?></td>
                <td><?= h($userDetail->office_address) ?></td>
                <td><?= h($userDetail->created_at) ?></td>
                <td><?= h($userDetail->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
