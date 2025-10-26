<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah UMKM | Dashboard</title>

    {{-- Start Css --}}
    @include('layouts.guest.css')
    {{-- End Css --}}
    <style>
        /* CSS Section Start */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #b7c8d7;
        }

        /* Sidebar Styling */
        body .sidebar {
            background: linear-gradient(180deg, #6f8fab 0%, #2f3b45 100%);
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.08);
        }

        .sidebar a {
            transition: all 0.25s ease-in-out;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.12);
            transform: translateX(4px);
        }

        .sidebar a.active {
            background: rgba(255, 255, 255, 0.18);
            font-weight: 600;
        }

        .sidebar .bottom-link {
            margin-top: auto;
            padding-bottom: 2rem;
        }

        input:focus,
        textarea:focus {
            border-color: #444c74 !important;
            box-shadow: 0 0 0 2px rgba(63, 81, 181, 0.3) !important;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 15px rgba(236, 238, 246, 0.4);
        }

        /* CSS Section End */
    </style>
</head>

<body>

    <div class="flex min-h-screen">

        {{-- Start sidebar --}}
        @include('layouts.guest.sidebar')
        {{-- End sidebar --}}

        <!-- ===== MAIN AREA (Header, Content, Footer) WRAPPER ===== -->
        <div class="flex-1 ml-64 flex flex-col">

            {{-- Start Header --}}
            @include('layouts.guest.header')
            {{-- End Header --}}

            {{-- Start main content --}}
           @yield('content')
            {{-- End main content --}}

            {{-- Start footer --}}
            @include('layouts.guest.footer')
            {{-- End footer --}}

        </div>
    </div>

    {{-- Start javascript --}}
    @include('layouts.guest.js')
    {{-- End javascript --}}

</body>

</html>
