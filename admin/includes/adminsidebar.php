<input type="checkbox" id="check1">
<label for="check1">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar1">
    <header>
        <a href="<?php echo BASE_URL . '/admin/dashboard.php'; ?>">Dashboard</a>
    </header>
    <ul>
        <li><a href="<?php echo BASE_URL . '/admin/posts/index.php'; ?>"><i class="fas fa-qrcode"></i>Manage Posts</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/users/index.php'; ?>"><i class="fas fa-calendar-week"></i>Manage Users</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/topics/index.php'; ?>"><i class="fas fa-stream"></i>Manage Topics</a></li>
        <li><a href="<?php echo BASE_URL . '/admin/messages/index.php'; ?>"><i class="fas fa-qrcode"></i>Messages</a></li>
    </ul>
</div>