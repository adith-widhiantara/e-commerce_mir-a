<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nomor Telepon</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $userList as $user )
          <tr>
            <td>
              {{ $loop -> iteration }}
            </td>
            <td>
              <a href="{{ route('admin.showUser', $user -> id) }}">
                {{ $user -> name }}
              </a>
            </td>
            <td>
              {{ $user -> alamat }}
            </td>
            <td>
              {{ $user -> nomorTelepon }}
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Nomor Telepon</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
