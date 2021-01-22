<div class="col-lg-6">
  <div class="checkout__input">
    <p>Nama<span>*</span></p>
    <input type="text" value="{{ $user -> name }}" disabled>
  </div>
  <div class="checkout__input">
    <p>Alamat<span>*</span></p>
    <input type="text" value="{{ $user -> alamat }}" name="alamat">
  </div>
  <div class="checkout__input">
    <p>Kota<span>*</span></p>
    <input type="text" value="{{ $user -> kota }}" name="kota">
  </div>
  <div class="checkout__input">
    <p>Kode Pos<span>*</span></p>
    <input type="text" value="{{ $user -> kodePos }}" name="kodePos">
  </div>
  <div class="checkout__input">
    <p>Nomor Telepon<span>*</span></p>
    <input type="text" value="{{ $user -> nomorTelepon }}" name="nomorTelepon">
  </div>
</div>
