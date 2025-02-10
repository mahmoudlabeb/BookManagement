<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Book Management</h2>
        </div>
        <div class="sidebar-menu">
            <a href="{{ route('books.index') }}" class="sidebar-item"><i class="fa fa-book"></i> View Books</a>
            <a href="{{ route('books.create') }}" class="sidebar-item"><i class="fa fa-plus"></i> Add Book</a>
            <a href="#" class="sidebar-item"><i class="fa fa-user"></i> Profile</a>
            <a href="#" class="sidebar-item"><i class="fa fa-cog"></i> Settings</a>
            <a href="#" class="sidebar-item"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar">
            <div class="navbar-left">
                <a href="{{ url('/') }}" class="navbar-logo">
                    <i class="fa fa-home"></i> Home
                </a>
                <a href="{{ route('books.create') }}" class="navbar-item">Add Book</a>
                <a href="{{ route('books.index') }}" class="navbar-item">Show Books</a>
            </div>
            <div class="navbar-right">
                <a href="#" class="navbar-item">Profile</a>
                <a href="#" class="navbar-item">Logout</a>
            </div>
        </nav>

        <!-- Content Section -->
        <div class="content">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
