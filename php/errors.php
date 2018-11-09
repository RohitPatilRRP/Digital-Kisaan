<?php if(count($errors)>0): ?>
<div class="errs" 
style="width: 500px;
height:auto;
padding-left: 5px;border-style: none;
border-radius:3px;
color: #ffffff;
background:red;
position:relative;
text-align: center;"">
    <?php foreach($errors as $error):?>
        <p><?php echo $error; ?></p>
    <?php endforeach ?>
</div>
<?php endif ?>