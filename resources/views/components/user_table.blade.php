<div class="user-table-card">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>
                            #{{ str_pad($user->id, 2, '0', STR_PAD_LEFT) }}
                        </td>
                        <td>
                            <span class="user-name">
                                {{ $user->nama }}
                            </span>
                        </td>
                        <td>
                            {{ $user->nim }}
                        </td>
                        <td>
                            <span class="class-badge">
                                {{ $user->nama_kelas }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-5">
                            Belum ada data pengguna.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>