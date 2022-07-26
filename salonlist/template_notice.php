<div class="item">
  <div class="inner">
    <h4><?php echo $salonname; ?></h4>
    <dl>
      <dt>営業時間：</dt>
      <dd><?php echo $buisiness_hours; ?></dd>
    </dl>
    <dl>
      <dt>定休日：</dt>
      <dd><?php echo $holiday; ?></dd>
    </dl>
    <dl>
      <dt>所在地：</dt>
      <dd><?php echo $address; ?></dd>
    </dl>
    <dl>
      <dt>TEL：</dt>
      <dd><?php echo $tel; ?></dd>
    </dl>
  </div>

  <div class="link_wrap">
    <?php if($instagram_link != ''){ ?>
    <div class="link instagram purple">
      <a href="<?php echo $instagram_link; ?>" target="_blank" rel="noopener"></a>
    </div>
    <?php } ?>
    <div class="link notice"><a><?php echo $schedule; ?>coming soon</a></div>
  </div>

</div>