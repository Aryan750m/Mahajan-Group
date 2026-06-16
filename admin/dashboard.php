<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../db.php';

// Authentication Check
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

$db = DB::connect();

// Fetch counts for widgets
$countInquiries = $db->query("SELECT COUNT(*) FROM inquiries")->fetchColumn();
$countYoga = $db->query("SELECT COUNT(*) FROM yoga_registrations")->fetchColumn();
$countVolunteers = $db->query("SELECT COUNT(*) FROM volunteer_signups")->fetchColumn();
$countPartners = $db->query("SELECT COUNT(*) FROM channel_partners")->fetchColumn();

// Fetch Data lists
$inquiries = $db->query("SELECT * FROM inquiries ORDER BY id DESC")->fetchAll();
$yoga_regs = $db->query("SELECT * FROM yoga_registrations ORDER BY id DESC")->fetchAll();
$volunteers = $db->query("SELECT * FROM volunteer_signups ORDER BY id DESC")->fetchAll();
$partners = $db->query("SELECT * FROM channel_partners ORDER BY id DESC")->fetchAll();

// Check active tab
$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'inquiries';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahajan Admin Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        /* Specific adjustments for Admin page */
        .admin-nav-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #1e293b;
            color: #fff;
            padding: 15px 5%;
            margin-bottom: 30px;
        }
        .admin-nav-bar h1 { color: #fff; font-size: 22px; }
        .logout-link {
            color: #ef4444;
            font-weight: 600;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body class="admin-body">

    <!-- Admin Top Nav Bar -->
    <div class="admin-nav-bar">
        <h1>Mahajan Group | Admin Dashboard</h1>
        <div>
            <a href="../index.php" target="_blank" style="color:var(--gold); margin-right:20px; font-weight:600; font-size:14px;">View Live Site</a>
            <a href="logout.php" class="logout-link">Logout</a>
        </div>
    </div>

    <div class="admin-container">
        
        <!-- Metrics Stats Widgets -->
        <div class="stats-grid">
            <div class="stat-box" style="border-left-color: var(--primary-blue);">
                <div class="stat-num"><?php echo $countInquiries; ?></div>
                <div class="stat-label">Total Inquiries</div>
            </div>
            
            <div class="stat-box" style="border-left-color: var(--teal);">
                <div class="stat-num"><?php echo $countYoga; ?></div>
                <div class="stat-label">Yoga & Zumba Signups</div>
            </div>
            
            <div class="stat-box" style="border-left-color: #8E24AA;">
                <div class="stat-num"><?php echo $countVolunteers; ?></div>
                <div class="stat-label">Registered Volunteers</div>
            </div>
            
            <div class="stat-box" style="border-left-color: var(--gold);">
                <div class="stat-num"><?php echo $countPartners; ?></div>
                <div class="stat-label">Channel Partners</div>
            </div>
        </div>

        <!-- Admin Table Selection Tabs -->
        <div class="admin-tabs">
            <button class="admin-tab <?php echo $active_tab === 'inquiries' ? 'active' : ''; ?>" onclick="switchTab('inquiries')">General Inquiries</button>
            <button class="admin-tab <?php echo $active_tab === 'yoga' ? 'active' : ''; ?>" onclick="switchTab('yoga')">Yoga Registrations</button>
            <button class="admin-tab <?php echo $active_tab === 'volunteers' ? 'active' : ''; ?>" onclick="switchTab('volunteers')">Volunteers</button>
            <button class="admin-tab <?php echo $active_tab === 'partners' ? 'active' : ''; ?>" onclick="switchTab('partners')">Channel Partners</button>
        </div>

        <!-- Tab 1: General Inquiries Table -->
        <div class="admin-card" id="tab-inquiries" style="display: <?php echo $active_tab === 'inquiries' ? 'block' : 'none'; ?>;">
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <h3>Inquiries & Leads Management</h3>
                <a href="export_csv.php?type=inquiries" class="btn-csv">Export to Excel / CSV</a>
            </div>
            
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Service Info</th>
                            <th>Inquiry Message</th>
                            <th>Doc</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($inquiries)): ?>
                            <tr><td colspan="10" style="text-align:center;">No inquiries found.</td></tr>
                        <?php else: ?>
                            <?php foreach ($inquiries as $row): ?>
                                <tr>
                                    <td>#<?php echo $row['id']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['city']); ?></td>
                                    <td><span style="font-weight:600; color:var(--primary-blue);"><?php echo htmlspecialchars($row['service']); ?></span></td>
                                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                                    <td>
                                        <?php if (!empty($row['doc_path'])): ?>
                                            <a href="../<?php echo htmlspecialchars($row['doc_path']); ?>" target="_blank" style="color:var(--teal); font-weight:700;">View File</a>
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <span class="badge badge-<?php echo strtolower($row['status']); ?>">
                                            <?php echo htmlspecialchars($row['status']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div style="display:flex; gap:5px;">
                                            <a href="update_status.php?id=<?php echo $row['id']; ?>&type=inquiry&status=Contacted&tab=inquiries" class="btn-sm" title="Mark Contacted">☎ Contacted</a>
                                            <a href="update_status.php?id=<?php echo $row['id']; ?>&type=inquiry&status=Closed&tab=inquiries" class="btn-sm" title="Mark Closed">✓ Close</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab 2: Yoga Registrations Table -->
        <div class="admin-card" id="tab-yoga" style="display: <?php echo $active_tab === 'yoga' ? 'block' : 'none'; ?>;">
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <h3>Yoga & Zumba Classes Registrations</h3>
                <a href="export_csv.php?type=yoga" class="btn-csv">Export to Excel / CSV</a>
            </div>
            
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Batch</th>
                            <th>Fee status</th>
                            <th>Signup Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($yoga_regs)): ?>
                            <tr><td colspan="9" style="text-align:center;">No registrations found.</td></tr>
                        <?php else: ?>
                            <?php foreach ($yoga_regs as $row): ?>
                                <tr>
                                    <td>#<?php echo $row['id']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['city']); ?></td>
                                    <td><span style="font-weight:600; color:var(--teal);"><?php echo htmlspecialchars($row['batch']); ?></span></td>
                                    <td>
                                        <span class="badge badge-<?php echo $row['payment_status'] === 'Paid' ? 'closed' : 'new'; ?>">
                                            <?php echo htmlspecialchars($row['payment_status']); ?> (₹<?php echo number_format($row['amount']); ?>)
                                        </span>
                                    </td>
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td>
                                        <?php if ($row['payment_status'] !== 'Paid'): ?>
                                            <a href="update_status.php?id=<?php echo $row['id']; ?>&type=yoga&status=Paid&tab=yoga" class="btn-sm">Mark Paid</a>
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab 3: Volunteers Table -->
        <div class="admin-card" id="tab-volunteers" style="display: <?php echo $active_tab === 'volunteers' ? 'block' : 'none'; ?>;">
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <h3>Registered Volunteers</h3>
                <a href="export_csv.php?type=volunteers" class="btn-csv">Export to Excel / CSV</a>
            </div>
            
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Campaign Preference</th>
                            <th>Remarks / Skills</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($volunteers)): ?>
                            <tr><td colspan="8" style="text-align:center;">No volunteers found.</td></tr>
                        <?php else: ?>
                            <?php foreach ($volunteers as $row): ?>
                                <tr>
                                    <td>#<?php echo $row['id']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['city']); ?></td>
                                    <td><span style="font-weight:600; color:#8E24AA;"><?php echo htmlspecialchars($row['initiative']); ?></span></td>
                                    <td><?php echo htmlspecialchars($row['remarks']); ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tab 4: Channel Partners Table -->
        <div class="admin-card" id="tab-partners" style="display: <?php echo $active_tab === 'partners' ? 'block' : 'none'; ?>;">
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <h3>Channel Partner Networks</h3>
                <a href="export_csv.php?type=partners" class="btn-csv">Export to Excel / CSV</a>
            </div>
            
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Business Type</th>
                            <th>Exp. (Yrs)</th>
                            <th>Intro Remarks</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($partners)): ?>
                            <tr><td colspan="10" style="text-align:center;">No partner applications found.</td></tr>
                        <?php else: ?>
                            <?php foreach ($partners as $row): ?>
                                <tr>
                                    <td>#<?php echo $row['id']; ?></td>
                                    <td><strong><?php echo htmlspecialchars($row['name']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['city']); ?></td>
                                    <td><span style="font-weight:600; color:var(--gold);"><?php echo htmlspecialchars($row['business_type']); ?></span></td>
                                    <td><?php echo htmlspecialchars($row['experience']); ?></td>
                                    <td><?php echo htmlspecialchars($row['remarks']); ?></td>
                                    <td>
                                        <span class="badge badge-<?php echo $row['status'] === 'Approved' ? 'closed' : ($row['status'] === 'Rejected' ? 'new' : 'contacted'); ?>">
                                            <?php echo htmlspecialchars($row['status']); ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div style="display:flex; gap:5px;">
                                            <a href="update_status.php?id=<?php echo $row['id']; ?>&type=partner&status=Approved&tab=partners" class="btn-sm" style="color:green; font-weight:700;">Approve</a>
                                            <a href="update_status.php?id=<?php echo $row['id']; ?>&type=partner&status=Rejected&tab=partners" class="btn-sm" style="color:red; font-weight:700;">Reject</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        function switchTab(tabId) {
            // Hide all cards
            document.getElementById('tab-inquiries').style.display = 'none';
            document.getElementById('tab-yoga').style.display = 'none';
            document.getElementById('tab-volunteers').style.display = 'none';
            document.getElementById('tab-partners').style.display = 'none';
            
            // Remove active classes
            const tabs = document.querySelectorAll('.admin-tab');
            tabs.forEach(tab => tab.classList.remove('active'));
            
            // Show selected and activate button
            document.getElementById('tab-' + tabId).style.display = 'block';
            
            // Highlight button
            event.currentTarget.classList.add('active');
            
            // Update URL search parameters
            const url = new URL(window.location.href);
            url.searchParams.set('tab', tabId);
            window.history.pushState({}, '', url);
        }
    </script>
</body>
</html>
