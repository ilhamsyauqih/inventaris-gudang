<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Dashboard'; ?> | Inventaris Percetakan</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f2e8;
            font-family: 'Inter', 'Segoe UI', sans-serif;
        }

        .krem-bg {
            background-color: #f7f1e3;
        }

        .bg-krem {
            background-color: #e6dcc8;
        }

        .text-krem {
            color: #7a6c5d;
        }

        /* ===== LAYOUT ===== */
        .layout {
            display: flex;
            min-height: 100vh;
            background: #f7f1e3;
        }

        .main-content {
            flex: 1;
            padding: 24px;
            transition: all 0.3s ease;
            min-width: 0;
            overflow-x: hidden;
            background-color: #f7f1e3;
            min-height: 100vh;
        }

        .main-content .container,
        .main-content .container-fluid {
            max-width: 100% !important;
            padding-left: 20px;
            padding-right: 20px;
        }

        /* ===== SIDEBAR ===== */
        .sidebar-krem {
            width: 260px;
            background: #f7f1e3;
            transition: width 0.3s ease;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
            padding: 20px 15px;
            overflow: hidden;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar-krem.collapsed {
            width: 80px;
        }

        .sidebar-krem.collapsed .menu-text,
        .sidebar-krem.collapsed .sidebar-brand span,
        .sidebar-krem.collapsed .sidebar-brand small,
        .sidebar-krem.collapsed .user-info,
        .sidebar-krem.collapsed .logout-btn span {
            display: none;
        }

        .sidebar-krem.collapsed .sidebar-menu a {
            justify-content: center;
        }

        .sidebar-krem.collapsed .user-avatar {
            margin: 0 auto;
        }

        .sidebar-brand {
            font-size: 18px;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .sidebar-brand small {
            display: block;
            font-size: 12px;
            color: #777;
        }

        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: #fff;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .user-avatar {
            font-size: 32px;
            color: #777;
        }

        .user-name {
            font-weight: 600;
            display: block;
        }

        .user-role {
            font-size: 12px;
            color: #888;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            /* flex-grow: 1; Removed so footer stays close to menu */
        }

        .sidebar-menu li {
            margin-bottom: 8px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            border-radius: 10px;
            color: #333;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .sidebar-menu a i {
            font-size: 18px;
        }

        .sidebar-menu a:hover {
            background: #e6dcc5;
        }

        .sidebar-menu a.active {
            background: #2f5d50;
            color: #fff;
        }

        .sidebar-footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px dashed rgba(121, 107, 93, 0.2);
        }

        .logout-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            border-radius: 10px;
            color: #b00020;
            text-decoration: none;
        }

        .logout-btn:hover {
            background: #f2dede;
        }

        .sidebar-toggle {
            background: transparent;
            border: none;
            font-size: 22px;
            margin-bottom: 20px;
            cursor: pointer;
            color: #333;
        }

        /* ===== DASHBOARD STATS ===== */
        .stat-card {
            min-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 14px;
            border: none;
            background-color: #fffaf0;
            padding: 20px;
            transition: transform 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .section-title {
            font-weight: 700;
            color: #6f5e4b;
        }

        /* ===== FORM UI ===== */
        .form-card {
            background: #fff;
            border-radius: 20px;
            padding: 32px;
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(111, 94, 75, 0.08);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px 32px;
        }

        .form-row {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 15px;
        }

        .form-row.full {
            grid-column: 1 / -1;
        }

        .icon-box {
            width: 44px;
            height: 44px;
            background: #fdfaf3;
            border: 1px solid #e7d8bd;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b5e3b;
            font-size: 18px;
        }

        .form-input {
            flex: 1;
        }

        .form-pill {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e7d8bd;
            background: #fdfaf3;
            font-size: 14px;
            width: 100%;
            transition: all 0.2s;
        }

        .form-pill:focus {
            border-color: #6b5e3b;
            box-shadow: 0 0 0 4px rgba(107, 94, 59, 0.1);
            outline: none;
            background: #fff;
        }

        .btn-pill {
            border-radius: 30px;
            padding: 10px 28px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-pill:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* ===== CATEGORY FILTER ===== */
        .category-filter-card {
            background: #fff;
            border-radius: 20px;
            padding: 20px 24px;
            box-shadow: 0 10px 25px rgba(111, 94, 75, 0.05);
            border: 1px solid rgba(231, 216, 189, 0.3);
        }

        .filter-label {
            font-size: 12px;
            font-weight: 700;
            color: #8b7e61;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .category-chips {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 8px;
        }

        .category-chip {
            padding: 8px 24px;
            border-radius: 30px;
            background: #fdfaf3;
            border: 1px solid #e7d8bd;
            color: #6b5e3b;
            text-decoration: none;
            white-space: nowrap;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .category-chip.active {
            background: #6b5e3b;
            color: #fff;
            border-color: #6b5e3b;
            box-shadow: 0 4px 12px rgba(107, 94, 59, 0.2);
        }

        /* ===== ITEM CARDS ===== */
        .card-barang {
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: #fff;
        }

        .card-barang:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(111, 94, 75, 0.12) !important;
        }

        .card-img-container {
            height: 180px;
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .barang-img-fluid {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .badge-category {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            color: #8b7e61;
            background: #fdfaf3;
            padding: 4px 12px;
            border-radius: 8px;
            border: 1px solid #e7d8bd;
            margin-bottom: 10px;
            display: inline-block;
        }

        .barang-title {
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .stok-info {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .bg-success-soft {
            background: rgba(40, 167, 69, 0.1) !important;
        }

        .bg-danger-soft {
            background: rgba(220, 53, 69, 0.1) !important;
        }

        .btn-outline-krem {
            border: 1.5px solid #e7d8bd;
            color: #6b5e3b;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.2s;
        }

        .btn-outline-krem:hover {
            background: #6b5e3b;
            color: #fff;
        }

        .z-index-2 {
            z-index: 2;
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>

</head>

<body class="krem-bg">

    <div class="layout" id="layout">

        <?php $this->load->view('templates/sidebar'); ?>

        <div class="main-content" id="mainContent">