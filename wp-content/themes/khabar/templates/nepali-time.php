<?php $timestamp = \Khabar\Calendar\Nepali::getInstance()->timestamp();?>
<?php if($timestamp):?>
<ul class="inline">
  <?php $nepali = \Khabar\Calendar\Nepali::getInstance()->date();?>
  <li class="nepali_date">
    <span class="muted">
      अहिले नेपालमा:
    </span>
    <i class="icon-calendar"></i>
    <span class="week_day">
      <?php echo $nepali['day']?>,
    </span>
    <span class="date">
      <?php echo $nepali['date']?>
    </span>
    <span class="month">
      <?php echo $nepali['nmonth']?>
    </span>
    <span class="year">
      <?php echo $nepali['year']?>
    </span>
    <span id="clock" time="<?php //echo $timestamp;?>">
      <i class="icon-time"></i>
      <span id="time"></span>
    </span>
  </li>
</ul>
<?php endif;?>

