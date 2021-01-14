<a target="_blank" href="{{ \App\Biodata::where('name', 'facebook')->first()->keterangan }}">
  <i class="fab fa-facebook-f"></i>
</a>
<a target="_blank" href="{{ \App\Biodata::where('name', 'instagram')->first()->keterangan }}">
  <i class="fab fa-instagram"></i>
</a>
<a target="_blank" href="http://wa.me/{{ \App\Biodata::where('name', 'nomorTelepon')->first()->keterangan }}">
  <i class="fab fa-whatsapp"></i>
</a>
