@extends('layouts.m-layout')


@section('content')
  <h1>LE LUNGHE!</h1>
    <div class="imgContRow">
    <?php
    foreach ($data as $dato) {
      if ($dato['tipo'] == 'lunga') {
        ?>
        <div class="imgCont">
          <img src="<?php echo $dato['src']; ?>" title="<?php echo $dato['titolo']; ?> " alt="404">

        </div>
        <?php
      }
    }
    ?>
  </div>

  <h1>LE CORTE</h1>
  <div class="imgContRow">
  <?php
  foreach ($data as $dato) {
    if ($dato['tipo'] == 'corta') {
      ?>
      <div class="imgCont">
        <img src="<?php echo $dato['src']; ?>" title="<?php echo $dato['titolo']; ?> " alt="404">

      </div>
      <?php
    }
  }
  ?>
</div>

<h1>LE CORTISSIME</h1>
<div class="imgContRow">
<?php
foreach ($data as $dato) {
  if ($dato['tipo'] == 'cortissima') {
    ?>
    <div class="imgCont">
      <img src="<?php echo $dato['src']; ?>" title="<?php echo $dato['titolo']; ?> " alt="404">

    </div>
    <?php
  }
}
?>
</div>
@endsection
