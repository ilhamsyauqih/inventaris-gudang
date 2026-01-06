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
    }

    .bg-krem {
        background-color: #e6dcc8;
    }

    .text-krem {
        color: #7a6c5d;
    }

    .card-krem {
        background-color: #fffaf0;
        border-radius: 14px;
        border: none;
    }

    .stat-card {
        min-height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .dashboard-section {
        margin-bottom: 32px;
    }
    .main-content {
    margin-left: 260px; /* sama dengan lebar sidebar */
    padding: 20px;
    background-color: #f7f1e3;
    min-height: 100vh;
}
    /* SIDEBAR WRAPPER */
.sidebar-krem {
    position: fixed;
    left: 0;
    top: 0;
    width: 260px;
    height: 100vh;
    background: #f7f1e3;
    padding: 20px;
    display: flex;
    flex-direction: column;
    box-shadow: 2px 0 10px rgba(0,0,0,0.05);
    z-index: 1000;
}

/* BRAND */
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

/* USER */
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

/* MENU */
.sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    flex-grow: 1;
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

/* FOOTER */
.sidebar-footer {
    margin-top: auto;
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
/* STYLE UNTUK HALAMAN BARANG MASUK */
/* BACKGROUND */
.krem-bg {
    background-color: #f7f1e3;
    min-height: 100vh;
}

/* TITLE */
.page-title {
    font-weight: 600;
}

/* BUTTON */
.rounded-btn {
    border-radius: 10px;
    padding: 10px 18px;
}

/* CARD */
.data-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #ffffff;
    border-radius: 14px;
    padding: 18px 22px;
    margin-bottom: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.04);
    transition: transform .2s ease, box-shadow .2s ease;
}

.data-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(0,0,0,0.06);
}

/* LEFT */
.data-card-left h5 {
    margin: 0;
    font-weight: 600;
}

/* MIDDLE */
.data-card-middle {
    display: flex;
    gap: 24px;
}

.info-box {
    text-align: center;
}
.info-box span {
    display: block;
    font-size: 12px;
    color: #888;
}
.info-box strong {
    font-size: 15px;
}

/* RIGHT */
.data-card-right {
    text-align: right;
}

/* BADGE */
.badge-krem {
    background: #e6dcc5;
    color: #333;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
}

</style>

</head>
<body>
<!-- WRAPPER KONTEN -->
<div class="main-content">

