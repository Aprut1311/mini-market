@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto my-0 bg-yellow-100">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-yellow-100">
                <!-- Header Section -->
                <div class="text-center bg-cream-dark text-xl font-semibold px-6 py-4 rounded-t-lg">
                    {{ __('Dashboard Admin') }}
                </div>

                <!-- Content Section -->
                <div class="p-6">
                    @if (session('status'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Selamat Datang, Admin!</h3>
                    <p class="text-gray-700 mb-6 text-center">Ini adalah halaman dashboard khusus untuk admin.</p>

                    <!-- Admin Specific Links -->
                    <ul class="list-disc pl-5 text-gray-700 space-y-2">
                        <li>
                            <a href="{{ route('product.index') }}" class="text-blue-500 hover:text-blue-400">
                                Kelola Produk
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}" class="text-blue-500 hover:text-blue-400">
                                Kelola Pengguna
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('transaction.index') }}" class="text-blue-500 hover:text-blue-400">
                                Lihat Transaksi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('branch.index') }}" class="text-blue-500 hover:text-blue-400">
                                Kelola Cabang
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
