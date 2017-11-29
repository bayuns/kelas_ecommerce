<?php
    $attributes = array('name'=>'login_form','id'=>'login_form');
    echo form_open('login',$attributes);
?>
        <?php if(!empty($pesan)): ?>
        <p id="message"><?php echo $pesan;?></p>
        <?php endif ?>

        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" size="20" class="form_field" value="<?php echo set_value('username'); ?>">
        </p>
        <?php
            echo form_error('username','<p class="field_error>','</p>'); 
        ?>

        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" size="20" class="form_field" value="<?php echo set_value('password'); ?>">
        </p>
        <?php
            echo form_error('password','<p class="field_error>','</p>'); 
        ?>

        <p>
            <input type="button" value="OK" name="submit" id="submit">
        </p>
    </form>