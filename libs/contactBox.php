<div class="contactBox">
    <h3><?php echo ${'title_contact_'.$lang_web}; ?></h3>
    <div class="infoContact flexBox flexBox--center flexBox--between">
        <div class="col">
            <p class="labelContact"><?php echo ${'label_call_'.$lang_web}; ?></p>
            <p class="phoneNumb"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $phoneNumb; ?></p>
        </div>
        <div class="col">
            <p class="labelContact">Email Us</p>
            <p class="phoneNumb"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="maito:<?php echo get_field('email',$post_info->ID); ?>"><?php echo get_field('email',$post_info->ID); ?></a></p>
        </div>
    </div>
    <a href="javascript:void(0)" class="p3 callForm"><i class="fa fa-envelope" aria-hidden="true"></i>Quick quote</a>
</div>