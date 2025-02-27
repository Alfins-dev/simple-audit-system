<?php
session_start();

// Simple auth (redirect to login page, if unauthenticated)
if (!isset($_SESSION['user'])) {
    header('Location: ../../auth/login.php');
    exit();
}

// DB configuration
require_once '../../config/config.php';

$title = 'Dashboard - Hotel Audit';

// Components
include '../../includes/ui/header.php';
include '../../includes/ui/sidebar.php';

?>

<?php include '../../includes/ui/navbar.php'; ?>
<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

    <?php include '../../includes/ui/sidebar.php'; ?>
  
  <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
    <main>
        <?php include 'dashboard-manager-view.php' ?>
    </main>
    <?php include '../../includes/ui/footer.php'; ?>
  </div>

</div>
