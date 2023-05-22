<h3>Jadwal Lapangan</h3>
<ul>
<thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Lapangan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Durasi</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
</ul>
@foreach ($jadwal as $jadwal)

<ul>
    <td>{{ $jadwal->nama }}</td>
    <td>{{ $jadwal->lapangan }}</td>
    <td>{{ $jadwal->tanggal }}</td>
    <td>{{ $jadwal->jam }}</td>
    <td>{{ $jadwal->durasi}}</td>
    <td>{{ $jadwal->harga}}</td>
</ul>
@endforeach
