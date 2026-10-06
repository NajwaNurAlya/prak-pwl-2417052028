<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'PWL System' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        body {
            background: #0f0f14;
            color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .dark-navbar {
            background: #15151d;
            border-bottom: 1px solid #292936;
            padding: 18px 0;
        }

        .navbar-brand {
            color: #ffffff !important;
            letter-spacing: 1px;
        }

        .brand-icon {
            color: #c9a7ff;
            margin-right: 8px;
        }

        .nav-link-custom {
            color: #a9a9b5;
            text-decoration: none;
            transition: 0.2s;
        }

        .nav-link-custom:hover {
            color: #ffffff;
        }

        .page-content {
            flex: 1;
            padding: 45px 0;
        }

        .page-title {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #858593;
            margin-bottom: 30px;
        }

        .stat-card {
            background: #181820;
            border: 1px solid #292936;
            border-radius: 16px;
            padding: 22px;
            height: 100%;
        }

        .stat-label {
            color: #858593;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .stat-number {
            font-size: 28px;
            font-weight: 700;
            margin-top: 8px;
        }

        .user-table-card {
            background: #181820;
            border: 1px solid #292936;
            border-radius: 18px;
            overflow: hidden;
            margin-top: 25px;
        }

        .table {
            margin-bottom: 0;
            color: #f5f5f5;
        }

        .table thead {
            background: #20202a;
        }

        .table th {
            color: #9f9fac;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            padding: 17px;
            border: none;
        }

        .table td {
            padding: 17px;
            border-color: #292936;
            vertical-align: middle;
        }

        .table tbody tr {
            background: #181820;
            transition: 0.2s;
        }

        .table tbody tr:hover {
            background: #20202a;
        }

        .user-name {
            font-weight: 600;
        }

        .class-badge {
            background: #29213a;
            color: #c9a7ff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .dark-footer {
            background: #15151d;
            border-top: 1px solid #292936;
            padding: 22px 0;
            color: #858593;
        }

        .dark-footer p {
            color: #dcdce5;
            font-weight: 600;
        }

    </style>
</head>

<body>

    @include('components.navbar')

    <main class="page-content">
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>